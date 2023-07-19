<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\PodcastNotification;
use Illuminate\Support\Facades\Notification;

class SendNotification extends Controller
{
    public function sendNotification()
    {
        
        $user = User::find(1);

        Notification::send($user,new PodcastNotification());

        return 'Notification sent successfully';
    }
}
