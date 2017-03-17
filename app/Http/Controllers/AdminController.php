<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cache;
use App\Http\Route;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
        Route::get('login', 'AdminController@login');
        //return view(admin.login);
    }

    public function login(){
        return view('admin.login');
    }
}
