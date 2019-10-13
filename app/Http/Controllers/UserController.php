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
        $project = Project::getFromURL($request->get('user'), $request->get('url'));
        $project->save();

        return redirect('/');
    }
}
