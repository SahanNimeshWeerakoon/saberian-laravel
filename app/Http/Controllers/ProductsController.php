<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return View('products.index', compact('products'));
    }

    public function create()
    {
        return View('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'vendor_id' => 'required',
            'branch_manager_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'count' => 'required'
        ]);

        $product = new Product();
        $product->vendor_id = $request->vendor_id;
        $product->branch_manager_id = $request->branch_manager_id;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->count = $request->count;
        $product->img = null;
        $product->save();
        
        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::leftJoin('vendors', 'vendors.id', '=', 'products.vendor_id')
        ->leftJoin('branch_managers', 'branch_managers.id', '=', 'products.branch_manager_id')
        ->select(['products.*', 'branch_managers.name as manager_name', 'branch_managers.branch_name', 'vendors.name as vendor_name'])
        ->where('products.id', '=', $id)->first();

        return View('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        return View('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'vendor_id' => 'required',
            'branch_manager_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'count' => 'required'
        ]);

        $product = Product::find($id);
        $product->vendor_id = $request->vendor_id;
        $product->branch_manager_id = $request->branch_manager_id;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->count = $request->count;
        $product->img = null;
        $product->save();
        
        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();
         
        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
}
