<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class NotificationController extends Controller
{
    public function checkNotifications(): JsonResponse
{
    $user = Auth::user();
    $newNotificationsCount = $user ? $user->unreadNotifications()->count() : 0;

    return response()->json(['count' => $newNotificationsCount]);
}
}
