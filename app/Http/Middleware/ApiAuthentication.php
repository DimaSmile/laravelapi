<?php

namespace App\Http\Middleware;

use App\Traits\ApiResponse;
use Closure;
use Illuminate\Http\Request;

class ApiAuthentication
{
    use ApiResponse;

    const API_KEY_HEADER = 'x-api-key';

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $token = $request->header(self::API_KEY_HEADER);

        if($token === null){
            return $this->sendError('Unauthorized', 401);
        }

        if($token !== config('services.api.token')){
            return $this->sendError('Unauthorized', 401);
        }

        return $next($request);
    }
}
