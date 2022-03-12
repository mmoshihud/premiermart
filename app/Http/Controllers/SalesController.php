<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Sale;

class SalesController extends Controller
{
    public function dashboard()
    {
        return view('sales.dashboard');
    }
    public function order_view()
    {
        // $orders = Order::with('orders')->get();
        // $orders = DB::select('select * from orders');
        $orders = Sale::with('orders')->get();
        return view('sales.orders', ['order' => $orders]);
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
        $req->validate(
            [
                'name' => 'required',
                'currency' => 'required|regex:/^[$][1-9]/',
                'quantity' => 'required',
                'category' => 'required',
            ]
        );
        $sale = new Sale();
        $sale->name = $req->name;
        $sale->price = $req->currency;
        $sale->p_quantity = $req->quantity;
        $sale->category = $req->category;
        $sale->save();
        return (redirect('/products'));
    }
    public function sell_product()
    {
        $sale = DB::select('select * from orders');
    }
}
