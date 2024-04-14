<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next, string $role)
    {
        if ($role == 'pendaftar' && auth()->user()->role != User::PENDAFTAR) {
            abort(403);
        }
        if ($role == 'pegawai' && auth()->user()->role != User::PEGAWAI) {
            abort(403);
        }

        return $next($request);
    }
}
