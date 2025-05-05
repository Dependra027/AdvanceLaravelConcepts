<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Agecheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //this is a global middleware so it will echo in all pages
        /*
        echo "echo from age check";
        print_r($request->age);
        if($request->age<18)
        {
            die('you cannot visit the page');
        }
            */
        return $next($request);

        //we can check by writing ?age=21 or any age in url
    }
    // to apply this middleware we need to go to app.php inside bootstrap
}
