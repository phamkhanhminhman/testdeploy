<?php

namespace App\Http\Middleware;

use Closure;
use DB;
use App\Traits\Response;
use Carbon\Carbon;

class VerifyToken
{
    use Response;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = $request->user();
        $token = $request->header('Authorization');
        $login = DB::table('oauth_access_tokens')
                ->where('scopes', '"'.$token.'"')
                ->where('user_id', $user->id)
                ->first();

        $expires_at = $login->expires_at;

        if (!$this->validDate($expires_at)) {
                return $this->errorUnauthorized(__("Token Timeout"));
        } else {
            return $next($request);
        }
    }

    /**
     * @return bool
     */
    public function validDate($expires_at)
    {
        return Carbon::parse($expires_at)
            ->greaterThanOrEqualTo(Carbon::now()->format(config('api.date.default_full')));
    }
}
