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

    public function likeProject($project_id) {
        $project = Project::where('id', '=', $project_id)->get()->first();
        $project->toggleLiked();
        return redirect(route('index'));
    }

    public function setTheme() {
        $user = Auth::user();
        $user->dark_theme = request()->input('theme');
        $user->save();

        return back();
    }


    public function getProject($project_id) {
        $url = "https://api.scratch.mit.edu/users/cdjeeklo/projects/{$project_id}";
        $contents = file_get_contents($url);
        $contents = json_decode($contents, true);
        return $contents;
    }

    public function getProjects($page){
        $url = "https://scratch.mit.edu/users/cdjeeklo/projects?page={$page}";
        $contents = file_get_contents($url);
        libxml_use_internal_errors(true);
        $dom = new \DOMDocument();
        $dom->loadHTML($contents);
        libxml_clear_errors();
        dd($dom);
    }
}
