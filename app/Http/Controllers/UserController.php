<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index () {

    return view ('index') ;
    } 

    public function insert(Request $request) {

    DB::table('user')->insert([
        'name'=>$request->username,
        'email'=>$request->email,
    ]) ;
           
    return "done" ;

    }

    public function get(){
        $users = DB::table('user')->get();
        return view('user',compact('users')) ;
    } 

} ;
