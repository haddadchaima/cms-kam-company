<?php
namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class PhotoController extends Controller 
{

   public function show() 
   {
    $notifications = DB::table('notifications')
    ->where('status', '=', "0")
    ->get();

    $images=DB::select('select * from uploadpic where user_id="'.ucfirst(Auth()->user()->id).'"');

      $users = DB::select('select * from users where id="'.ucfirst(Auth()->user()->id).'"');
    
      return view('admin.user_update_pic', compact('users', 'notifications','images'));

   }
   public function edit(Request $request) 
   {
	    $folderPath = 'public/profile_pic/admin/';
        $image_parts = explode(";base64,", $request->image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $imageName = time() . '.png';
        $imageFullPath = $folderPath.$imageName;
        file_put_contents($imageFullPath, $image_base64);
        $user=Auth::user();
        $user->image=$imageName;
        $user->save();
        $data2=array(
            'name'=>$imageName,
            'user_id'=>Auth()->user()->id
        
        );
        $image=  DB::table('uploadpic')->insert($data2);
       echo json_encode($imageName);
   }
   public function edithistory(Request $request){

        $src=$request->image;
        $user=Auth::user();
        $user->image=$src;
        $user->save();
        echo json_encode($src);
        

   }
   

 

}