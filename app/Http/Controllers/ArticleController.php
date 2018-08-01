<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function new_article_form(){
    	$article = new Article();
    	return view('pages.add_update_article',compact('article'));
    }

    public function add_new_article(Request $request){
    	$this->validate($request, [
    		'title' => 'required',
    		'content'=>'required'
    	]);

    	Article::create($request->all());
    	return redirect()->back()->with('success','Data added success');
    }

    public function edit_article_form($id){
    	$article = Article::find($id);
    	return view('pages.add_update_article',compact('article'));
    }

    public function update_article_record(Request $request,$id){
    	$this->validate($request,[
    		'title'=>'required',
    		'content'=>'required'
    	]);

    	$article = Article::find($request->id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->save();
    	
    	return redirect()->route('article-update')->with('success','updated');
    	

    }
}
