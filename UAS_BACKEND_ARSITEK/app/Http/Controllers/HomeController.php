<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article; // Import the Article model

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->get();
        return view('index', compact('articles'));
    }

}
