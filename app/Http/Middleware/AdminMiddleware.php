<?php
/**
 * Created by PhpStorm.
 * User: Crepino
 * Date: 16/10/2018
 * Time: 16:49
 */

namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        $user = User::all()->count();
        if (!($user == 1)) {
            if (!Auth::user()->hasPermissionTo('Administer roles & permissions')) {
                abort('401');
            }
        }

        return $next($request);
    }
}