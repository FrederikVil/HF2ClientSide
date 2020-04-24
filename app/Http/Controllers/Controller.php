<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert(Request $req)
    {

        // Henter navnene fra html formularen, og putter dem i variabler
        $fornavn = $req->input('fornavn');
        $efternavn = $req->input('efternavn');
        $besked = $req->input('besked');

        // Sætter variablerne i et array
        $data = array('fornavn' => $fornavn, 'efternavn' => $efternavn, 'besked' => $besked);


        // Smider arrayet ind i databasen
        DB::table('kontakt')->insert($data);

        // returner beskeder siden
        return view('beskeder');

    }

}



