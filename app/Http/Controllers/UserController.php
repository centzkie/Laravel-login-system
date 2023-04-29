<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index($name) {
        return 'This is user controller from '.$name;
    }

    public function viewall(){
        $data = User::all();
        return view('user.index', ['users' => $data]);
    }
    
    public function data () {
        $profile = array(
            "name" => "Vincent",
            "age" => "23",
            "sex" => "Male"
        );

        return view('home',$profile);
    }
    
    public function login() {
        return view('user.login');
    }

    public function process(Request $request) {
        $validated = $request->validate([
            "email" => ['required', 'email'],
            "password" => 'required' 
        ]);

        if(auth()->attempt($validated)){
            $request->session()->regenerate();

            return redirect('/')->with('message', 'Welcome back!');
        };

        return back()->withErrors(['email' => 'Cant find account!'])->onlyInput('email');
    }

    public function register() {
        return view('user.register');
    }
    public function store(Request $request) {
        $validated = $request->validate([
            "name" => ['required', 'min:4'],
            "email" => ['required', 'email', Rule::unique('users','email')],
            "password" => 'required|confirmed|min:6' 
        ]);

        $validated['password'] = bcrypt($validated['password']);

        $user = User::create($validated);

            auth()->login($user);

            return redirect('/')->with('message', 'Welcome Newbie!');
    }
    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }
}

