<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post("esp","App\Http\Controllers\EspController@GetWeight");
