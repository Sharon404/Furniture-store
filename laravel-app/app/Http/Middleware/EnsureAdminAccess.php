<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureAdminAccess
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        if (!$user) {
            return redirect()->route('admin.login');
        }

        $allowedEmails = collect(explode(',', (string) env('ADMIN_EMAILS', '')))
            ->map(fn (string $email): string => strtolower(trim($email)))
            ->filter()
            ->values();

        if ($allowedEmails->isEmpty()) {
            abort(403, 'Admin access is restricted. Configure ADMIN_EMAILS or implement role-based access control.');
        }

        if (!$allowedEmails->contains(strtolower((string) $user->email))) {
            abort(403, 'You are authenticated, but not authorized for admin access.');
        }

        return $next($request);
    }
}
