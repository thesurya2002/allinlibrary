<?php

namespace App\Http\Controllers;
use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(REQUEST $request){
        $logintype=$request->type;
        $data=compact('logintype');
        return view('register')->with($data);
    }

    public function register(REQUEST $request){
        // $logintype=$request->all();
        // echo $logintype['name'];
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ]);

        if($request->type=="student")
            $type=2;

        elseif ($request->type=="admin")
            $type=1;

        else
        $type=3;

        $table=new User;
        $table->name=$request['name'];
        $table->email=$request['email'];
        $table->password=base64_encode($request['password']);
        $table->type=$type;
        $table->save();
    }
}
