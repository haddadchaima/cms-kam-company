<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use DB;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Session;

use App\Category;
use App\Product;

use Response;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
		if(Auth::check())
		{
		$notifications = DB::table('notifications')
		->where('status', '=', "0")
        ->get();
	
        return view('admin.setting.index', compact('notifications'));
		
		
		}
	    
		return redirect::to("admin");

    }
	
		
	
	
    }

  