<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/', function () {
    $player = [
        'name' => 'Pippo',
        'surname' => 'Pluto',
    ];

    $videogames = [
        [
            "gameTitle" => "CSGO"
        ],
        [
            "gameTitle" => "VALORANT"
        ],
        [
            "gameTitle" => "Resident Evil 7"
        ],
        [
            "gameTitle" => "Life is Strange"
        ],
        [
            "gameTitle" => "Life is Strange:Before The Storm"
        ],
        [
            "gameTitle" => "The Sims"
        ],
    ];
    return view('home', [
        "user" => $player,
        "videogame" => $videogames,
    ]);;
})->name("home");


