<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class HomeController extends Controller
{
    public function index(){
        $films=Film::lastLimit(6);
        return view('app.home',compact('films'));
    }
}
