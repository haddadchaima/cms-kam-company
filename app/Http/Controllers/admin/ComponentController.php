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

use Session;

class ComponentController extends Controller
{
    //
    public function index($idprojet)
    {

     if(Auth::check()){
        // $users = DB::select('select * from users where id="'.ucfirst(Auth()->user()->id).'"');

         return view('admin.dashboard-themes.themes');
       }

    }
    public function listComp(){

        $component = new Component;
        $allComp = $component::all();

        return view('admin.dashboard-component.list-component')
                    ->with('components', $allComp);
       }

       public function addComponent(Request $request){
        $component = new Component;
        $data = $request->input();
        $id = $request->input('id');
        $class = $request->input('class');
        $component->code_html = preg_replace( "/\r|\n/", "", $data['code_html'] );
        $component->code_css = preg_replace( "/\r|\n/", "", $data['code_css'] );
        $component->id= $id ;
        $component->class= $class;
        $component->name_component = $request->input('name_cmp');
        // $component->code_js = $data['code_js'];

        $component->save();

        $allComp = $component::all();

        return redirect('admin/listcomponent')
                    ->with('components', $allComp)
        ;
       }

       public function redirectToAddComponent(){
               return view('admin.dashboard-component.add-component');
       }
}
