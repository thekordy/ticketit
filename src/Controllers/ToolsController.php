<?php
namespace Kordy\Ticketit\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Kordy\Ticketit\Models\Ticket;

class ToolsController extends Controller {

    /**
     * Sorting array of associative arrays - multiple row sorting using a closure.
     * See also: http://the-art-of-web.com/php/sortarray/
     *
     * @param array $data input-array
     * @param $field
     * @param string $type
     * @return array
     * @internal param array|string $fields array-keys
     * @license Public Domain
     */
    public function sortArray( $data, $field, $type = 'desc' ) {
        uasort( $data, function($a, $b) use($field, $type) {
            if($a[$field]==$b[$field]) return 0;
            if ($type == 'desc')
                return $a[$field] < $b[$field]?1:-1;
            if ($type == 'asc')
                return $a[$field] > $b[$field]?1:-1;
        } );
        return $data;
    }

    /**
     * Calculate the date length it took to solve a ticket
     * @param Ticket $ticket
     * @return integer|false
     */
    public function ticketPerformance( Ticket $ticket ) {
        if ($ticket->completed_at == null)
            return false;

        $created = new Carbon($ticket->created_at);
        $completed = new Carbon($ticket->completed_at);
        $length = $created->diff($completed)->days;

        return $length;
    }

    /**
     * Calculate the average date length it took to solve tickets within date period
     * @param $from
     * @param $to
     * @return int
     */
    public function intervalPerformance($from, $to, $cat_id = false ) {
        if ($cat_id) {
            $tickets = Ticket::where('category_id', $cat_id)->whereBetween('completed_at', array($from, $to))->get();
        } else {
            $tickets = Ticket::whereBetween('completed_at', array($from, $to))->get();
        }

        if(empty($tickets->first())) {
            return false;
        }

        $performance_count = 0;
        $counter = 0;
        foreach ($tickets as $ticket) {
            $performance_count += $this->ticketPerformance($ticket);
            $counter++;
        }
        $performance_average = $performance_count / $counter;
        return $performance_average;
    }
}