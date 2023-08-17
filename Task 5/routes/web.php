<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'todos' => [
            ['id' => 1, 'task' => 'Go to the store', 'completed' => false],
            ['id' => 2, 'task' => 'Go to the college', 'completed' => true],
            ['id' => 3, 'task' => 'Go to the work', 'completed' => false],
            ['id' => 4, 'task' => 'Go to the gym', 'completed' => false],
            ['id' => 5, 'task' => 'Go to the home', 'completed' => false],
        ]
    ]);
});
