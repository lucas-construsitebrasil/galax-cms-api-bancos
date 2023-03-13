<?php

namespace App\Http\Middleware;

use App\Business\V1\Account\Security\ExternalAuth as Security;
use Closure;
use Illuminate\Http\Request;

class ExternalAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $externalAuth = new Security();
        $decodedToken = $externalAuth->decodeToken();
        $externalAuth->setDataBase($decodedToken);
        $externalAuth->connect($decodedToken);
        return $next($request);
    }
}
