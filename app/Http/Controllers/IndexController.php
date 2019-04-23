<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Sunra\PhpSimple\HtmlDomParser;

class IndexController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function login() {
        return view('login');
    }

    public function register() {
        return view('register');
    }

    public function setTheme() {
        $user = Auth::user();
        $user->dark_theme = request()->input('theme');
        $user->save();

        return back();
    }


    public function getProjects($project_id) {
        $url = "https://api.scratch.mit.edu/users/cdjeeklo/projects/{$project_id}";
        $contents = file_get_contents($url);
        $contents = json_decode($contents, true);
        return $contents;
    }
}
