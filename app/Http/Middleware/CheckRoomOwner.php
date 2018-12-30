<?php

namespace App\Http\Middleware;

use App\Hroom;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRoomOwner
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
        $room = Hroom::findorfail($request->id);
        $property = $room->property;
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
