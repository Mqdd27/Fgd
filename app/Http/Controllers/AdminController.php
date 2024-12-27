<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    function index()
    {
        // return view('dashboard');
        $role = Auth::user()->role;

        switch ($role) {
            case 'sm':
                return redirect('/dashboard/admin');
            case 'user':
                return redirect('/dashboard/user');
            case 'supplier':
                return redirect('/dashboard/supplier');
            default:
                abort(403, 'Unauthorized');
        }
    }
    function admin()
    {
        // echo "<h1> Hello, " . Auth::user()->name . "</h1>";
        // echo "<h1>Ini Halaman Admin</h1>";
        // echo "<a href='/logout'>Logout</a>"; // Arahkan ke /logout
        return view('adminDashboard');
    }

    function user()
    {
        // echo "<h1> Hello, " . Auth::user()->name . "</h1>";
        // echo "<h1>Ini Halaman User</h1>";
        // echo "<a href='/logout'>Logout</a>"; // Arahkan ke /logout
        return view('userDashboard');
    }

    function supplier()
    {
        // echo "<h1> Hello, " . Auth::user()->name . "</h1>";
        // echo "<h1>Ini Halaman Supplier</h1>";
        // echo "<a href='/logout'>Logout</a>"; // Arahkan ke /logout
        return view('supplierDashboard');
    }

    // function edit($id)
    // {
    //     $user = User::findOrFail($id); // Ambil data berdasarkan ID, atau lempar error 404 jika tidak ditemukan
    //     return view('editForm', compact('user')); // Kirim data ke view
    // }
}
