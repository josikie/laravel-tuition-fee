<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // cek auth 
    public function showFormLogin(){
        if (Auth::check()) {
            //login sukses
            return redirect()->route('dashboard');
        }

        return \view('login');
    }

    public function login(Request $request){
        $rules = [
            'username' => 'required|string',
            'password' => 'required|string',
        ];

        $messages = [
            'username.required' => 'Username wajib diisi!',
            'username.string' => 'Username wajib berupa string',
            'password.required' => 'Password wajib diisi',
            'password.string' => 'Password wajib berupa string'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        
        if ($validator->fails()) {
            return redirect()->back();
        }

        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password')
        ];

        //melakukan pengecekan validasi login langsung ke table users
        // serta memberi fasilitas session untuk keperluan login
        Auth::attempt($data);

        if (Auth::check()) {
            // jika login sukses
            Session::flash('success', 'Anda berhasil login!');
            return redirect()->route('dashboard');
        }else{
            //login gagal
            Session::flash('error', 'Username atau Password salah');
            return redirect()->route('login');
        }
    }


    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
