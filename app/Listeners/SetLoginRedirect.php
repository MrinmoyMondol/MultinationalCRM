<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Session;

class SetLoginRedirect
{
    /**
     * Handle the event.
     */
    public function handle(Login $event): void
    {
        $user = $event->user;

        if (method_exists($user, 'hasRole')) {
            if ($user->hasRole('super-admin')) {
                Session::put('url.intended', route('super-admin.dashboard'));
                return;
            }

            if ($user->hasRole('country-manager')) {
                Session::put('url.intended', route('country-manager.dashboard'));
                return;
            }

            if ($user->hasRole('branch-manager')) {
                Session::put('url.intended', route('branch-manager.dashboard'));
                return;
            }

            if ($user->hasRole('staff')) {
                Session::put('url.intended', route('staff.dashboard'));
                return;
            }

            if ($user->hasRole('customer')) {
                Session::put('url.intended', route('customer.dashboard'));
                return;
            }
        }

        // Fallback
        Session::put('url.intended', url('/'));
    }
}
