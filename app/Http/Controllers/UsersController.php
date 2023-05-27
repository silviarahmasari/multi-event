<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function indexLogin()
    {
        return view('login');
    }

    public function indexRegis()
    {
        return view('registration');
    }

    public function preLogin(){
        if(Auth::check()){
            if(Auth::user()->id_role == 1 ){
                return redirect('/admin');
            }
            elseif(Auth::user()->id_role == 2 ){
                return redirect('/ketupel');
            }
            else {
                return redirect('/camat');
            }
        }
        else{
            return view('login');
        }
    }

    public function postLogin(Request $request){
        $data = $request->only('email', 'password');
        // dd(Auth::attempt($data));
        if(Auth::attempt($data)){
            if(Auth::user()->id_role == 1 ){
                return redirect('/admin');
            }
            elseif(Auth::user()->id_role == 2 ){
                return redirect('/ketupel');
            }
            else {
                return redirect('/camat');
            }
        }
        else{
            return view('login');
        }
    }

    public function preRegister(){
        return view('registration');
    }

    public function postRegister(Request $request)
    {
        // $validate = $this->validate($request,[
        //     'id_role'=>'required',
        //     'nama'=>'required',
        //     'password'=>'required|min:8',
        //     'email'=>'required|email|unique:users',
        //     're_pass'=>'required|same:password'
        // ]);
        // dd($request->id_role);

        $cek = User::create([
            'id_role'   => $request->id_role,
            'name'      => $request->name,
            'password'  => Hash::make($request->password),
            'email'     => $request->email
        ]);

        return redirect('/login');
    }

    public function Logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
