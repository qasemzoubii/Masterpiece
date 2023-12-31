<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Models\Review;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = product::latest()->paginate(5);
        return view('admin.pages.product.index', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all(); // Assuming you have a Category model
        return view('admin.pages.product.create', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required|exists:categories,id',
            // Ensure the category exists
            'image' => 'required|image',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg  ',
        ]);

        // All data that comes from the user are stored in the request
        $input = $request->all();

        // Handle the image upload
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = 'images/' . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = $profileImage;
        }

        // Loop through the input fields for images (image1, image2, image3, image4, image5)
        for ($i = 1; $i <= 5; $i++) {
            $inputName = 'image' . $i;

            if ($image = $request->file($inputName)) {
                $destinationPath = 'images/';
                $profileImage = 'images/' . date('YmdHis') . "-" . $i . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input[$inputName] = $profileImage;
            }
        }

        // Add the category_id to the input before creating the product
        // $input['category_id'] = $request->input('category_id');

        Product::create($input);

        return redirect()->route('product.index')
            ->with('success', 'Product created successfully.');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product1, $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     *@param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::findOrFail($id);
        return view('admin.pages.product.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required ',
            'description' => 'required ',
            'price' => 'required |min:1',

        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = 'images/' . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            $input['image'] = $product->image;
        }

        for ($i = 1; $i <= 5; $i++) {
            $inputName = 'image' . $i;

            if ($image = $request->file($inputName)) {
                $destinationPath = 'images/';
                $profileImage = 'images/' . date('YmdHis') . "-" . $i . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input[$inputName] = $profileImage;
            }
        }

        $product->update($input);

        return redirect()->route('product.index')
            ->with('success', 'Product updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('product.index')
            ->with('success', 'Product deleted successfully');
    }

    ///////////////////////////////home//////////////////////////////////

    public function home()
    {
        $productHero = Product::query()->orderBy('price', 'desc')->take(1)->first();
        $categories = Category::all();
        $products = Product::orderBy('created_at', 'desc')->take(6)->get();
        $randomProducts = Product::inRandomOrder()->take(6)->get();           

        return view('pages.index', compact('categories', 'products','randomProducts','productHero'));

    }


    public function shop(Request $request, $category_id)
    {
        $query = Product::query();

        $sort = $request->input('sort', 'az');
        if ($category_id !== null) {
            $query->where('category_id', $category_id);
        }

        // Price filtering logic
        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');

        if ($minPrice !== null && $maxPrice !== null) {
            $query->whereBetween('price', [$minPrice, $maxPrice]);
            // session()->flash('success', 'Price range filtered');
        }

        if ($sort === 'az') {
            $query->orderBy('name', 'asc');
        } elseif ($sort === 'za') {
            $query->orderBy('name', 'desc');
        } elseif ($sort === 'high_price') {
            $query->orderBy('price', 'desc');
        } elseif ($sort === 'low_price') {
            $query->orderBy('price', 'asc');
        }

        $products = $query->paginate(6);
        $categories = Category::all();
        $category = Category::find($category_id);
        // $products = Product::where('category_id', $category_id)->paginate(6);
        return view('pages.shop', compact('products', 'categories', 'category', 'category_id'));
    }




    public function product($product_id)
    {
        $product = product::where('id', $product_id)->first();
        $category = Category::where('id', $product->category_id)->first();
        $productCategory = $product->category_id;
        $related = Product::where('category_id', $productCategory)->inRandomOrder()->take(6)->get();


        $user = auth::user();
        $hasBeenBought = false;
        $Reviews = Review::where('product_id', $product_id)->get();
        if ($user) {
            foreach ($user->orders as $order) {
                foreach ($order->orderItems as $item) {
                    if ($item->product_id == $product_id) {
                        $hasBeenBought = true;
                    }
                }
            }
        }
        ;
        return view('pages.single-product', compact('product', 'category', 'productCategory', 'related', 'Reviews', 'hasBeenBought'));

    }


    public function search(Request $request, $category_id = null)
    {
        $query = Product::query();

        $sort = $request->input('sort', 'az');
        if ($category_id !== null) {
            $query->where('category_id', $category_id);
        }
        // Price filtering logic
        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');

        if ($minPrice !== null && $maxPrice !== null) {
            $query->whereBetween('price', [$minPrice, $maxPrice]);
            // session()->flash('success', 'Price range filtered');
        }

        if ($sort === 'az') {
            $query->orderBy('name', 'asc');
        } elseif ($sort === 'za') {
            $query->orderBy('name', 'desc');
        } elseif ($sort === 'high_price') {
            $query->orderBy('price', 'desc');
        } elseif ($sort === 'low_price') {
            $query->orderBy('price', 'asc');
        }

        $categories = Category::all();

        if ($request->has('name')) {
            $query->where('name', 'LIKE', '%' . $request->name . '%');
        }

        // If a category ID is provided, filter products by that category
        if ($category_id !== null) {
            $query->where('category_id', $category_id);
        }

        $products = $query->paginate(6);
        $category = Category::find($category_id);

        return view('pages.shop', compact('products', 'categories', 'category', 'category_id'));
    }







}





