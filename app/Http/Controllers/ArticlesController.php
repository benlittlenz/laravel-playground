<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index() {
        //Renders a list
        $articles = Article::latest()->get();

        return view('articles.index', ['articles' => $articles]);
    }
    public function show(Article $article) {
        //show a single resource

        return view('articles.show', ['article' => $article]);
    }

    public function create() {
        return view('articles.create');
    }
    public function store() {
        $validatedAttributes = request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
        ]);

        Article::create($validatedAttributes);

        return redirect('/articles');
    }
    public function edit(Article $article) {
        return view('articles.edit', ['article' => $article]);
    }
    public function update(Article $article) {
        $validatedAttributes = request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
        ]);

        $article->update($validatedAttributes);

        return redirect('/articles/' . $article->id);
    }

}
