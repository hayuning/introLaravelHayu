<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function register(){
      return view('register');
    }
    public function welcome(Request $request){
        //dd($request->all());
        $firstName=$request["firstName"];
        $lastName=$request["lastName"];
        //return "$firstName";
        echo "<h1> SELAMAT DATANG $firstName $lastName</h1>";
        echo "<p><h2>Terima kasih telah bergabung di SanberBook. Social media kita bersama!</h2></p>";
    }
}
