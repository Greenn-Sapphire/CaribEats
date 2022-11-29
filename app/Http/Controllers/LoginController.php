<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('Login.index');
    }

    public function create(){
        return view('Login.registro');
    }

    public function register(Request $request){

        $request -> validate([
            'name' => 'required|min:3',
            'lastname' => 'required',
            'mobile' => 'required|min:10',
            'email' => 'required|email|unique:users| regex:/(.*)@ucaribe\.edu\.mx$/i',
            'password' => 'required'
        ]);

        $user = new User();
        $user -> name = $request -> name;
        $user -> lastname = $request -> lastname;
        $user -> mobile = $request -> mobile;
        $user -> email = $request -> email;
        $user -> password = Hash::make($request -> password);
        $user -> save();

        Auth::login($user);

        return redirect(route('menu'))->with('success', 'exito');
    }

    public function login(Request $request){

        $request -> validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = [
            "email" => $request->email,
            "password" => $request->password,
        ];

        $remember = ($request->has('remember') ? true : false);

        if(Auth::attempt($credentials, $remember)){
            $request -> session()->regenerate();
            return redirect()->intended(route('menu'))->with('success', 'ok');
        }else{
            return redirect(route('login'))->with('success','error');
        }
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'))->with('error', 'bye');
    }
}
