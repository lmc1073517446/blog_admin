<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Tourist;

class RecordTourist
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
        //记录游客来访
       // $arr = ['aa'=>'bb','cc'=>'dd'];


        return $next($request);
    }
}
