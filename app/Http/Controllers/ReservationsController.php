<?php

namespace App\Http\Controllers;
use App\Product;
use App\Reservation;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    public function index(){

        $reservations = Reservation::paginate(10);
        $products = Product::where('id', true)->get();

        return View('reservation', compact('reservations', 'products'));
    }
}
