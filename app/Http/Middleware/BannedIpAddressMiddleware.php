<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Bannedips;
use Illuminate\Http\Response;

class BannedIpAddressMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */


    public function handle(Request $request, Closure $next)
    {

        $BannedIps= Bannedips::all();

        /*Get external ip wouldnt be an issue if we where not running on a local xammp server*/
        $externalContent = file_get_contents('http://checkip.dyndns.com/');
        preg_match('/Current IP Address: \[?([:.0-9a-fA-F]+)\]?/', $externalContent, $m);
        $externalIp = $m[1];


        for($i = 0; $i< sizeof($BannedIps); $i++){

            if ($externalIp == $BannedIps[$i]['ips']){

                /*Redirect to banned view page*/
                $ip = $externalIp;
                $reason = $BannedIps[$i]['Reason'];
                return new response(view('AntiBot.BannedErrorPage', compact('ip','reason')));

            }
        }

        return $next($request);

    }
}
