<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Menampilkan daftar pengguna.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Ambil semua data pengguna dari database
        $users = User::all();

        // Kembalikan view dengan data pengguna
        return view('superadmin.users.index', compact('users'));
    }
}
