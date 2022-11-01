<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

    public function index($param = null)
    {

        //dd($param);
        //return "Hello ".$param;
        // return view('home');
        // return view('front.layout'); //affichage de la page layout
        return view('front.home');
    }

    // public function laravel_blade()
    // {
    //     $maVariable = 'Hello la Classe !';
    //     // return view('welcome')->with('maVariable ', $maVariable);
    //     return view('hello', compact('maVariable'));
    // }

    public function laravel_blade()
    {
        $animal = 'Cheval';
        $produit = 'Cube';
        $letter = ['A', 'B', 'C'];
        // return view('welcome')->with('maVariable ', $maVariable);
        return view('hello', compact('animal', 'produit', 'letter'));
    }
}
