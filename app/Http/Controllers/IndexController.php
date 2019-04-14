<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function addproject() {
        return view('dashboard_add_project');
    }

    public function myprojects() {
        return view('dashboard_my_projects');
    }

    public function likedprojects() {
        return view('dashboard_liked_projects');
    }

}
