<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Commit;
use App\Models\Contact;
use App\Models\Information;
use App\Models\Internation;
use App\Models\News;
use App\Models\Post;
use App\Models\Service;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Block;

class MainController extends Controller
{
    public function index()
    {
        $portfolios = Information::latest()->take(6)->get();
        $webPortfolio = Information::latest()->where('portfolio_id', 1)->take(4)->get();
        $appPortfolio = Information::latest()->where('portfolio_id', 2)->take(4)->get();
        $brandPortfolio = Information::latest()->where('portfolio_id', 3)->take(4)->get();
        $developmentPortfolio = Information::latest()->where('portfolio_id', 4)->take(4)->get();
        $questions = Post::latest()->take(8)->get();
        $blogs = News::latest()->take(3)->get();
        $commits = Commit::latest()->take(4)->get();
        $contacts = Contact::latest()->take(1)->get();
        $internation = Internation::latest()->take(1)->get();
        return view('index', compact([
            'portfolios',
            'webPortfolio',
            'appPortfolio',
            'brandPortfolio',
            'developmentPortfolio',
            'questions',
            'blogs',
            'commits',
            'contacts',
            'internation',
        ]));
    }
    public function about()
    {
        $about = About::latest()->take(1)->get();
        $about1 = About::latest()->skip(1)->take(1)->get();
        $contacts = Contact::latest()->take(1)->get();
        $commits = Commit::latest()->take(4)->get();
        $internation = Internation::latest()->take(1)->get();
        return view('about', compact([
            'contacts',
            'about',
            'about1',
            'commits',
            'internation',
        ]));
    }
    public function portfolio()
    {
        $contacts = Contact::latest()->take(1)->get();
        $portfolios = Information::latest()->take(4)->get();
        $internation = Internation::latest()->take(1)->get();
        return view('portfolio', compact([
            'contacts',
            'portfolios',
            'internation',
        ]));
    }
    public function service()
    {
        $contacts = Contact::latest()->take(1)->get();
        $services = Service::latest()->take(6)->get();
        $internation = Internation::latest()->take(1)->get();
        return view('service', compact([
            'contacts',
            'services',
            'internation',
        ]));
    }
    public function contact()
    {
        $contacts = Contact::latest()->take(1)->get();
        $internation = Internation::latest()->take(1)->get();
        return view('contact', compact([
            'contacts',
            'internation',
        ]));
    }

    public function blog()
    {
        $contacts = Contact::latest()->take(1)->get();
        $blogs = News::latest()->take(6)->get();
        $internation = Internation::latest()->take(1)->get();
        return view('blog', compact([
            'contacts',
            'blogs',
            'internation',
        ]));
    }

    public function singleBlog($blog)
    {
        $blogs = News::find($blog);
        $contacts = Contact::latest()->take(1)->get();
        $internation = Internation::latest()->take(1)->get();
        return view('singleBlog', compact([
            'contacts',
            'blogs',
            'internation',
        ]));
    }

    public function singleService($category){
        $service = Service::where('category_id', $category)->first();
        $contacts = Contact::latest()->take(1)->get();
        $internation = Internation::latest()->take(1)->get();

        return view('singleService', compact([
            'service',
            'contacts',
            'internation',
        ]));

    }

}
