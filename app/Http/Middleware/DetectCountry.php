<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class DetectCountry
{
    public function handle($request, Closure $next)
    {
        $ip = $request->ip();
        
        Log::info('User IP: ' . $ip);

        if($ip == '127.0.0.1' || $ip == '::1') 
        {
            $countryCode = 'IN';
            /* Log::info('Using default country code for localhost: ' . $countryCode); */
        } 
        else 
        {
            try 
            {
                $response = Http::get("http://ipinfo.io/{$ip}/json");
                $data = $response->json();

                /* Log::info('API Response: ', $data); */

                $countryCode = $data['country'] ?? null;

                /* Log::info('Detected Country Code: ' . $countryCode); */
            } 
            catch (\Exception $e) 
            {
                Log::error('Error detecting country: ' . $e->getMessage());
                $countryCode = null;
            }
        }

        if($countryCode) 
        {
            $request->session()->put('country_code', $countryCode);
        }

        return $next($request);
    }
}
