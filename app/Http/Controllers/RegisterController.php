<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    public function register()
    {
        return view('front.register');
    }

    //validation des donnees du formulaire
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'lastName' => 'required|string|max:50',
            'email' => 'required|email',
            'password' => 'required|alpha_num|min:6'
        ]);

        //creation d'un tableau avec les donnees du formulaire
        $dataArray = array(
            'name' => $request->name, //ici les name du formulaire
            'lastName' => $request->lastName,
            'email' => $request->email,
            'password' => $request->password
        );

        //enregistrement des donnees dans la BD
        $user = User::create($dataArray);
        if (!is_null($user)) {
            return redirect()->route('login')->with("Success", "Success, You are successfully signed in!");
        } else {
            return redirect()->route('login')->with("Failed", "Alert! Failed to sign in.");
        }
    }
}
