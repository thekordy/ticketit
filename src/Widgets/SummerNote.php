<?php

namespace Kordy\Ticketit\Widgets;

use Kordy\Ticketit\Models\Setting;

class SummerNote
{
    public $template = 'ticketit::tickets.partials.summernote';

    public $cacheLifeTime = 0;

    public $cacheTags = [];

    public function data($codemirror_enabled, $codemirror_theme, $editor_enabled)
    {
        $editor_locale = $this->_getEditorLocal();
        $editor_options = file_get_contents(base_path(Setting::grab('summernote_options_json_file')));

        return compact('editor_locale', 'editor_options', 'codemirror_theme', 'codemirror_enabled', 'editor_enabled');
    }

    /**
     * @return mixed|null|string
     */
    private function _getEditorLocal()
    {
        $editor_locale = Setting::grab('summernote_locale');

        if ($editor_locale == 'laravel') {
            $editor_locale = config('app.locale');
        }

        if (substr($editor_locale, 0, 2) == 'en') {
            return null;
        }

        if (strlen($editor_locale) == 2) {
            $t = [
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

            $editor_locale = array_get($t, $editor_locale, $editor_locale.'-'.strtoupper($editor_locale));
        }

        return $editor_locale;
    }
}
