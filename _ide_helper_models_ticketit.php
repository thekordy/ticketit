<?php
/**
 * An helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */

namespace Kordy\Ticketit\Models{
/**
 * Kordy\Ticketit\Models\TicketitCategory
 *
 * @property integer $id
 * @property string $name
 * @property string $color
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $agents
 * @property-read \Illuminate\Database\Eloquent\Collection|\Kordy\Ticketit\Models\TicketitTicket[] $tickets
 * @method static \Illuminate\Database\Query\Builder|\Kordy\Ticketit\Models\TicketitCategory whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Kordy\Ticketit\Models\TicketitCategory whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Kordy\Ticketit\Models\TicketitCategory whereColor($value)
 */
	class TicketitCategory extends \Eloquent {}
}

namespace Kordy\Ticketit\Models{
/**
 * Kordy\Ticketit\Models\TicketitComment
 *
 * @property integer $id
 * @property string $content
 * @property integer $commentable_id
 * @property string $commentable_type
 * @property integer $ticket_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Kordy\Ticketit\Models\TicketitTicket $ticket
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $commentable
 * @method static \Illuminate\Database\Query\Builder|\Kordy\Ticketit\Models\TicketitComment whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Kordy\Ticketit\Models\TicketitComment whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\Kordy\Ticketit\Models\TicketitComment whereCommentableId($value)
 * @method static \Illuminate\Database\Query\Builder|\Kordy\Ticketit\Models\TicketitComment whereCommentableType($value)
 * @method static \Illuminate\Database\Query\Builder|\Kordy\Ticketit\Models\TicketitComment whereTicketId($value)
 * @method static \Illuminate\Database\Query\Builder|\Kordy\Ticketit\Models\TicketitComment whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Kordy\Ticketit\Models\TicketitComment whereUpdatedAt($value)
 */
	class TicketitComment extends \Eloquent {}
}

namespace Kordy\Ticketit\Models{
/**
 * Kordy\Ticketit\Models\TicketitTicket
 *
 * @property integer $id
 * @property string $subject
 * @property string $content
 * @property integer $ticketable_id
 * @property string $ticketable_type
 * @property integer $agent_id
 * @property integer $status_id
 * @property integer $priority_id
 * @property integer $category_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $ticketable
 * @property-read \App\User $agent
 * @property-read \Kordy\Ticketit\Models\TicketitStatus $status
 * @property-read \Kordy\Ticketit\Models\TicketitPriority $priority
 * @property-read \Kordy\Ticketit\Models\TicketitCategory $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\Kordy\Ticketit\Models\TicketitComment[] $comments
 * @method static \Illuminate\Database\Query\Builder|\Kordy\Ticketit\Models\TicketitTicket whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Kordy\Ticketit\Models\TicketitTicket whereSubject($value)
 * @method static \Illuminate\Database\Query\Builder|\Kordy\Ticketit\Models\TicketitTicket whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\Kordy\Ticketit\Models\TicketitTicket whereTicketableId($value)
 * @method static \Illuminate\Database\Query\Builder|\Kordy\Ticketit\Models\TicketitTicket whereTicketableType($value)
 * @method static \Illuminate\Database\Query\Builder|\Kordy\Ticketit\Models\TicketitTicket whereAgentId($value)
 * @method static \Illuminate\Database\Query\Builder|\Kordy\Ticketit\Models\TicketitTicket whereStatusId($value)
 * @method static \Illuminate\Database\Query\Builder|\Kordy\Ticketit\Models\TicketitTicket wherePriorityId($value)
 * @method static \Illuminate\Database\Query\Builder|\Kordy\Ticketit\Models\TicketitTicket whereCategoryId($value)
 * @method static \Illuminate\Database\Query\Builder|\Kordy\Ticketit\Models\TicketitTicket whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Kordy\Ticketit\Models\TicketitTicket whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Kordy\Ticketit\Models\TicketitTicket byAgent($agent_id)
 * @method static \Illuminate\Database\Query\Builder|\Kordy\Ticketit\Models\TicketitTicket byStatus($status_id)
 * @method static \Illuminate\Database\Query\Builder|\Kordy\Ticketit\Models\TicketitTicket byPriority($priority_id)
 * @method static \Illuminate\Database\Query\Builder|\Kordy\Ticketit\Models\TicketitTicket byCategory($category_id)
 */
	class TicketitTicket extends \Eloquent {}
}

namespace Kordy\Ticketit\Models{
/**
 * Kordy\Ticketit\Models\TicketitPriority
 *
 * @property integer $id
 * @property string $name
 * @property string $color
 * @property-read \Illuminate\Database\Eloquent\Collection|\Kordy\Ticketit\Models\TicketitTicket[] $tickets
 * @method static \Illuminate\Database\Query\Builder|\Kordy\Ticketit\Models\TicketitPriority whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Kordy\Ticketit\Models\TicketitPriority whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Kordy\Ticketit\Models\TicketitPriority whereColor($value)
 */
	class TicketitPriority extends \Eloquent {}
}

namespace Kordy\Ticketit\Models{
/**
 * Kordy\Ticketit\Models\TicketitStatus
 *
 * @property integer $id
 * @property string $name
 * @property string $color
 * @property-read \Illuminate\Database\Eloquent\Collection|\Kordy\Ticketit\Models\TicketitTicket[] $tickets
 * @method static \Illuminate\Database\Query\Builder|\Kordy\Ticketit\Models\TicketitStatus whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Kordy\Ticketit\Models\TicketitStatus whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Kordy\Ticketit\Models\TicketitStatus whereColor($value)
 */
	class TicketitStatus extends \Eloquent {}
}

