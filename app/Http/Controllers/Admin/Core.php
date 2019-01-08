<?php

namespace App\Http\Controllers\Admin;

use App\Country;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use Session;
use App\User;
use DB;


class Core extends Controller
{

    protected static $articles;

    public function __construct()
    {
//        $this->middleware('mymiddle');
    }

//    public function getArticles(){
//        return view('about');
//    }

//

// #19 Query Builder
public static function addArticles($array){
        return self::$articles[] = $array;
}

public function getArticles(){
//        DB::table('articles')->chunk(2,function($articles){
//
//            foreach ($articles as $article) {
//                Core::addArticles($article);
//            }
//        });
//        dump(self::$articles);
//        dump($articles);
//
//
//    $articles = DB::table('articles')->get();
//    $articles = DB::table('articles')->first();
//    $articles = DB::table('articles')->value('name');
//    $articles = DB::table('articles')->pluck('name');
//    $articles = DB::table('articles')->count();
//    $articles = DB::table('articles')->max('id');
//    $articles = DB::table('articles')->select('name','id','text')->get();
//    $articles = DB::table('articles')->distinct()->select('name')->get();

//    $query = DB::table('articles')->select('name');
    //
    // some check
    //
//    $articles = $query->addSelect('text')->get();

//    dump($articles);

//    $articles = DB::table('articles')->select('name','text AS fulltext')
//        ->where('id','>',2)
//        ->where('text','like','lorem%','or')
//        ->orWhere('id','<',2)
//        ->get();

//    $articles = DB::table('articles')->whereBetween('id',[1,5])->get();
//    $articles = DB::table('articles')->whereNotBetween('id',[1,5])->get();
//    $articles = DB::table('articles')->whereIn('id',[1,2,4])->get();
//    $articles = DB::table('articles')->whereNotIn('id',[1,2,4])->get();

    // limit
//    $articles = DB::table('articles')->take(4)->get();
//    $articles = DB::table('articles')->take(4)->skip(2)->get();
//    dump($articles);

//    DB::table('articles')->insert(
//        [
//            ['name'=>'Test2323', 'text'=>'Hello 2223'],
//            ['name'=>'Test3443', 'text'=>'Hello 3443']
//
//
//        ]
//
//    );

    // Insert and Get Last ID
    $result = DB::table('articles')->insertGetId(['name'=>'Test2323', 'text'=>'Hello 2223']);

//    $articles = DB::table('articles')->get();

    dump($result);

//    $articles = DB::table('articles')->select('name','text AS fulltext')
//        ->where([
//                    ['id','>',2],
//                    ['text','like','lorem%','or']
//            ])
//        ->get();

//    dump($articles);

}

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
//    public function getArticles(){
//        $user = User::find(1);
//        $countries = $user->country;
//        foreach ($countries as $country){
//            echo $country.'<br>';
//        }
//        $country = Country::find(1);
//        dump($country);

//        $articles = $user->articles()->where('id','>',1)->get();
//        $articles = $user->articles()->where('id',2)->first();
//        foreach ($articles as $article){
//            echo $article->name.'<br>';
//        }

//        $article = Article::find(2);
//        dump($article->user->name);

//        dump($countries);
//        foreach ($countries as $country){
//            echo $country;
//        }
//        dump($user);
//        return $user;
//    }
//

    public function getArticle($id){

        echo 'Ответ - '.$id;

        return view('about');
    }
}
