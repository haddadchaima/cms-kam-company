<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Category;
use App\History;
use App\Notifications;



class UserLoginController extends Controller
{

    public function index()
    {
		$datas['Category'] = Category::where('parent_id',0)
		->where('parent_id', '=', "0")
        ->get();
		
        return view('user.login',$datas);
    }
     

    public function registration()
    {
		$datas['Category'] = Category::where('parent_id',0)
		->where('parent_id', '=', "0")
        ->get();
		
        return view('user.registration',$datas);
    }
    
    public function postLogin(Request $request)
    {
        request()->validate([
        'email' => 'required',
        'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'status' => '1'])) {

        $notifications = DB::table('notifications')
       ->get();
          $user=Auth::user();
          $ip=$request->getClientIp();
          $clientip = json_decode(file_get_contents("http://www.iplocate.io/api/lookup/196.203.207.117/json"));
       
          $history = new History;
          $history->user_id=$user->id;
          $history->last_login_ip = $ip;
          $history->country= $clientip->country_code;
          $history->city= 'Tunis';
          $history->history_of= 'login';
          $history->save();
            return redirect()->intended('user/dashboard');
        }
        return Redirect::to("login")->withSuccess('Oppes! You have entered invalid credentials');
    }


	
	


    public function postRegistration(Request $request)
    {  
          request()->validate([
           'status' => 'required',
          'role' => 'required',
          'birthday' => 'required',
          'gender' => 'required',
          'firstname' => 'required',
          'lastname' => 'required',
          'image' => 'required',
          'country' => 'required',
          'city' => 'required',
          'email' => 'required|email|unique:users',
          'password' => 'required|min:6',
          'block_description' => 'required',
          'year' => 'required',


        ]);
        
        $data = $request->all();

        $check = $this->create($data);
      
        return Redirect::to("cart/dashboard")->withSuccess('Great! You have Successfully loggedin');
    }
	
	
	

	public function store(Request $request)
    {
		
		$data=$request->all();
		
		  request()->validate([
          'status' => 'required',
          'role' => 'required',
          'birthday' => 'required',
          'gender' => 'required',
          'firstname' => 'required',
          'lastname' => 'required',
          'image' => 'required',
          'country' => 'required',
          'city' => 'required',
          'email' => 'required|email|unique:users',
          'password' => 'required|min:6',
          'block_description' => 'required',
          'year' => 'required',


        ]);
		
		
		
        $lastid=User::create($data)->id;
		
		$data2=array(
                'id_user'=>$lastid,
                'notifiable_type' => 'Register',
                'notifiable' => 'Create new account',
                'status' => '0',    
				        'read_at' => '0'



                );


        Notifications::insert($data2);

        $ip=$request-> getClientIp();
        $clientip = json_decode(file_get_contents("http://www.iplocate.io/api/lookup/193.95.121.0/json"));
	    	$data3=array(
                'user_id'=>$lastid,
                'last_login_ip'=>$clientip->country_code,
                'country'=> $clientip->country_code,
                'city'=> $clientip->City,
                'history_of'=> 'login',
               
        
             );
         History::insert($data3);
       

	  
      return redirect::route('user.dashboard')->with('success', 'Create with success!');
  
    }
	
	
	
	
	
    public function postRegistration2(Request $request)
    {  
        request()->validate([
          'status' => 'required',
          'role' => 'required',
          'birthday' => 'required',
		  


        ]);
        
        $data = $request->all();

        $check = $this->create($data);
      
        return Redirect::to("user/dashboard")->withSuccess('Great! You have Successfully loggedin');
    }
    
   




	

    public function profile()
    {

      if(Auth::check()){
		  $data['Category'] = Category::where('parent_id',0)
		->where('parent_id', '=', "0")
        ->get();
		
        return view('user.profile',$data);
      }
       return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }



    public function create(array $data)
    {
		
		
      return User::create([
          'status' => 'required',
          'role' => 'required',
          'birthday' => 'required',
          'gender' => 'required',
          'firstname' => 'required',
          'lastname' => 'required',
		  'image' => 'required',
          'country' => 'required',
          'city' => '',
          'email' => 'required|email|unique:users',
          'password' => 'required|min:6',
          'block_description' => 'required',





      ]);
    }
    

    
    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}