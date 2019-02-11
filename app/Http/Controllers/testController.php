<?php

namespace App\Http\Controllers;

use App\Article;

class testController extends Controller
{
    public function view($id)
    {
        // return view('');
        $article = Article::find($id);

        $article->category;
        $article->user;
        $article->tags;
        // print_r($article->tags);
        return view('test.index',['article'=>$article]);
    }
}
