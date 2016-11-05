<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller {

    function index()
    {
       dd(Product::all());
    }

}
