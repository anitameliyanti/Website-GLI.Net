<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |---------------------------------------------------------------------------
    | Login Controller
    |---------------------------------------------------------------------------
    |
    | Controller ini menangani otentikasi pengguna untuk aplikasi dan
    | mengarahkan mereka ke layar beranda. Controller ini menggunakan trait
    | untuk memberikan fungsionalitas dengan mudah ke aplikasi.
    |
    */

    use AuthenticatesUsers;

    /**
     * Tempat untuk mengarahkan pengguna setelah login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Membuat instance controller baru.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Menampilkan form login.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('login');
    }
}
