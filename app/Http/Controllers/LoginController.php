<?php

namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;   
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;    
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;


class LoginController extends Controller
{
    use AuthenticatesUsers;
    
    protected $redirectTo = '/';

    public function index(){
        return view('login');
    }
    
    public function adminLogin(Request $request)
    {
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->intended('/');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    public function adminLogout() {
        Session::flush();
        Auth::logout();  
        return redirect()->route('login');
    }
}