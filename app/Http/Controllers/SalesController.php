<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;

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
        $database = Sale::all();
        return view('sales.products')->with('data', $database);
    }
    public function sell_item($id)
    {
        $dt = Sale::where('id', $id);
    }
    public function product_submit()
    {
        return view('sales.add');
    }
    public function product_add(Request $req)
    {
        $req->validate(['currency-field' => 'required' | 'regex:/^[$ 1-9]/']);
        return redirect("/products");
    }
}
