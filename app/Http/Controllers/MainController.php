<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class MainController extends Controller
{
    public function index()
    {
//        dd(User::all());
//        $users = User::all()->where('id', '', 1);
//        $users = User::query()->get();
//        $user->name = "Denus";
//        $user->refresh();
//        $user = User::all()->where('id','=',2);

//        dd($users);

        return view('index');
    }
    public function product()
    {
        return view('product');
    }
}
