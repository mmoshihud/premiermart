<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use App\Models\Sale;
use Illuminate\Routing\Route;

class AdminController extends Controller
{
    public function login()
    {

        if (session()->has('user')) {
            return redirect()->route('adminProfile');
        } else {
            return view('Admin.adminLogin');
        }
    }
    public function loginSubmit(Request $req)
    {

        $req->validate(
            [
                'userName' => 'required|regex:/^[A-Za-z.]+$/',
                'password' => 'required|min:6'
            ]
        );
        $check = admin::where([
            ['userid', '=', $req->userName],
            ['password', '=', $req->password]
        ])->first();
        /*
        'username'=>'required|min:5|max:20|unique:students_info,username',
            'password'=>'required|min:6',
            */

        //echo session('user');
        if ($check) {
            $data = $req->input();
            $req->session()->put('user', $data['userName']);
            return redirect()->route('adminProfile');
        } else {
            return redirect()->route('adminLogin');
            // return view('Admin.adminLogin');
        }


        //return $check;
        //return redirect()->route('adminProfile');


        //return $req->input();
    }

    public function viewBuyer()
    {
        return Route('viewBuyer');
    }
    public function logout()
    {
        if (session()->has('user')) {

            session()->pull('user');
            return redirect()->route('adminLogin');
        }
    }
    public function adminProfile(request $req)
    {
        if ($req->session()->has('user')) {
            //return redirect()->route('adminProfile');
            return view('Admin.adminProfile');
        } else {
            return redirect()->route('adminLogin');
        }
        // return view('Admin.adminLogin');
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
}
