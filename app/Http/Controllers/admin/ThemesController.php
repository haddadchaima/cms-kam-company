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
use App\Models\Component ;
use App\Models\Theme ;
use Illuminate\Support\Facades\Storage;

use Session;

class ThemesController extends Controller
{
    protected $theme ;
    public function __construct(){
        $this->theme = new Theme();
    }

   public function index($idprojet)
   {

    if(Auth::check()){
       // $users = DB::select('select * from users where id="'.ucfirst(Auth()->user()->id).'"');
       $allThemes = $this->theme::all() ;

        return view('admin.dashboard-themes.themes')->with('themes', $allThemes);
      }


   }

   public function addTheme(Request $request){

        $allThemes = $this->theme::all() ;
        $uploadedTheme = $request->file('path_theme')->store('public');
        $uploadedScreenshot =  $request->file('path_screenshot_theme')->store('public');
        // Storage::put('file.txt', $uploadedTheme);

        // $theme = new Theme();
        $this->theme->description_theme = $request->input('description_theme');
        // $theme->type_theme = $request->input('type_theme');
        $this->theme->path_theme = $uploadedTheme ;
        $this->theme->path_screenshot_theme = $uploadedScreenshot;
        $this->theme->price_theme = $request->input('price_theme');

        $this->theme->save();

        return view('admin.dashboard-themes.themes')->with('themes', $allThemes);
   }

   public function redirectToAddTheme(){

    $component = new Component;
    $allComp = $component::all();

    return view('admin.dashboard-themes.add-theme')->with('components', $allComp);
}






}
