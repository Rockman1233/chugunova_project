<?php

namespace App\Http\Controllers;

use App\Message;
use App\Post;
use App\SocialNet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use TCG\Voyager\Models\Category;
use App\Service;
use TCG\Voyager\Models\Page;

class SiteController extends Controller
{

    public function __construct()
    {
        $social = SocialNet::all()->where('active', true);

        // Sharing is caring
        View::share('social', $social);

    }


    public function index()
    {
        $posts = Post::all();

        return view('site.index', [
            'posts' => $posts
        ]);
    }

    public function about()
    {
        $page = Page::query()->where('slug','obo-mne');

        return view('site.about', [
            'page' => $page->first()
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

    public function project($slug)
    {
        $project = Post::query()->where('slug',$slug)->first();
        return view('site.single-project',[
            'project' => $project
        ]);
    }

    public function contact()
    {
        $page = Page::query()->where('slug','kontakt');
        return view('site.contact', [
            'page' => $page->first()
        ]);
    }

    public function getMessage(Request $request)
    {
        Message::create($request->all());
    }
}