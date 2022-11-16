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
                "tulajnev" => "required|min:2|max:50",
                "tulkezd" => "required|date",
                "tulveg" => "required|date"
            ],
            [
                "tulajnev.required" => "A mezőt kötelező kitölteni!",
                "tulajnev.min" => "Minimum 2 karaktert kell tartalmaznia!",
                "tulajnev.max" => "Maximum 50 karaktert tartalmazhat!",

                "tulkezd.required" => "A mezőt kötelező kitölteni!",
                "tulkezd.date" => "Dátumot kell megadni!",

                "tulveg.required" => "A mezőt kötelező kitölteni!",
                "tulveg.date" => "Dátumot kell megadni!"
            ]
            );
            DB::insert("INSERT INTO tulajdonosok(tulajdonos_neve, tulajdonjog_kezdete, tulajdonjog_vege) VALUES (?,?,?)",[$req->get('tulajnev'),$req->get('tulkezd'),$req->get('tulveg')]);
            return redirect("/tulajrogzit")->with("kesz","Az adatfelvetel sikeres!");
    }
}
