<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\APIProvider;

class APIController extends Controller{

    public function displayAPI(){
        $APIData = APIProvider::all();
        return response()->json($APIData);
    }

}
