<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\Language;
use App\Product;

use Session;

class AdminController extends Controller
{

   public function index()
   {
	   if(Auth::check()){
        $users = DB::select('select * from users where id="'.ucfirst(Auth()->user()->id).'"');
      return view('admin/user_view',['users'=>$users]);
      }

   }


   public function show()
   {
      $users = DB::select('select * from users where id="'.ucfirst(Auth()->user()->id).'"');
      return view('admin/admin_update',['users'=>$users]);
   }


   public function edit(Request $request)
   {
      $firstname = $request->input('firstname');
      $lastname = $request->input('lastname');
      $email = $request->input('email');
      $country = $request->input('country');
      $updated_at = $request->input('updated_at');
      DB::update('update users set firstname = ?, lastname = ?, email = ?, country = ?, updated_at = ? where id = ?',[$firstname,$lastname,$email,$country,$updated_at,ucfirst(Auth()->user()->id)]);
      return redirect('admin/profile')->with('success', 'Edit with Success!');

   }


    public function dashboard()
    {

      if(Auth::check())
	  {

		 return view('admin.home');
      }
       return Redirect::to("admin")->withSuccess('Opps! You do not have access');
    }

    public function dashboards()
    {

      if(Auth::check())
	  {
        $notifications = DB::table('notifications')
		    ->where('status', '=', "0")
        ->get();

        $Location = DB::table('location')
		    ->where('location_type', '=', "1")
        ->get();


        $Category = DB::table('category')
        ->where('parent_id', '=', "0")
        ->get();

        $Users_list = DB::table('users')
        ->where('role', '=', "0")
        ->get();

        $Blog = DB::table('news')
        ->get();

        $Contact = DB::table('contact')
        ->get();




		  $users = DB::select('select * from users where id="'.ucfirst(Auth()->user()->id).'"');

        $Product = DB::table('products')
        ->get();

        $Userscount = DB::table('users')
        ->where('year', '=', "".date('Y')."")
         ->get();

        $Userscountmale01 = DB::table('users')
        ->where('gender', '=', "1")
        ->where('month_number', '=', "01".date('Y')."")
         ->get();

        $Userscountmale02 = DB::table('users')
        ->where('gender', '=', "1")
        ->where('month_number', '=', "02".date('Y')."")
         ->get();

        $Userscountmale03 = DB::table('users')
        ->where('gender', '=', "1")
        ->where('month_number', '=', "03".date('Y')."")
         ->get();

        $Userscountmale04 = DB::table('users')
        ->where('gender', '=', "1")
        ->where('month_number', '=', "04".date('Y')."")
         ->get();


          $Userscountmale05 = DB::table('users')
        ->where('gender', '=', "1")
        ->where('month_number', '=', "05".date('Y')."")
         ->get();

        $Userscountmale06 = DB::table('users')
        ->where('gender', '=', "1")
        ->where('month_number', '=', "06".date('Y')."")
         ->get();

        $Userscountmale07 = DB::table('users')
        ->where('gender', '=', "1")
        ->where('month_number', '=', "07".date('Y')."")
         ->get();

        $Userscountmale08 = DB::table('users')
        ->where('gender', '=', "1")
        ->where('month_number', '=', "08".date('Y')."")
         ->get();


        $Userscountmale09 = DB::table('users')
        ->where('gender', '=', "1")
        ->where('month_number', '=', "09".date('Y')."")
         ->get();


          $Userscountmale10 = DB::table('users')
        ->where('gender', '=', "1")
        ->where('month_number', '=', "10".date('Y')."")
         ->get();

        $Userscountmale11 = DB::table('users')
        ->where('gender', '=', "1")
        ->where('month_number', '=', "11".date('Y')."")
         ->get();


        $Userscountmale12 = DB::table('users')
        ->where('gender', '=', "1")
        ->where('month_number', '=', "12".date('Y')."")
        ->get();






        $Userscountfemale01 = DB::table('users')
        ->where('gender', '=', "2")
        ->where('month_number', '=', "01".date('Y')."")
         ->get();

        $Userscountfemale02 = DB::table('users')
        ->where('gender', '=', "2")
        ->where('month_number', '=', "02".date('Y')."")
         ->get();

        $Userscountfemale03 = DB::table('users')
        ->where('gender', '=', "2")
        ->where('month_number', '=', "03".date('Y')."")
         ->get();

        $Userscountfemale04 = DB::table('users')
        ->where('gender', '=', "2")
        ->where('month_number', '=', "04".date('Y')."")
        ->get();

        $Userscountfemale05 = DB::table('users')
        ->where('gender', '=', "2")
        ->where('month_number', '=', "05".date('Y')."")
        ->get();

        $Userscountfemale06 = DB::table('users')
        ->where('gender', '=', "2")
        ->where('month_number', '=', "06".date('Y')."")
        ->get();

        $Userscountfemale07 = DB::table('users')
        ->where('gender', '=', "2")
        ->where('month_number', '=', "07".date('Y')."")
        ->get();

        $Userscountfemale08 = DB::table('users')
        ->where('gender', '=', "2")
        ->where('month_number', '=', "08".date('Y')."")
        ->get();

        $Userscountfemale09 = DB::table('users')
        ->where('gender', '=', "2")
        ->where('month_number', '=', "09".date('Y')."")
        ->get();

        $Userscountfemale10 = DB::table('users')
        ->where('gender', '=', "2")
        ->where('month_number', '=', "10".date('Y')."")
        ->get();

        $Userscountfemale11 = DB::table('users')
        ->where('gender', '=', "2")
        ->where('month_number', '=', "11".date('Y')."")
        ->get();

        $Userscountfemale12 = DB::table('users')
        ->where('gender', '=', "2")
        ->where('month_number', '=', "12".date('Y')."")
        ->get();




		 return view('admin.homes', compact('Location', 'Contact', 'Blog', 'Users_list', 'Category', 'Product', 'users', 'notifications', 'Userscount', 'Userscountmale01', 'Userscountmale02', 'Userscountmale03', 'Userscountmale04', 'Userscountmale05', 'Userscountmale06', 'Userscountmale07', 'Userscountmale08', 'Userscountmale09', 'Userscountmale10', 'Userscountmale11', 'Userscountmale12', 'Userscountfemale01', 'Userscountfemale02', 'Userscountfemale03', 'Userscountfemale04', 'Userscountfemale05', 'Userscountfemale06', 'Userscountfemale07', 'Userscountfemale08', 'Userscountfemale09', 'Userscountfemale10', 'Userscountfemale11', 'Userscountfemale12'));
      }
       return Redirect::to("admin")->withSuccess('Opps! You do not have access');
    }

    public function profile()
    {
      if(Auth::check()){
        return view('admin.profile');
      }
       return Redirect::to("admin/login")->withSuccess('Opps! You do not have access');
    }


    public function setting()
    {

      if(Auth::check()){
        return view('admin.setting');
      }
       return Redirect::to("admin/login");
    }


    public function update_languages(Request $request)
    {
      $languages = $request->input('languages');

       $updated_at = $request->input('updated_at');
       DB::update('update users set languages = ? where id = ?',[$languages,ucfirst(Auth()->user()->id)]);
       return Redirect::back();

    }


    public function update_dashboard(Request $request)
    {
      $dashboard = $request->input('dashboard');

       $updated_at = $request->input('updated_at');
       DB::update('update users set dashboard = ? where id = ?',[$dashboard,ucfirst(Auth()->user()->id)]);
       return Redirect::back();

    }


    public function getAutocompleteData(Request $request)
    {

      $table=$request->table;
      $search=$request->search;
      if($search!=""){
        switch ($table) {
          case "category":
            $data= DB::table('category')
                  ->where('name','like',$search.'%')->where('parent_id','=',0)->get();
          break;
          case "subcategory":
            $data= DB::table('category')
                  ->where('name','like',$search.'%')->where('parent_id','<>',0)->get();
          break;
          case "product":
            $data= DB::table('products')
                  ->where('product_name','like',$search.'%')->get();
          break;
          case "user" :
            $data=DB::table('users')
                 ->where('firstname','like',$search.'%')->get();
          break;

        }
      }

      echo json_encode($data);
    }

    public function detailsSearchData($id){
      dd($id);


    }

}
