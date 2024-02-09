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
    $text = 'Hello World'; // Assegnare "Hello World" a una variabile
    return view('home', compact('text')); // Passare la variabile alla vista utilizzando compact()
});

Route::get('/tecniche', function () {
    $tecniche = ["Ambliopya",
    "Narcoipnosi",
    "Silenziatore",
    "Antivis",
    "Antikelesis",
    "Moviola",
    "Ambliopya X",
    "Aphathia",
    "Narcoipnosi X",
    "Scippo",
    "Silenziatore X",
    "Antimajix",
    "Antiscutum",
    "Moviola X",
    "3 Penalità",
    "Estorsione",
    "Tokkata",
    "Ganascia"];
    return view('tecniche', compact('tecniche')); // Passare la variabile alla vista utilizzando compact()
})->name('tecniche') ;

Route::get('/magia_bianca', function () {
    $magia_bianca = ['Energia',
    'Energira',
    'Energiga',
    'Parafire',
    'Parathund',
    'Paraidro',
    'Parabliz',
    'Scan',
    'Esna',
    'Reiz',
    'Areiz',
    'Haste',
    'Hastega',
    'Slow',
    'Slowga',
    'Shell',
    'Protect',
    'Reflex',
    'Dispel',
    'Rigene',
    'Sancta',
    'Risveglio'];
    return view('magia_bianca', compact('magia_bianca')); // Passare la variabile alla vista utilizzando compact()
})->name('magia_bianca') ;

Route::get('/magia_nera', function () {
    $magia_nera = [
        "Fire",
        "Fira",
        "Firaga",
        "Thunder",
        "Thundara",
        "Thundaga",
        "Idro",
        "Idrora",
        "Idroga",
        "Blizzard",
        "Blizzara",
        "Blizzaga",
        "Bio",
        "Antima",
        "Ade",
        "Drain",
        "Aspir",
        "Flare",
        "Ultima"
    ]
    ;
    return view('magia_nera', compact('magia_nera')); // Passare la variabile alla vista utilizzando compact()
})->name('magia_nera') ;



