<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', ['as' => 'home', function () {return view('welcome');}]);
//Route::get('/', ['as' => 'home', 'middleware'=>'auth', 'uses'=>'Admin\IndexController@show']);
Route::get('/', ['as' => 'home', 'uses'=>'Admin\IndexController@show']);

Route::get('/login', ['as' => 'login', 'uses'=>'LoginController@index']);


//Route::get('/about/{id}', 'FirstController@show');
Route::get('/about', 'Admin\AboutController@show')->name('about');
Route::match(['get','post'],'/contact/{data?}', ['uses'=>'Admin\ContactController@show', 'as'=>'contact']);

Route::get('/articles', ['uses'=>'Admin\Core@getArticles', 'as'=> 'articles']);
//Route::get('/article/{id}', ['uses'=>'Admin\Core@getArticle', 'as'=> 'article']);

//Route::get('/article/{page}', ['uses'=>'Admin\Core@getArticle', 'as'=>'article', 'middleware'=>'mymiddle']);
//Route::get('/article/{page}', ['uses'=>'Admin\Core@getArticle', 'as'=>'article']);
Route::get('/article/{id}', ['middleware'=>'mymiddle:admin','uses'=>'Admin\Core@getArticle', 'as'=>'article']);
//Route::get('/article/{page}', ['uses'=>'Admin\Core@getArticle', 'as'=>'article'])->middleware(['mymiddle']);

// List pages
//Route::get('/pages/add', 'Admin\CoreResource@add');
//Route::resource('/pages', 'Admin\CoreResource');

Route::controller('/pages', 'PagesController');

//Route::group(['prefix'=>'admin/{id}'], function (){
//
//    Route::get('page/create/{var}', function ($id){
//
//        $route = Route::current();
//        echo '<pre>';
////        print_r($route->getName());
//        echo $route->getParameter('var', 12);
//        print_r( $route->parameters() );
//        echo '<pre>';
//
////        return redirect()->route('article', ['id'=>'25']);
//    })->name('createpage');
//
//    Route::get('page/edit', function (){
//        echo 'page/edit';
//    });
//
//});

Route::group(['middleware'=>['auth']], function (){


});