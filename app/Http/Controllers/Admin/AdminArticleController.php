<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreArticleRequest;
use App\Http\Requests\Admin\UpdateArticleRequest;
use App\Models\Article;
use App\Models\Author;
use App\Models\PubType;
use App\Providers\RouteServiceProvider;
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
        $articles = Article::with('institution', 'pubType', 'encoder')->where('approved_by', null);
        return view('admin.articles.index', compact('articles'));
    }

    private function university_articles()
    {
        $articles = Article::where(
            [['institution_id', auth()->user()->institution->id]],
            )->whereNotNull('approved_by')->get();
        return view('admin.articles.index', compact('articles'));
    }

    public function view()
    {
        if (auth()->user()->role->name == 'Overall Administrator') {
            return $this->overall_articles_all();
        }

        if (auth()->user()->role->name == 'University Administrator') {
            return $this->university_articles_all();
        }
    }

    private function overall_articles_all()
    {
        $articles = Article::with('institution', 'pubType', 'encoder')->get();
        return view('admin.articles.index', compact('articles'));
    }

    private function university_articles_all()
    {
        $articles = Article::with('institution', 'pubType', 'encoder')
            ->where([['institution_id', auth()->user()->institution->id]],)
            ->get();
        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        $pubTypes = PubType::all();
        return view('admin.univ.create', compact('pubTypes'));
    }

    public function store(StoreArticleRequest $request)
    {
        if ($request->user()->cannot('create', Article::class)){
             return redirect()->intended(RouteServiceProvider::ADMIN_HOME);
        }
        $validated = $request->validated();

        $article = Article::create([
            'title' => $request->input('title'),
            'abstract' => $request->input('abstract'),
            'journal_title' => $request->input('journal_title'),
            'date' => $request->input('date'),
            'doi' => $request->input('doi'),
            'institution_id' => auth()->user()->institution->id,
            'page' => $request->input('page'),
            'pub_type_id' => $request->input('pub_type'),
            'url' => $request->input('url'),
            'encoded_by' => auth()->user()->id
        ]);

        for($i = 0; $i < count($request->input('name')); $i++) {
            $author = Author::firstOrCreate([
                'name' => $request->name[$i],
                'email' => $request->email[$i],
            ]);
            $article->authors()->attach($author->id);
        }

        return redirect()->route('admin.articles.index');
    }


    public function show(Article $article)
    {
        return view('admin.articles.index', compact('article'));
    }

    public function approve(Article $article)
    {
        try {
            $articles = Article::findOrFail($article->id);

            $articles->approved_by = Auth::user()->id;
            $articles->save();
        } catch (ModelNotFoundException $e) {
            dd($e);
        }

        return redirect()->route('admin.index');
    }

    public function update(Article $article, UpdateArticleRequest $request)
    {

    }

    public function delete(Article $article)
    {
        $article->delete();

        return redirect()->intended(RouteServiceProvider::ADMIN_HOME);
    }
}
