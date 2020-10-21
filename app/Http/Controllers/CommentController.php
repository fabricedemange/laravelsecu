<?php

namespace App\Http\Controllers;

use App\Models\comment;
use App\Models\article;
use App\Http\Requests\commentsRequest;
use Illuminate\Http\Request;

class commentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    public function index()
    {

        $comments = comment::all();
        return view('comments.index', compact('comments'));
    }

    public function index_light()
    {

        $comments = comment::all();
        return view('comments.index_light', compact('comments'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(article $article)
    {
      
        return view('comments.create', compact('article'))->with('message', "Création d'un commentaire");    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(commentsRequest $request,article $article) //commentsrequest impose la passage par la class commentsrequest pour vérification des prérequis
    {
        $comment = new comment;
        $comment->pseudo = $request->pseudo;
        $comment->content = $request->content;
        $comment->article_id = $request->article_id;
        $comment->save();
        //return back()->with('message', "comment bien crée !!!");
        return redirect('comments')->with('message', "commentaire bien crée !!!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(comment $comment)
    {
        return view('comments.show', compact('comment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(comment $comment)
    {
        return view('comments.edit', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(commentsRequest $request, comment $comment)
    {
    
      
        $comment->content = $request->content;
        $comment->save();
        

        return redirect('comments')->with('info', "Le commentaire a bien été modifié !");
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(comment $comment)
    {
        $comment->delete();
        //return redirect('comments.index')->with('message', 'Profile updated!');
        //return redirect()->route('/index')->with('message', "l'comment bien été supprimé dans la base de données.");;
        return back()->with('message', "l'comment a bien été supprimé dans la base de données.");
    }
}
