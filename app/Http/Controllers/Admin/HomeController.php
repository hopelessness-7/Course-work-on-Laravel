<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        $users = User::all()->count();

        return view('admin.home.index',[
            'users'=>$users
        ]);
    }
}
