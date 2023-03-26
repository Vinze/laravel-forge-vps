<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Todo;

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
    $todos = Todo::latest()->get();

    return view('todos', compact('todos'));
});

Route::post('todos/new', function(Request $request) {
    $request->validate([
        'description' => 'required'
    ]);

    Todo::create([
        'description' => $request->input('description')
    ]);

    return back();
});

Route::post('todos/delete/{todo}', function(Request $request, Todo $todo) {
    $todo->delete();

    return back();
});