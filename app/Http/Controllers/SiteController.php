<?php

namespace App\Http\Controllers;

use App\Post;
use TCG\Voyager\Models\Category;
use App\Service;
use TCG\Voyager\Models\Page;

class SiteController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('site.index', [
            'posts' => $posts
        ]);
    }

    public function about()
    {
        $page = Page::query()->get()->where('slug','obo-mne');

        return view('site.about', [
            'page' => $page->get(1)
        ]);
    }

    public function portfolio()
    {
        $categories = Category::all();
        $projects = Post::all();

        return view('site.portfolio', [
            'projects' => $projects,
            'categories' => $categories
        ]);
    }

    public function services()
    {
        $services = Service::all();
        return view('site.services', [
            'services' => $services
        ]);
    }
}