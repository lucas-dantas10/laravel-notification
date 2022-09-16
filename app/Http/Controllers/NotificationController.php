<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function notifications(Request $request)
    {
        $notifications = $request->user()->notifications;

        return response()->json($notifications);
    }

    public function markAsRead(Request $request)
    {
        $notification = $request->user()
                                    ->notifications()
                                    ->where('id', $request->id)
                                    ->first();

        if ($notification) {
            $notification->markAsRead();
        }
    }
}
