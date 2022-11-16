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
                "balido" => "required|date",
                "serules" => "required|min:10|max:500"
            ],
            [
                "serules.required" => "A mezőt kötelező kitölteni!",
                "serules.min" => "Minimum 10 karaktert kell tartalmaznia!",
                "serules.max" => "Maximum 500 karaktert tartalmazhat!",

                "balido.required" => "A mezőt kötelező kitölteni!",
                "balido.date" => "Dátumnak kell lennie!"
                
            ]
            );
            DB::insert("INSERT INTO balesetek(baleset_idopontja, serules_leirasa) VALUES (?,?)",[$req->get('balido'),$req->get('serules')]);
            return redirect("/balesetrogzites")->with("kesz","Az adatfelvetel sikeres!");
    }
}
