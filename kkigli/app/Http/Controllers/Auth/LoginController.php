<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        // Menjaga agar hanya pengguna yang belum login yang bisa mengakses halaman login
        $this->middleware('guest')->except('logout');
    }

    /**
     * Menampilkan form login untuk pengguna umum.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('login');
    }

    /**
     * Menampilkan form login untuk superadmin.
     *
     * @return \Illuminate\View\View
     */
    public function showSuperAdminLoginForm()
    {
        return view('auth.superadmin-login');
    }

    /**
     * Memproses login untuk superadmin.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function superAdminLogin(Request $request)
    {
        // Validasi email dan password
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cek jika pengguna terautentikasi
        if (Auth::attempt($credentials)) {
            // Cek jika pengguna adalah superadmin
            if (Auth::user()->role === 'superadmin') {
                // Arahkan ke halaman dashboard superadmin setelah login
                return redirect()->intended('/superadmin');
            }

            // Logout jika pengguna bukan superadmin
            Auth::logout();

            // Kembalikan error jika pengguna tidak memiliki akses sebagai superadmin
            return back()->withErrors(['email' => 'Tidak memiliki akses sebagai superadmin.']);
        }

        // Kembalikan error jika login gagal
        return back()->withErrors(['email' => 'Akun atau password tidak valid.']);
    }

    /**
     * Logout dan arahkan ke halaman login.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout(); // Melakukan logout pengguna
        return redirect('/login'); // Redirect ke halaman login setelah logout
    }
}
