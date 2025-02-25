<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function index () {
        $orders  =  User::all();

        return view('pages.test', compact('orders'));
    }

    function create(Request $request) {
        $name   =  $request->input('name');


        dd('name -> ', $name);

    }
}
