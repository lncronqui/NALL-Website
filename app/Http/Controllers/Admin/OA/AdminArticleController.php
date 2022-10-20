<?php

namespace App\Http\Controllers\Admin\OA;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\OA\UpdateArticleRequest;
use App\Models\Article;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class AdminArticleController extends Controller
{
    //Overall Admin views list of all articles
    public function index()
    {
        $articles = Article::all();
        return view('admin.overall.article.index', compact('articles'));
    }

    public function show(Article $article)
    {
        return view('admin.overall.article.index', compact('article'));
    }

    public function update(UpdateArticleRequest $request, Article $article)
    {
        $request->validate();
        try {
            $article = Article::findOrFail($article->id);

            $article->approved_by = auth()->user()->id;
            $article->save();
        } catch (ModelNotFoundException $e) {
            dd($e);
        }
    }
}
