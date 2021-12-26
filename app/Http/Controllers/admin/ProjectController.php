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
use App\Models\Project ;

class ProjectController extends Controller
{
    //
    public function index(){

        if(Auth::check()){
            // $users = DB::select('select * from users where id="'.ucfirst(Auth()->user()->id).'"');

            $projects = new Project();

            $allProject = $projects::all();

             return view('admin.projects.project')
                        ->with('allproject', $allProject);

           }

    }

    public function createProject(Request $request){
        $project = new Project();

        $project->name= $request->input('name_project');
        $project->category = $request->input('category_project');
        $project->description = $request->input('description');
        $project->nbr_theme = $request->input('nbr_theme');

        $project->save();

        $myProjects = $project::all();

        return view('admin.projects.project')->with('allproject', $myProjects);
    }

    public function projectByUser($iduser){

        $Projects = new Project();
        // $userProjects = $myProjects::findOrFail($iduser);
        $myProjects = $Projects::all();

        return view('admin.projects.project')->with('myprojects', $myProjects);
    }
}
