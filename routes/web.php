<?php

use App\Http\Controllers\DetailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Route::get('/', function () {
//     return view('welcome');
// });

//Route::get('/', [PageController::class, 'show'])->name("home");

//Route::get('/about/{id}', [PageController::class, 'showuser'])->name("about");
Route::get('/', [DetailController::class, 'showDetail'])->name('show_user');
Route::get('/single/{id}', [DetailController::class, 'singleuser'])->name('user');
Route::post('/add', [DetailController::class, 'insertRecord'])->name('adduser');
Route::put('/upd/{id}', [DetailController::class, 'updrecord'])->name('updrecord');
Route::get('/update/{id}', [DetailController::class, 'updatepage'])->name('updatepage');
Route::get('/del/{id}', [DetailController::class, 'deleterecord'])->name('delete');
Route::view('newuser', '/adduser');




// Route::view('/abot', 'about');

// Route::get('/abot/{id?}', function (string $id = null) {
//     if ($id) {
//         return "<h1> your id :-" . $id . "</h1>";
//     } else {
//         return "<h1>id not send</h1>";
//     }
//     // return view('about');
// });

// Route::get('/test', function () {
//     return view('test');
// });
// Route::get('/pass', function () {
//     $name = "Arman Aghariya";
//     $city = "Palanpur";

//     single element
//     return view('pass', ['name' => $name, 'city' => $city]);
//     return view('pass')->with('city', $city)->with('name', $name);

//     multidimension array value
//     $names = [
//         1 => ['name' => 'arman', 'city' => 'palanpur'],
//         2 => ['name' => 'hasan', 'city' => 'sidhpur'],
//         3 => ['name' => 'rehman', 'city' => 'chhapi'],
//         4 => ['name' => 'farid', 'city' => 'kalol'],

//     ];
//     return view('pass', [
//         'user' => $names,
//     ]);
//});
