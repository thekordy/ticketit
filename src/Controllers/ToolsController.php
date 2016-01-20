<?php

namespace Kordy\Ticketit\Controllers;

use App\Http\Controllers\Controller;

class ToolsController extends Controller
{
    /**
     * Sorting array of associative arrays - multiple row sorting using a closure.
     * See also: http://the-art-of-web.com/php/sortarray/.
     *
     * @param array $data input-array
     * @param $field
     * @param string $type
     *
     * @return array
     *
     * @internal param array|string $fields array-keys
     *
     * @license Public Domain
     */
    public function sortArray($data, $field, $type = 'desc')
    {
        uasort($data, function ($a, $b) use ($field, $type) {
            if ($a[$field] == $b[$field]) {
                return 0;
            }
            if ($type == 'desc') {
                return $a[$field] < $b[$field] ? 1 : -1;
            }
            if ($type == 'asc') {
                return $a[$field] > $b[$field] ? 1 : -1;
            }
        });

        return $data;
    }
}
