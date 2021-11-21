<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Genre;

class FilmController extends Controller
{
    public function index(){
        $films=Film::allPaginate(10);
        return view('app.film.index',compact('films'));
    }

    public function show($id){
        $film=Film::findById($id);
        return view('app.film.show',compact('film'));
    }
    public function allByGenre(Genre $genre) {
        $films = $genre->films()->findByGenre();
        return view('app.film.byTag', compact('films'));
    }
    public function create()
    {
        return view('app.film.create');
    }
}
