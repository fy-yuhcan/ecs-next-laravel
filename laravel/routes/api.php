<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('test', static function () {
    return array('sample test');
});

Route::post('test', static function (Request $request) {
    $request->validate(['text' => 'required|string']);
    return \App\Models\Sample::create(['text' => $request->input('text')]);
});
