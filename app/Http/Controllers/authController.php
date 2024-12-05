<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class authController extends Controller
{
   // Menampilkan form login
   public function showLoginForm()
   {
       return view('website.auth.login');
   }

   // Proses login
   public function login(Request $request)
   {
       $request->validate([
           'username' => 'required',
           'password' => 'required',
       ]);
   
       $username = 'admin';
       $password = '123';
   
       if ($request->username === $username && $request->password === $password) {
           $request->session()->put('user', $username); // Simpan session
           return redirect()->route('dashboard'); // Redirect ke dashboard
       }
   
       return back()->withErrors(['error' => 'Invalid credentials']);
   }
   
   // Logout
   public function logout()
   {
       // Hapus session user saat logout
       Session::forget('user');
       return redirect()->route('login');
   }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
