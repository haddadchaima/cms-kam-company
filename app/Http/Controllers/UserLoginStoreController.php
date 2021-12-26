<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;



class UserLoginStoreController extends Controller
{

    public function index()
    {
        return view('user.loginstore');
    }
     

    public function registration()
    {
        return view('user.registrationstore');
    }
    
    public function postLogin(Request $request)
    {
        request()->validate([
        'email' => 'required',
        'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('cart');
        }
        return Redirect::to("cart")->withSuccess('Oppes! You have entered invalid credentials');
    }

    public function postRegistration(Request $request)
    {  
        request()->validate([
          'id_user' => 'required',
          'status' => 'required',
          'role' => 'required',
          'section' => 'required',
          'birthday' => 'required',
          'birthmonth' => 'required',
          'birthyear' => 'required',
          'gender' => 'required',
          'firstname' => 'required',
          'lastname' => 'required',
		  'image' => 'required',
          'country' => 'required',
          'city' => '',
          'email' => 'required|email|unique:users',
          'password' => 'required|min:6',
          'block_description' => 'required',
		  'evaluation_etat' => '',
		  'evaluation' => '',
		  'last_evaluation' => '',
		  'date' => '',
		  'id_date' => '',
		  'month' => '',
		  'id_month' => '',
		  'year' => '',
		  'vue' => '',


        ]);
        
        $data = $request->all();

        $check = $this->create($data);
      
        return Redirect::to("cart/dashboard")->withSuccess('Great! You have Successfully loggedin');
    }
    
   




	

    public function profile()
    {

      if(Auth::check()){
        return view('user.profile');
      }
       return Redirect::to("user/login")->withSuccess('Opps! You do not have access');
    }



    public function create(array $data)
    {
		
		
      return User::create([
        'id_user' => $data['id_user'],
        'status' => $data['status'],
        'role' => $data['role'],
        'section' => $data['section'],
        'birthday' => $data['birthday'],
        'birthmonth' => $data['birthmonth'],
        'birthyear' => $data['birthyear'],
        'gender' => $data['gender'],
        'firstname' => $data['firstname'],
        'lastname' => $data['lastname'],
        'image' => $data['image'],
        'country' => $data['country'],
        'city' => '0',
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
		'block_description' => $data['block_description'],
		'evaluation_etat' => '0',
		'evaluation' => '0',
        'last_evaluation' => '0',
		'date' => $data['date'],
        'id_date' => $data['id_date'],
		'month' => $data['month'],
        'id_month' => $data['id_month'],
        'year' => $data['year'],
        'vue' => $data['vue'],





      ]);
    }
    

    
    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('user/login');
    }
}