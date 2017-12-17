<?php

$namespace = 'Curder\HelloWorld\Http\Controllers';

Route::group([
    'namespace' => $namespace,
    'prefix' => 'helloworld',
], function () {
    Route::get('/', 'HelloWorldController@index');
});
