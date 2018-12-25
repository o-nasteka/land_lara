<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function show(){

//        $data = ['title'=>'Laravel Framework'];
//        return view('default.template', $data);

//        return view('default.template')->with('title','Laravel');


//        $view = view('default.template');
//        $view->with('title','Laravel');
//        $view->with('title2','Laravel2');
//        $view->with('title3','Laravel3');
//
//        return $view;
        $arr = [
            'title' => 'Laravel framework',
            'data' => [
                'one' => 'List 1',
                'two' => 'List 2',
                'three' => 'List 3',
                'thour' => 'List 4',
                'five' => 'List 5',
            ],
            'dataI' => ['List1', 'List2', 'List3', 'List4', 'List5'],
            'bvar' => true,
            'script' => "<script>alert('Hello!');</script>"

        ];

        if(view()->exists('default.index')){

//            view()->name('default.template','myview');
//            return view()->of('myview')->withTitle('Home page11');

            return view('default.index', $arr);

//            $view = view('default.template', ['title'=>'Laravel Framework'])->render();
//            echo $view;
//            return;

//            print_r( view('default.template', ['title'=>'Laravel Framework'])->getData() );
//            return;


        }

        abort(404);
    }

}
