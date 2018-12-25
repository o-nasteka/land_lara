<?php

namespace App\Http\Middleware;

use Closure;

class Mymiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $param)
    {
        if($request->route('page') != 'pages'){
            return redirect()->route('home');
        }
        echo $param.'<br>';
        echo 'Middle ';
        return $next($request);

//        $response = $next($request);
//        echo ' Middle ';
//
//        return $response;
    }
}
