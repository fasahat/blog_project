<?php

namespace App\Http\Controllers\CPanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CPanelController extends Controller
{
    public function index(){
        return view('pages.cpanel');
    }
}
