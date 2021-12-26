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
use App\Models\Media ;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt ;
use File ;

class MediaController extends Controller
{
    //
    public function index()
    {

     if(Auth::check()){
        // $users = DB::select('select * from users where id="'.ucfirst(Auth()->user()->id).'"');

        $media = new Media();

        $allMedia = $media::all();

         return view('admin.dashboard-medias.list-media')
                    ->with('allmedia', $allMedia);

       }

    }
    public function uploadMedia(Request $request){


        $uploadedFile = $request->file('file')->store('public');

        $md5Name = md5_file($request->file('file')->getRealPath());


        $media = new Media();
        if(isset($uploadedFile)){
            $media->name_media = $uploadedFile;
        }
        $media->size_media = $request->file->getSize();
        $media->type_media = $request->file->getMimeType();
        $media->md5_media = $md5Name ;


        // Storage::put('file.txt', $request->file->getMimeType());
        $media->save();

        $allMedia = $media::all();


     return view('admin.dashboard-medias.list-media')
                ->with('allmedia', $allMedia);
    }

    public function deleteMedia(Request $request, $id){

            $media = new Media();
            $itemMedia = $media::findOrFail($id);


            // $Path = public_path().$itemMedia->filePathColumnName ;
            // chown($Path, 666);
            // unlink($Path) ;

            // Storage::put('file.txt', $request->file->getMimeType());
            Storage::delete('public/'.$itemMedia->name_media);

            $itemMedia->delete();

            $allMedia = $media::all();

            // unlink(storage_path('app/public/'.$media->name));

            // return back()->with('allmedia', $allMedia, 'flashSuccess', 'deleted');

    }
}
