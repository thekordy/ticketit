<?php

namespace Kordy\Ticketit\Traits;

use Kordy\Ticketit\Models\Setting;
use Mews\Purifier\Facades\Purifier;

trait Purifiable
{
    /**
     * Returns an array with both filtered and excluded html
     *
     * @param string $rawHtml
     *
     * @return array
     */
    public function purifyHtml($rawHtml)
    {
        $a_html['content']= Purifier::clean($rawHtml, ['HTML.Allowed' => '']);
        $a_html['html']= Purifier::clean($rawHtml, Setting::grab('purifier_config'));

        return $a_html;
    }
}
