<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $fullName = "Nguyễn Văn A";
        return view('home',compact('fullName'));
    }

}
