<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Validator,Redirect,Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AdminLoginController extends Controller
{

    public function index()
    {
    return view('admin.login');
    }
     
  
    public function registration()
    {
    return view('admin.registration');
    }
    
    
    public function postLogin(Request $request)
    {
	    request()->validate([
        'email' => 'required',
        'password' => 'required',
        ]);
		
        $credentials = $request->only('email', 'password');


       if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'status' => '1'])) {
        return redirect()->intended('admin/home')->with("success", "D'luxxis STORE");
    }

        return Redirect::to("admin")->with('success', 'Oppes! You have entered invalid credentials');

    }


    
    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('admin');
    }
}