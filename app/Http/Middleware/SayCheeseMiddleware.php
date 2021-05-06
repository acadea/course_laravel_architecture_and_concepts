<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SayCheeseMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
//        dump("HEY CHEESEE");
        return $next($request);
//        return new JsonResponse([
//            'data' => 'cheeseeee',
//        ]);
    }

    public function terminate($request, $response)
    {
        dump('BYEEE');
    }
}
