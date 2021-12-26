<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use DB;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Session;

use App\User;

use Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
		if(Auth::check()){
				 
		$notifications = DB::table('notifications')
		->where('status', '=', "0")
        ->get();
		  
		   $data['Users'] = DB::table('users')
	      ->get();

	   	
        $userscount = DB::table('users')
        ->count('id');
		
        return view('admin.user.index',$data, compact('userscount', 'notifications'));
		}
	    
		return redirect::to("admin");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function stores(Request $request)
    {
        //
		
        $postID = $request->post_id;
        $post   =   Manage_document::updateOrCreate(['id' => $postID],
		
		
                    ['id_client' => $request->id_client, 'title' => $request->title, 'fichier' => $request->fichier, 'note' => $request->note, 'id_admin' => $request->id_admin, 'id_day' => $request->id_day, 'id_month' => $request->id_month, 'month' => $request->month, 'id_year' => $request->id_year]);
    
        return Response::json($post);
    }
	
	
	    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=> 'required|max:255',
            'parent_id'=> 'required|max:255',
            'active'=> 'required|max:255'
		  ]);

      $Category= new Category([
            'name' => $request->get('name'),
            'parent_id' => $request->get('parent_id'),
            'active' => $request->get('active'),
        ]);
		
      $Category->save();

      return redirect::route('category.index')->with('success', 'Create with success!');
  
    }
	
	public function edit($id)
    {
        if(Auth::check())
		{
       $Category = Category::find($id);

 
        return view('admin.category.edit', compact('Category'));
		}
		return redirect::to("admin");

    }
	
	
	
	public function update(Request $request, $id)
    {
        $request->validate([
            'status'=> 'required|max:2055',
			'image' =>'required',
			]);

       
		
        $User = User::find($id);
        $User->status = $request->get('status');
        $User->save();

        return redirect::to('admin/user/'.$id.'')->with('success', 'Update with success!');
    }


	


	
	public function show($id)
    {
        
		if(Auth::check()){
				 
        $notifications = DB::table('notifications')
		->where('status', '=', "0")
        ->get();

		
		$User = User::find($id);

	 
	 

        return view('admin.user.show', compact('User', 'notifications'));
		}
	    
		return redirect::to("admin");

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	 
	 public function destroy($id)
    {
        //
        $post = Category::where('id',$id)->delete();
   
        return Response::json($post);
    }
}