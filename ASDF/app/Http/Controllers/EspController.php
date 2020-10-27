<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class EspController extends Controller
{
    public function GetWeight(Request $res){
        $esps = $res['esps'];
        
        $weights = array();
        foreach($esps as $esp){
            $weight = Http::get($esp);

            array_push($weights, $weight->body());
        }
        return $weights;
    }
    
}
