<?php

use App\Models\Estudiantes;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Foreach_;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("leer", function(){
    $estudiantes = Estudiantes::all();
    foreach($estudiantes as $estudiante){
        echo "Nombre: ".$estudiante->name." estado: ".$estudiante->active;
    }
});