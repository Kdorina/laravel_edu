<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test;

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
Route::get("/about", function($name){
    return view("about", ["name" => $name]);
});

// Route::get("/test/{id}", [ Test::class, "index"]);
// Route::get("/test/{id?}", [ Test::class, "index"]);
// Route::get("/test/{id}/{name}", [ Test::class, "index"]);
// Route::get("/test/{id}/{name?}", [ Test::class, "index"]);

// Route::get("/test/{id}/{name}", function($id, $name) {
    
//     echo "<h3>Id: </h3>".$id;
//     echo "<h3>Name: </h3>".$name;
// })->where(["id" => "[0-9]+", "name" => "[a-zA-Z]+"]);

// Route::get("/test/{name}", function($name) {

//     return view("test", ["name" => $name]);
// });

Route::get("/test", [Test::class, "index"]);

// Route::get("/about", function($name){
//     return view("about", ["name" => $name]);
// });