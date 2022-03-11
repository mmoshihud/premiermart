<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function dashboard()
    {
        return view('sales.dashboard');
    }
    public function order_view()
    {
        $name = "Rtx 3080";
        $id = 1001;
        $price = "$800";
        $quantity = 100;
        return view('sales.orders')->with('name', $name)->with('id', $id)->with('price', $price)->with('quantity', $quantity);
    }
    public function product_view()
    {
        $data = [1001, "Rtx 3090", "$1000", 10];
        $name = ["Rtx 3090", "Ryzen 5 3600", "Rtx 4090"];
        $id = [01, 402, 801];
        $price = ["$800", "$200", "$1000"];
        $quantity = [10, 200, 5];
        return view('sales.products')->with('data', $data)->with('id', $id)->with('price', $price)->with('quantity', $quantity);
    }
}
