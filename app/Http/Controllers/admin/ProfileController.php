<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use DB;
use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Category;
use App\History;



class ProfileController extends Controller
{


     public function profile()
    {

      if(Auth::check()){
        $notifications = DB::table('notifications')
		    ->where('status', '=', "0")
        ->get();
        $images=DB::select('select * from uploadpic where user_id="'.ucfirst(Auth()->user()->id).'"');
        $user=Auth::user();
        $historys = History::where(`users_id`, `=`, $user->id)
                ->orderBy('last_login_at', 'desc')
                ->limit(5)
                ->get();


        return view('admin.profile', compact('notifications','images','historys'));

      }
       return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }
	
	  


   
   public function edit(Request $request) 
   {
     $firstname = $request->input('firstname');
      $lastname = $request->input('lastname');
      $email = $request->input('email');
      $country = $request->input('country');
	    $city = $request->input('city');
	    $birthday = $request->input('birthday');

      $updated_at = $request->input('updated_at');
      DB::update('update users set firstname = ?, lastname = ?, email = ?, country = ?, city = ?, birthday = ?, updated_at = ? where id = ?',[$firstname,$lastname,$email,$country,$city,$birthday,$updated_at,ucfirst(Auth()->user()->id)]);
      return redirect('admin/profile')->with('success', '!');
   }



   public function update_layouts(Request $request) 
   {
    $header = $request->input('header');
    $sidebar = $request->input('sidebar');
    $body = $request->input('body');
    

      DB::update('update users set header = ?, sidebar = ?, body = ? where id = ?',[$header,$sidebar,$body,ucfirst(Auth()->user()->id)]);
      return redirect()->back()->with('success layouts', 'Update with success!');

   }
   
   
       public function setting()
    {

      if(Auth::check()){
        return view('admin.setting');
      }
       return Redirect::to("login");
    }

    public function showhistory(){
      
      if(Auth::check()){
        $notifications = DB::table('notifications')
		    ->where('status', '=', "0")
        ->get();
      
        $user=Auth::user();
        $historys=DB::select('select * from historys where users_id="'.ucfirst(Auth()->user()->id).'"')

                ->where('history_of','=','login')
                ->orderBy('last_login_at', 'desc')
                ->get();

        
        return view('admin.history', compact('notifications','historys'));

      }
       return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }
	
 
	
}