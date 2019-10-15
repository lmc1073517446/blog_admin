<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Tourist;
use Torann\GeoIP\GeoIP;

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
        //记录来访
        $visit = [
            'add_time' => date('Y-m-d H:i:s'),
            'last_time' => date('Y-m-d H:i:s'),
            'ip' => $request->getClientIp(),
            'region' => \GeoIP::getLocation($request->getClientIp())->city,
        ];
        $visitModel = new Tourist();
        $visitModel->insert($visit);
        return $next($request);
    }
}
