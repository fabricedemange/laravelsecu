<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Http\Requests\ArticlesRequest;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    public function index()
    {

        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    public function index_light()
    {

        $articles = Article::all();
        return view('articles.index_light', compact('articles'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create')->with('message', "Création d'un article");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticlesRequest $request) //Articlesrequest impose la passage par la class articlesrequest pour vérification des prérequis
    {


        Article::create($request->all());
        //$article = new article;
        //$article->title = $request->title;
        //$article->content = $request->content;
        //$article->save();
        //return back()->with('message', "Article bien crée !!!");
        return redirect('article_index')->with('message', "Article bien crée !!!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(article $article)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(article $article)
    {
     
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(articlesRequest $request, article $article)
    {
    
        $article->title = $request->title;
        $article->content = $request->content;
        $article->save();
        return back()->with('info', "L'article a bien été modifié !");
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(article $article)
    {
        $article->delete();
        //return redirect('articles.index')->with('message', 'Profile updated!');
        //return redirect()->route('/index')->with('message', "l'article bien été supprimé dans la base de données.");;
        return back()->with('message', "l'article a bien été supprimé dans la base de données.");
    }
}
