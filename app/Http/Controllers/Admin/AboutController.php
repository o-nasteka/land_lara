<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{

    public function show(){

        if (view()->exists('default.about')){

            $page = DB::select("SELECT `name`,`text` from `pages` WHERE `alias` = :alias",['alias'=>'about']);

            // insert
//            DB::insert("INSERT INTO `articles` (`name`,`text`) VALUES (?,?)",['test123','lorem text']);

            // get last insert ID
//            $id = DB::getPdo()->lastInsertId();

            // update
//            DB::update("UPDATE `articles` SET `name` = ? WHERE `id` = ? ",[
//                'NEW TEST NAME1212',10
//            ]);

            // delete
//            DB::delete("DELETE FROM `articles` WHERE `id` = ?",[10]);

            // select
            //            $articles = DB::select("SELECT * FROM `articles` WHERE id = ? ",[2]);
//            $articles = DB::select("SELECT * FROM `articles`");
//            dump($id);
//            dump($articles);

            return view('default.about')->withPage($page[0])->withTitle('About our company');

        }

        abort(404);
    }


//    public function show2(){   // Example
//
////        return 'About';
////
//        if (view()->exists('default.about')){
//
//            $page = DB::select("SELECT `name`,`text` from `pages` WHERE `alias` = :alias",['alias'=>'about']);
//            return view('default.about')->withPage($page[0]->withTitle('About our company'));
////            $view = view('default.about')->withTitle('About page')->render();
////            return ( new Response($view) )->header('Content-Type', 'newType');
//
////            return response($view)->header('Content-Type', 'newType');
////
////            return view('default.about')->withTitle('About page');
////
////            return response()->json(['name'=>'Hello!', 'name2'=>'Hello2!']);
////            return response()->view('default.about',['title'=>'About']);
//
//
//
////            return response()->download('robots.txt');
//
////            return redirect('articles');
//
////            return new RedirectResponse('/articles');
//
////            return redirect('/articles')->withInput();
////            return redirect()->route('home');
////            return redirect()->action('Admin\ContactController@show');
//
////            return RedirectResponse::create('/articles');
//
////            return response()->myRes('Hello World!');
//
//
//        }
//
//        abort(404);
//    }

}
