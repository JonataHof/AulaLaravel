<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests\CreateProductrequest;

class ProductsController extends Controller {

    function index()
    {
        $products = Product::all();
        return view('products/index', compact('products'));
    }

    function create()
    {
      return view('products/create');
    }

    function store(CreateProductrequest $request)
    {
      Product::create($request->all());
      return redirect('products');
    }

    function destroy(Product $product)
    {
      $product->delete();
      return redirect('products');
    }
    function edit(Product $product)
    {
    	// dd($product);
        return view('products/edit', compact('product'));
    }
    
    function update(Product $product, CreateProductrequest $request)
    {
    	$product->update($request->all());
    	 return redirect('products');
    }

}
