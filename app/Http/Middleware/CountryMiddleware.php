<?php

namespace App\Http\Middleware;

use App\Country;
use Closure;

class CountryMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $url = $request->fullUrl();
        $parsedUrl = parse_url($url);

        $host = explode('.', $parsedUrl['host']);
        $subdomain = $host[0];

        // If India or Canada Subdomain found
        if($subdomain == 'ca' || $subdomain == 'in') {
            $request->session()->put('country', $subdomain);
            $request->session()->save();

            return $next($request);
        } else {
            // If No Subdomain and ...... session found
            if ($request->session()->has('country')) {
                $country_short = $request->session()->get('country');

                if(!empty($parsedUrl['path'])) {
                    $path = $parsedUrl['path'];
                } else {
                    $path = '';
                }

                return redirect('https://'.$country_short.'.findmehome.xyz'.$path);
            } else { // If no session found
                $country_api = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR']));
                $country_short = strtolower($country_api['geoplugin_countryCode']);

                if($country_short == null) {
                    return redirect()->route('choose.country');
                } elseif ($country_short == 'ca' || $country_short == 'in') {
                    if(!empty($parsedUrl['path'])) {
                        $path = $parsedUrl['path'];
                    } else {
                        $path = '';
                    }

                    $request->session()->put('country', $country_short);
                    $request->session()->save();

                    return redirect('https://'.$country_short.'.findmehome.xyz'.$path);
                } else {
                    return redirect()->route('choose.country');
                }

            }
        }

        /*$request->session()->put('country', 'ca');
        $request->session()->save();

        return $next($request);*/

    }
}
