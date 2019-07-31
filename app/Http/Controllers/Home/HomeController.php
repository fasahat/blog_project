<?php

namespace App\Http\Controllers\Home;
Use Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        return view('pages.home.home');
//        $result = Redirect::route('posts');
//return $result;
//print_r(($result));
//die('sdsd');
//        return view('pages.home.home')->with('result',$result);
//        return view('pages.home.home', compact('result'));
    }
}
