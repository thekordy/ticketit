<?php

namespace Kordy\Ticketit\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int id
 * @property int ticket_id
 * @property int comment_id
 * @property int uploaded_by_id
 * @property string file_path
 * @property string original_filename
 * @property int bytes
 * @property string mimetype
 * @property Ticket ticket
 *
 * @see Attachment::ticket()
 *
 * @property Comment comment
 *
 * @see Attachment::comment()
 *
 * @property User uploadedBy
 *
 * @see Attachment::uploadedBy()
 */
class Attachment extends Model
{
    protected $table = 'ticketit_attachments';

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }

    public function uploadedBy()
    {
        return $this->belongsTo(User::class, 'uploaded_by_id');
    }
}
