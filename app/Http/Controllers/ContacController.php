<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContacController extends Controller
{

    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        dd($data['email']);
    }


    public function store1(ContactRequest $request)
    {
        return view('contact');
    }

    public function __construct()
    {
        $this->middleware('admin')->only(['store']); //on lui demande d'appliquer a ces methodes def dans le tab
    }
}
