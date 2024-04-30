<?php

use Andyabih\LaravelToUML\Http\Controllers\LaravelToUMLController;
use Illuminate\Support\Facades\Route;

if(app()->environment('local')) {
  Route::get(config('laravel-to-uml.route'), [LaravelToUMLController::class, 'index']);  
}
