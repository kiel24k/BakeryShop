<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
           return view('user.page.home');
    }
    public function products(){
        return view('user.page.product');
        //hahahaha
    }
}
