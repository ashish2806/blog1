<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
    	dd();
    		return view('Account.create');
    }	
}
