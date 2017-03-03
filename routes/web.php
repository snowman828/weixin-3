<?php

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
    return view('welcome');
});

Route::get('testPost',function(){
    $csrf_token = csrf_token();
    $form = <<<FORM
        <form action="/hello" method="POST">
            <input type="hidden" name="_token" value="{$csrf_token}">
            <input type="submit" value="Test"/>
        </form>
FORM;
    return $form;
});


Route::post('hello',function(){
    //Class HelpSpot\API does not exist
    //Class 'App\Providers\HelpSpot\API' not found
    //$api = resolve('ViewServiceProvider');
    //var_dump($api);
    return view('hello.hello', ['testStr' => strval('2017-03-03 23:50:50')]);
});

Route::resource('post','PostController');
