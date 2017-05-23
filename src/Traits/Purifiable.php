<?php

namespace Kordy\Ticketit\Traits;

use Kordy\Ticketit\Models\Setting;
use Mews\Purifier\Facades\Purifier;

trait Purifiable
{
    /**
     * Returns an array with both filtered and excluded html.
     *
     * @param string $rawHtml
     *
     * @return array
     */
    public function purifyHtml($rawHtml)
    {
        $a_html['content'] = trim(Purifier::clean($rawHtml, ['HTML.Allowed' => '']), chr(0xC2).chr(0xA0)." \t\n\r\0\x0B");
        $a_html['html'] = trim(Purifier::clean($rawHtml, Setting::grab('purifier_config')), chr(0xC2).chr(0xA0)." \t\n\r\0\x0B");

        return $a_html;
    }
}
