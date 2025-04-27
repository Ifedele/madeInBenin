<?php

namespace App\View\Composers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class NotificationComposer
{
    public function compose(View $view): void
    {
        if (Auth::check()) {
            $notifications = Auth::user()->notifications()->latest()->get();
            $view->with('notifications', $notifications);
        } else {
            $view->with('notifications', collect());
        }
    }
}
