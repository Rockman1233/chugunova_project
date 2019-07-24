<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {

        $posts = Post::all();

        return view('site.index', [
            'posts' => $posts
        ]);
    }
}