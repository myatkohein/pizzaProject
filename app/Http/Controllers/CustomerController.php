<?php

namespace App\Http\Controllers;
use App\Pizza;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
        $pizza = Pizza::all();
        return view('customer.menu')->with("pizza",$pizza);
    }
    public function logout(){
        return view('customer.logout_customer');
    }
}
