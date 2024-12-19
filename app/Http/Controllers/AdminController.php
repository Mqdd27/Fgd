<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function admin()
    {
        echo "<h1> Hello, " . Auth::user()->name . "</h1>";
        echo "<h1>Ini Halaman Admin</h1>";
        echo "<a href='/logout'>Logout</a>"; // Arahkan ke /logout
    }

    function user()
    {
        echo "<h1> Hello, " . Auth::user()->name . "</h1>";
        echo "<h1>Ini Halaman User</h1>";
        echo "<a href='/logout'>Logout</a>"; // Arahkan ke /logout
    }

    function supplier()
    {
        echo "<h1> Hello, " . Auth::user()->name . "</h1>";
        echo "<h1>Ini Halaman Supplier</h1>";
        echo "<a href='/logout'>Logout</a>"; // Arahkan ke /logout
    }
}
