<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index() {
        $articles = Article::all();
        return view('artikel.index', compact('articles'));
    }

    public function show($slug) {
        
        return view('article', compact('slug'));
    }
}
