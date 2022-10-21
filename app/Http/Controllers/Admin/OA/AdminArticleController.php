<?php

namespace App\Http\Controllers\Admin\OA;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\OA\UpdateArticleRequest;
use App\Models\Article;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminArticleController extends Controller
{
    //Overall Admin views list of all articles
    public function index()
    {
        if (auth()->user()->role->name == 'Overall Administrator') {
            return $this->overall_articles();
        }

        if (auth()->user()->role->name == 'University Administrator') {
            return $this->university_articles();
        }
    }

    private function overall_articles()
    {
        $articles = Article::where('approved_by', null)->get();
        return view('admin.overall.index', compact('articles'));
    }

    private function university_articles()
    {
        $articles = Article::where(
            [['institution_id', auth()->user()->institution->id]],
            )->whereNotNull('approved_by')->get();
        return view('admin.overall.index', compact('articles'));
    }



    public function show(Article $article)
    {
        return view('admin.overall.index', compact('article'));
    }

    public function update(Article $article)
    {
        //$request->validate();
        try {
            $articles = Article::findOrFail($article->id);

            $articles->approved_by = Auth::user()->id;
            $articles->save();
        } catch (ModelNotFoundException $e) {
            dd($e);
        }

        return redirect()->route('admin.index');
    }
}
