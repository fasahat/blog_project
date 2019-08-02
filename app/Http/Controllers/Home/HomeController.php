<?php

namespace App\Http\Controllers\Home;
Use Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {

        return view('pages.home.home');
    }
}
