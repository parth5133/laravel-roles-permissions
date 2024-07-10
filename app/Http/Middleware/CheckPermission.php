<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $permission
     * @return mixed
     */
    public function handle($request, Closure $next, $permission)
    {
        $user = Auth::user();
        if (!$user || !$this->checkUserPermission($user, $permission)) {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }

    /**
     * Check if the user has the given permission.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @param  string  $permission
     * @return bool
     */
    protected function checkUserPermission(Authenticatable $user, $permission)
    {
        // Implement your custom permission check logic here
        // For example, assuming each user has a permissions property that is an array
        return in_array($permission, $user->permissions ?? []); // Safe navigation in case permissions is null
    }
}
