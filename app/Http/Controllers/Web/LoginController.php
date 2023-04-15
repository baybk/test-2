<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function __construct()
    {
        
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->except(['_token']);

        $user = User::where('email',$request->email)->first();

        if (auth()->attempt($credentials)) {

            return redirect()->route('toppage');

        }else{
            session()->flash('message', 'Invalid credentials');
            return redirect()->back();
        }
    }

    public function logout()
    {
        \Auth::logout();

        return redirect()->route('recommended');
    }
}
