<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\movies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signup()
    {
        return view('signup.index');
    }

    public function signupStore(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        $data['password'] = bcrypt($data['password']);

        User::create($data);

        return redirect()->route('login');
    }

    public function login()
    {
        return view('login.index');
    }

    public function loginStore(Request $request)
    {
        // dd($request);
        $user = User::all();
        $movies = movies::all();

        $data = $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($data)) {
            $request->session()->regenerate();

            return redirect()->route('home', compact('movies'));
            // return view('main.index', compact('movies'));
        }
        return back()->with('error', 'username atau password salah!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
