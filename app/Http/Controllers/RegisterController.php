<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request){
       $validateData = $request->validate([
        'name' => 'required|max:255',
        'username' => ['required', 'min:3', 'max:255', 'unique:users'],
        'email' => 'required|email|unique:users',
        'password' => 'required|min:5|max:255'
       ]);

    // $validateData['password'] = bcrypt($validateData['password']);
    $validateData['password'] = Hash::make($validateData['password']);

       User::create($validateData); 

    //    $request->session()->flash('success', 'Registrasi berhasil!');
      return redirect('/login')->with('success', 'Registrasi berhasil! Silakan Login');
    // dd('Register Berhasil!!');
    
    }
}
