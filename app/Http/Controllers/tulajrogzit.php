<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tulajrogzit extends Controller
{
    public function bekuld(){
        return view('tulajrogzit');
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
