<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('Auth/login');
    }

    public function loginPost(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            if(Auth::user()->role == 'admin'){
                return redirect()->intended('adminDashboard');
            }
            else{
                return redirect()->intended('userDashboard');
            }
            
        }

        return redirect()->back()->with('error', 'Invalid credentials');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function register(){
        return view('Auth/register');
    }

    public function registerPost(){
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        $data['password'] = Hash::make($data['password']);
        
        $user= User::create($data);
        
         if ($user) {
        // Jika berhasil disimpan
        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
        } else {
        // Jika gagal disimpan
        return redirect()->back()->with('error', 'Registration failed. Please try again.');
        }
    }
}
