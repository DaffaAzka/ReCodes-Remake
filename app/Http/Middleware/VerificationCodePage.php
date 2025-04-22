<?php

namespace App\Http\Middleware;

use App\Models\VerificationCode;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerificationCodePage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $is_exist = VerificationCode::where('ip_address', $request->ip())
            ->where('expires_at', '>=', now())
            ->exists();

        if ($is_exist) {
            return $next($request);
        } else {
            abort(403, 'Verification code expired or not found.');
        }
    }
}
