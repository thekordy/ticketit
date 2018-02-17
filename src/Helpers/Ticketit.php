<?php

namespace Kordy\Ticketit\Helpers;

use Kordy\Ticketit\Models\Setting;

class Ticketit
{
    /**
     * @return mixed|null
     */
    public static function getEditorLocal()
    {
        $editor_locale = Setting::grab('summernote_locale');

        if ($editor_locale == 'laravel') {
            $editor_locale = config('app.locale');
        }

        if (substr($editor_locale, 0, 2) == 'en') {
            return null;
        }
        if (strlen($editor_locale) == 2) {
            $map = [
                'ca' => 'ca-ES',
                'cs' => 'cs-CZ',
                'da' => 'da-DK',
                'fa' => 'fa-IR',
                'he' => 'he-IL',
                'ja' => 'ja-JP',
                'ko' => 'ko-KR',
                'nb' => 'nb-NO',
                'sl' => 'sl-SI',
                'sr' => 'sr-RS',
                'sv' => 'sv-SE',
                'uk' => 'uk-UA',
                'vi' => 'vi-VN',
                'zh' => 'zh-CN',
            ];
            $editor_locale = array_get($map, $editor_locale, $editor_locale.'-'.strtoupper($editor_locale));
        }


        return $editor_locale;
    }
}