<?php

namespace App\Http\Controllers;

use App\Models\table_kelas;

class kelas_controller extends Controller
{
    //
    public function index()
    {
        $class = table_kelas::all();
        return view('kelas', ['kelas' => $class]);

    }
}
