<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\article;


class ArticleController extends Controller
{
    //

    public function index()
    {

        $articles = article::all()->where('publish', 1);


        return view('articles.index', ['articles' => $articles]);

    }


    public function show($id, article $article){

        $art = $article->where('publish', 1)->findOrfail($id);

        return view('articles.show', ['article' => $art]);
    }
}
