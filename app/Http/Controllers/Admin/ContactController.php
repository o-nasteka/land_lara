<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class ContactController extends Controller
{
    //
//    protected $request;
//
//    public function __construct(Request $request){
//        $this->request = $request;
//    }

    public function show(Request $request, $id=false){
        $arr = [
            'title' => 'Contacts'
            ];

//        print_r($request->all());
//        print_r($request->only('name', 'site'));
//        print_r($request->except('name', 'site'));



        if($request->has('name')){
//            echo '<h1>'.$request->input('name').'</h1>';
            echo '<h1>'. $request->name .'</h1>';

        }

        if($request->is('contact/*')){
            echo '<h1>'. $request->path() .'</h1>';
        }

        echo '<h1>'. $request->fullUrl() .'</h1>';

//        echo '<h1>'. $request->method() .'</h1>';

        echo '<h1>'. $request->root() .'</h1>';

        if ($request->isMethod('post')){

            // validation
            //
            // echo '<h2>Method: '. $request->method() .'</h2>';

//            $request->flashOnly('name', 'email');
//            $request->flashExcept('name', 'email');
//
//            $request->flash();
//            $request->flush();
//            $request->old();
            return redirect()->route('contact')->withInput();

        }

        return view('default.contact', $arr);
    }
}
