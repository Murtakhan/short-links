<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;

class MylinksController extends Controller
{
    public function index() {
        $links = Link::all();
        return view('mylinks', ['links'=>$links]);
    }
    
}
