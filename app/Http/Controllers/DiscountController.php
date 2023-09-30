<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discounts = Discount::latest()->paginate(5);
        return view('admin.pages.discount.index', compact('discounts'))
            ->with((request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.discount.create');

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
            'discount_code' => 'required',
            'percentage' => 'required',
            'expired_date' => 'required|date_format:Y-m-d',
        ]);
        $input = $request->all();
        Discount::create($input);

        return redirect()->route('discount.index')
            ->with('success', 'Discount created successfully.');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function show(discount $discount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $discount = Discount::findOrFail($id);
        return view('admin.pages.discount.edit', compact('discount'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, discount $discount)
    {
        $request->validate([
            'discount_code' => 'required',
            'percentage' => 'required',
            'expired_date' => 'date_format:Y-m-d',

        ]);
        $input = $request->all();
        $discount->update($input);

        return redirect()->route('discount.index')
            ->with('success', 'Discount updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Discount::destroy($id);
        return redirect()->route('discount.index')
            ->with('success', 'Discount deleted successfully');
    }
}
