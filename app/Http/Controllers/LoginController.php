<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(REQUEST $request){
        $logintype=$request->type;
        $data=compact('logintype');
        return view('login')->with($data);
    }
}
