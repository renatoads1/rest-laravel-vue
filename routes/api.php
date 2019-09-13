<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('lol',function(){
    $resposta = ["msg"=>"srv1"];
    return $resposta;
});
