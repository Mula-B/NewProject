<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index(){

        $orders = Order::paginate(20);
        $order = Order::where('id')->with('products')->orderBy('id')->first();
        $products = Product::where('id', true)->get();
        return View('order', compact('orders', 'order', 'products'));
    }

    
    public function addProduct($id)
    {
        $order = Order::where('id', $id)->with('products')->orderBy('id')->first();

        $products = Product::where('id', true)->get();

        return view('order', compact('products', 'id'));
    }
}
