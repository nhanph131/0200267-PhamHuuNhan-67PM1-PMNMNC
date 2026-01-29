<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAge
{
    public function handle(Request $request, Closure $next): Response
    {
        $age = session('age');
        if (!$age)
            return redirect()->route('age');

        if (!is_numeric($age) || (int)$age < 18) {
            return response()->json([
                'message' => 'Không được phép truy cập nội dung 18+'
            ], 403);
        }
        return $next($request);
    }
}
