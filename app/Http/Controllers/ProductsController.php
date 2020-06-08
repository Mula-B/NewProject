<?php

namespace App\Http\Controllers;

use App\Product;
use App\Order;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){

        $products = Product::paginate(20);
        return View('product', compact('products'));
    }
}
