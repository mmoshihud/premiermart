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
        $orders = DB::select('SELECT orders.*, products.* FROM products LEFT JOIN orders on products.id=orders.pro_id');
        return view('sales.orders', ['order' => $orders]);
    }
    public function product_view()
    {
        $database = Sale::all();
        return view('sales.products')->with('data', $database);
    }
    public function product_submit()
    {
        return view('sales.add_product');
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
    public function edit_product(Request $req)
    {
        $pd = Sale::where('id', $req->id)->first();
        return view('sales.edit_products')
            ->with('id', $req->id)
            ->with('name', $pd->name)
            ->with('price', $pd->price)
            ->with('p_quantity', $pd->p_quantity)
            ->with('category', $pd->category);
    }
    public function update_product(Request $req)
    {
        $sale = Sale::where('id', $req->id)->first();
        $sale->name = $req->name;
        $sale->price = $req->currency;
        $sale->p_quantity = $req->quantity;
        $sale->category = $req->category;
        $sale->save();
        return redirect("/products");
    }
}
