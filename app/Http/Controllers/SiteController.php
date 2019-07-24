<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {

        //$posts = Post::all(['title']);
        //foreach ($posts as $post){
        //    echo $post->title;
        //}
        return view('site.index');
    }
}