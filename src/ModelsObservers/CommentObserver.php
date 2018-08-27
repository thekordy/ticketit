<?php

namespace Kordy\Ticketit\ModelsObservers;

use Kordy\Ticketit\Controllers\NotificationsController;
use Kordy\Ticketit\Models\Comment;
use Kordy\Ticketit\Models\Setting;

class CommentObserver
{
    public function creating()
    {
        Comment::creating(function ($comment) {
            if (Setting::grab('comment_notification')) {
                $notification = new NotificationsController();
                $notification->newComment($comment);
            }
        });

    }
}