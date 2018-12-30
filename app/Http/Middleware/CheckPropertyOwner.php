<?php

namespace App\Http\Middleware;

use App\Property;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckPropertyOwner
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
        $property = Property::findorfail($request->id);
        if(Auth::guest()) {
            return redirect('/');
        } else {
            if ($property->user_id != Auth::user()->id) {
                return redirect('/');
            }
        }
        return $next($request);
    }
}
