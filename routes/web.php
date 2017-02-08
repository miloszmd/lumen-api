<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use App\Common\HttpClient;

$app->get('/', function () {
    $request = new \App\Spotify\SpotifyAdapter(new HttpClient());
    return json_decode($request->search('psy', 'artist'));
});
