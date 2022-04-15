<?php

use Illuminate\Support\Facades\Route;



Route::get ('/', 'AdivinoController@formulario');

Route::post ('/resultado', 'AdivinoController@resultado');
