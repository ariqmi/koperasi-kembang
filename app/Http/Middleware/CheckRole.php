<?php

namespace App\Http\Middleware;

use App\Enums\UserRole;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if (!\Auth::check()) // I added this check to make sure a user is logged in
            return redirect()->route('login.index');

        $user = \Auth::user();

        if ($user->role->value !== $role) {
            // Redirect user to the home page if they don't have the required role
            switch ($user->role) {
                case UserRole::Admin:
                    return redirect()->route('admin.dashboard.index');
                case UserRole::Fo:
                    return redirect()->route('fo.dashboard.index');
                case UserRole::Member:
                    return redirect()->route('member.dashboard.index');
                default:
                    return redirect()->route('login.index')->with(['error' => 'Anda Tidak Punya Akses']);
            }
        }

        return $next($request);
    
    }
}