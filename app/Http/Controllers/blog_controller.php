<?php

namespace App\Http\Controllers;

use App\models\top_anime;

class blog_controller extends Controller
{
    //
    public function index()
    {
        $top_anime = top_anime::all();
        return view('index', ['top_anime' => $top_anime]);
    }
}
