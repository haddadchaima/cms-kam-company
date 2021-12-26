<?php

   

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use DB;

   

use Illuminate\Http\Request;
use Validator,Redirect,Response;

use App\Rules\MatchOldPassword;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use App\User;
use App\History;

  

class ChangePasswordController extends Controller

{

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {

        $this->middleware('auth');

    }

   

    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function index()

    {
        if(Auth::check()){
        $notifications = DB::table('notifications')
		->where('status', '=', "0")
        ->get();
        $historys = History::where(`users_id`, `=`, )
        ->where('history_of','=','password')
        ->orderBy('last_login_at', 'desc')
        ->get();
        return view('admin.changePassword', compact('notifications','historys'));

     }
	        return Redirect::to("login");

    } 

   

    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function store(Request $request)

    {

        $request->validate([

            'current_password' => ['required', new MatchOldPassword],

            'new_password' => ['required'],

            'new_confirm_password' => ['same:new_password'],

        ]);

   

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        $ip=$request-> getClientIp();
        $clientip = json_decode(file_get_contents("http://www.iplocate.io/api/lookup/193.95.121.0/json"));
        $user=Auth::user();
	    	$data2=array(
                'user_id'=>$user->id,
                'last_login_ip'=>$ip,
                'country'=> $clientip->country_code,
                'city'=> 'Tunis',
                'history_of'=> 'password',
               
        
             );
         History::insert($data2);
      
   

       return Redirect::to("admin/home")->with('success', 'Password update with success!');

    }

}