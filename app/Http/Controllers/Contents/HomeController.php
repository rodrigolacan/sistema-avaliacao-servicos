<?php

namespace App\Http\Controllers\contents;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('contents.home');
    }
}
