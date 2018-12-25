<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use Session;

class Core extends Controller
{
    public function __construct()
    {
//        $this->middleware('mymiddle');
    }

//    public function getArticles(){
//        return view('about');
//    }

//

//
//  Eloquent 20
//
//    public function getArticles(){

//        $articles = DB::table('articles')->get();

//        $articles = Article::all();

//        $articles = Article::where('id', '>', 2)->get();

//        $articles = Article::chunk(2, function ($articles){
//
//        });


//        $article = Article::find(1);
//        $article->name = 'New name 5656';
//        $article->text = 'New text 5656';
//        $article->save();

//        $data = Session::all();
//        dump($data);

//        $articles = Article::where('id', 1)->first();

//        $articles = Article::findOrFail(1);

//        $article = new Article();
//
//        $article->name = 'New Article55';
//        $article->text = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, error, provident. Asperiores autem earum error eum obcaecati porro possimus totam! Ab commodi id iste, nesciunt perspiciatis provident quas similique veritatis.</p>';
//        $article->img = 'img55.jpg';

//        $article->save();

//        foreach ($articles as $article){
//            echo $article->name.'<br>';
//        }
//        echo $articles->text;

//        $articles = Article::all();
//        dump($articles);
//        return ;
//    }

//
// Eloquent (softDelete, create, delete, update)
//
//    public function getArticles(){
        // create
//        Article::create(
//            [
//                'name' => 'New Article 3434',
//                'text' => 'Some Text 2323'
//            ]
//        );

        // first or create
//        $article = Article::firstOrCreate(
//            [
//                'name' => 'New Article 3434yy',
//                'text' => 'Some Text 2323'
//            ]
//        );


        // first or new
//        $article = Article::firstOrNew(
//            [
//                'name' => 'New Article 3434zz',
//                'text' => 'Some Text 2323'
//            ]
//        );
//        $article->save();

        // delete
//        $article = Article::find(9);
//        if($article != null){
//            echo 'Successul deleted: '.$article->name;
//            $article->delete();
//        }
//        Article::where('id','>','4')->delete();


        // destroy
//        Article::destroy(8);
//        Article::destroy([6,7]);

        // soft delete
//        $article = Article::find(3);
//        if($article != null){
//            echo 'Successul deleted: '.$article->name;
//            $article->delete();
//        }

        // get trashed & restore
//        $articles = Article::withTrashed()->get();
//
//        foreach ($articles as $article){
//            if( $article->trashed() ){
//                echo $article->name.' - Восстановлена <br>';
//                $article->restore();
//            }
//            else{
//                echo $article->name.' - OK <br>';
//            }
//        }
//        $articles = Article::onlyTrashed()->restore();

        // Force Delete if set=SoftDelte
//        $article = Article::find(3);
//        $article->forceDelete();

//        $articles = Article::all();
//        dump($articles);
//    }


// #22 Eloquent Relationships
    public function getArticles(){

    }


    public function getArticle($id){

        echo 'Ответ - '.$id;

        return view('about');
    }
}
