<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function addProject() {
        return view("addprojects");
    }

    public function postAddProject(Request $request) {
        $project = new Project();
        $project->title = $request->get('title');
        $project->description = $request->get('description');
        $project->path_to_thumbnail = "placeholder";
        $project->user_id = Auth::user()->id;
        $project->save();
        return redirect('/');
    }
}
