<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cache;
use Route;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
        //return redirect('/admin/show');
        return view('admin.login');
    }

    public function show(){
        return view('admin.login');
    }
}
