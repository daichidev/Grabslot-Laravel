<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use App\Models\LogUrls;

class LogReferrer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (strpos($request->fullUrl(), 'exist=qr') !== false) {
            $insertUrls['url'] = "QR";
            LogUrls::create($insertUrls);
        }

        // Check if the referrer is set and log or store it
        if ($request->hasHeader('referer')) {
            $referrer = $request->headers->get('referer');

            // Log the referrer
            Log::info('Referrer: ' . $referrer);

            if (strpos($referrer, 'twitter.com') !== false || strpos($referrer, 'instagram.com') !== false) {
                $insertUrls['url'] = $referrer;
                LogUrls::create($insertUrls);
            }


        }

        return $next($request);
    }
}
