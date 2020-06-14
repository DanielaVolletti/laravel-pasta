<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('home');
})->name('home');

Route::get('/pasta', function () {
    $pasta = config('pasta');
    $collection = collect($pasta) -> map(function($item, $key){
      $item['id'] = $key;
      return $item;
    });
    $pastaLunga = $collection -> where ('tipo', 'lunga');
    $pastaCorta = $collection -> where ('tipo', 'corta');
    $pastaCortissima = $collection -> where ('tipo', 'cortissima');
    return view('pasta', compact('pastaLunga', 'pastaCorta', 'pastaCortissima'));
})->name('pasta');

Route::get('/pastaSpecifica/{id}', function($id) {
    $pasta = config('pasta');
    $idPasta = $pasta[$id];
    return view('pastaSpecifica', compact('pasta', 'idPasta'));
})->name('pastaSpecifica');

Route::get('/pastaLunga', function () {
    $pastaGenerica = config('pasta');
    $collection = collect($pastaGenerica);
    $pastaSpecifica = $collection -> where ('tipo', 'lunga');
    return view('pastaTipo', compact('pastaSpecifica'));
})->name('pastaLunga');

Route::get('/pastaCorta', function () {
    $pastaGenerica = config('pasta');
    $collection = collect($pastaGenerica);
    $pastaSpecifica = $collection -> where ('tipo', 'corta');
    return view('pastaTipo', compact('pastaSpecifica'));
})->name('pastaCorta');

Route::get('/pastaCortissima', function () {
    $pastaGenerica = config('pasta');
    $collection = collect($pastaGenerica);
    $pastaSpecifica = $collection -> where ('tipo', 'cortissima');
    return view('pastaTipo', compact('pastaSpecifica'));
})->name('pastaCortissima');
