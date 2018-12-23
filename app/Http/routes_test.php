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

Route::get('/',
        [
            'as' => 'home',
            function () {return view('welcome');}
        ]);

Route::get('/article/{id}',
    [
        'as' => 'article',
        function ($id) {
        echo $id;
}
    ]);

Route::get('/page/{cat}/{id}', function ($id) {

    echo '<pre>';
//    echo Config::get('app.locale');
    echo $id;
    echo '</pre>';
    // return view('page');
});


/*
Route::post('/comments', function (){

    echo '<pre>';

    var_dump($_POST);

    echo '</pre>';

});
*/

Route::match(['get','post'], '/comments', function (){

    echo '<pre>';

    var_dump($_POST);

    echo '</pre>';

});

Route::group(['prefix'=>'admin/{id}'], function (){

    Route::get('page/create/{var}', function ($id){

        $route = Route::current();
        echo '<pre>';
//        print_r($route->getName());
        echo $route->getParameter('var', 12);
        print_r( $route->parameters() );
        echo '<pre>';

//        return redirect()->route('article', ['id'=>'25']);
    })->name('createpage');

    Route::get('page/edit', function (){
        echo 'page/edit';
    });

});