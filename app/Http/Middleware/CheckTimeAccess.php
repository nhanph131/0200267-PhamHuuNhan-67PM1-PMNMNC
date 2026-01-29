<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Carbon\Carbon;

class CheckTimeAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $now = Carbon::now(); 
        $hour = $now->hour;  

        // if ($hour < 0 || $hour >= 7) {
        //     return response()->json([
        //         'message' => 'Khong the san sale bay h, tiec ghe'
        //     ], 403);
        // }

        return $next($request);
    }
}
 