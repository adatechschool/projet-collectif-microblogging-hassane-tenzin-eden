<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Post extends Controller
{
    public function getPosts(){
        $posts = DB::table('posts')->get();
        // dd($posts);
        return view('NotreProfile.pageProfile', compact('posts'));
    
    }
}
