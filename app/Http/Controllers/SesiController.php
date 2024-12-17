<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SesiController extends Controller
{
    function index()
    {
        // echo 'hello';
        return view('login');
    }
}
