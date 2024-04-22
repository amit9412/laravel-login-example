<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    function check(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);
    
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $request->session()->put('LoggedUser', $user->id);
            return redirect()->route('profile');
        } else {
            return back()->with('fail', 'Invalid email or password');
        }
    }
    
    function index() {
        return view('login');
    }
    function profile() {
        $data = [];
        if(session()->has('LoggedUser')) {
            $user = User::where('id', '=', session('LoggedUser'))->first();
            $data = [
                'LoggedUserInfo' => $user
            ];
        }
        return view('profile', $data);
    }
    
    function logout() {
        if(session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            return redirect('login');
        }
    }

    function register(){
        return view('register');
    }
    function save_user_data(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5'
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $save = $user->save();

        if($save) {
            return view('login');
        } else {
            return back()->with('fail', 'Something went wrong, try again later');
        }
    }
}
