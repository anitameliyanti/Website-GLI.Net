<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product; 
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function index()
    {
        // Ambil data pengguna dan pelanggan
        $users = User::all();
        $products = Product::all(); // Ambil semua data pelanggan

        // Kembalikan view dengan data
        return view('superadmin', compact('users', 'products'));
    }
}
