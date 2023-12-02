<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index(Request $request)
    // {
    //     $Ncart = [];

    //     if (auth()->user()) {
    //         $iduser = auth()->user()->id;
    //         $cart = Cart::where('user_id', $iduser)->with('product')->get();

    //         foreach ($cart as $item) {
    //             array_push($Ncart, $item->productId);
    //         }

    //         $items = count($Ncart);
    //     } else {
    //         $cart = session('cart');
    //     }

    //     // $coupon = coupons::where('couponName', $request->coupon)->first();

    //     if ($cart != null) {
    //         $total = 0;

    //         foreach ($cart as $cartItem) {
    //             $total += $cartItem['quantity'] * (isset($cartItem->product) ? $cartItem->product->price : $cartItem['price']);
    //         }
    //         ;
    //         // if ($coupon) {
    //         //     $total = (float) ($total - ($total * $coupon->discount));
    //         // }
    //     } else {
    //         $total = 0;
    //     }


    //     return view('pages.shopping-cart', compact('cart', 'total'));


    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {

    //     $id = $request->input('product_id');
    //     $product = Product::where('id', $id)->first();
    //     if (auth()->user()) {
    //         $iduser = auth()->user()->id;
    //         $productId = $product->id;
    //         $quantity = $request->input('quantity');

    //         // Check if the product already exists in the cart
    //         $existingCart = Cart::where('user_id', $iduser)
    //             ->where('product_id', $productId)
    //             ->first();

    //         if ($existingCart) {
    //             // Product already exists in the cart, so increment the quantity
    //             $existingCart->update([
    //                 'quantity' => $existingCart->quantity + $quantity
    //             ]);
    //         } else {
    //             // Product does not exist in the cart, so create a new record
    //             Cart::create([
    //                 'user_id' => $iduser,
    //                 'product_id' => $productId,
    //                 'quantity' => $quantity
    //             ]);
    //         }
    //     } else {
    //         $sessioncart = session()->get('cart', []);
    //         if (isset($sessioncart[$id])) {

    //             $sessioncart[$id]['quantity'] += isset($request->quantity) ? $request->quantity : 1;

    //             session()->put('cart', $sessioncart);
    //         } else {
    //             $sessioncart[$id] = [
    //                 'id' => $id,
    //                 'productId' => $product->id,
    //                 'productname' => $product->name,
    //                 'description' => $product->description,
    //                 'quantity' => isset($request->quantity) ? $request->quantity : 1,
    //                 'image' => $product->image,
    //                 'price' => $product->price,

    //             ];
    //         }
    //         session()->put('cart', $sessioncart);
    //     }


    //     return redirect()->back();
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\cart  $cart
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(cart $cart)
    // {

    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\cart  $cart
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(cart $cart)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\cart  $cart
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, cart $cart)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\cart  $cart
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(cart $cart)
    // {
    //     //
    // }

    // public function cartUpdateS(Request $request)
    // {
    //     $cart = session()->get('cart', []); // Retrieve the cart from session

    //     foreach ($cart as $key => $item) {
    //         $quantity = $request->input('quantity' . $item['productId']);

    //         // Check if the quantity is valid (non-negative integer)
    //         if (!is_numeric($quantity) || $quantity < 0 || floor($quantity) != $quantity) {
    //             return redirect()->back()->with('error', 'Invalid quantity for ' . $item['productname']);
    //         }

    //         // Update the quantity
    //         $cart[$key]['quantity'] = $quantity;
    //     }

    //     // Save the updated cart back to session
    //     session()->put('cart', $cart);

    //     return redirect()->back()->with('success', 'The cart has been updated successfully');
    // }

    // public function cartDeleteS(Request $request, $id)
    // {
    //     dd(session('cart'));
    // }

    // public function cartUpdateD(Request $request)
    // {

    //     $cartItems = Cart::where('user_id', auth()->user()->id)->get(); // Retrieve the cart items from the database

    //     foreach ($cartItems as $cartItem) {
    //         $quantity = $request->input('quantity' . $cartItem->product_id);

    //         // Check if the quantity is valid (non-negative integer)
    //         if (!is_numeric($quantity) || $quantity < 0 || floor($quantity) != $quantity) {
    //             return redirect()->back()->with('error', 'Invalid quantity for the product ' . $cartItem->product->name);
    //         }

    //         // Update the quantity
    //         $cartItem->quantity = $quantity;
    //         $cartItem->save();
    //     }

    //     return redirect()->back()->with('success', 'The cart has been updated successfully');
    // }

    public function cartPage()
    {
        return view('pages.shopping-cart');
    }
    public function addToCart(Request $request,$productId)
    {
        $product = Product::findOrFail($productId);
        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->price,
            'weight' => 0,
            'options' => ['image' => $product->image]
        ]);

        return redirect()->back();
    }
    public function qtyIncrement($id)
    {
        $product = Cart::get($id);
        $updateQty = $product->qty + 1;
        Cart::update($id, $updateQty);

        return redirect()->back();
    }
    public function qtyDecrement($id)
    {
        $product = Cart::get($id);
        $updateQty = $product->qty - 1;
        if ($updateQty > 0) {
            Cart::update($id, $updateQty);
        }

        return redirect()->back();
    }

    public function removeProduct($id)
    {
        Cart::remove($id);
        return redirect()->back();
    }
}