<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class fooldal extends Controller
{
    public function kiir(){
        $autok = DB::select("SELECT * FROM autok WHERE 1");
        $tulaj = DB::select("SELECT * FROM tulajdonosok WHERE 1");
        $baleset = DB::select("SELECT COUNT(*) FROM balesetek WHERE 1");
        return view('welcome', ["autok" => $autok]);
    }
}
