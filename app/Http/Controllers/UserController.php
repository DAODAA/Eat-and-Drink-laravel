<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function eloquent_query()
    {

        // $users = User::all();
        // dd($users->toArray());

        // $posts = User::find(1)->posts()->get();
        // dd($posts);

        // $name = User::select('name')->orderby('name', 'asc')->get()->toArray();
        // dd($name);

        $comments = User::find(1)->comments()->get();
        dd($comments);

    }
    
}
