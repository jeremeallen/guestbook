<?php

$app->get('/', function() use ($app) {
    return view('index');
});


$app->get('api/comment', 'CommentController@index');
$app->post('api/comment', 'CommentController@store');
$app->delete('api/comment/{id}', 'CommentController@destroy');