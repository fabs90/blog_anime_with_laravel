<?php

namespace App\Http\Controllers;

use App\models\top_anime;

class blog_controller extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function blog()
    {
        $top_anime = top_anime::all();
        return view('blog', ['top_anime' => $top_anime]);
    }
}
