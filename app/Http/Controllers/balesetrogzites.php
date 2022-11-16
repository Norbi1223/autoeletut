<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class balesetrogzites extends Controller
{
    public function bekuld(){
        return view('balesetrogzites');
    }
    public function rogzit(Request $req){
        $req->validate(
            [

            ],
            [

            ]
            );
    }
}
