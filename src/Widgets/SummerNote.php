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
            $editor_locale = null;
        } else {
            if (strlen($editor_locale) == 2) {
                switch ($editor_locale) {
                    case 'ca':
                        $editor_locale = 'ca-ES';
                        break;
                    case 'cs':
                        $editor_locale = 'cs-CZ';
                        break;
                    case 'da':
                        $editor_locale = 'da-DK';
                        break;
                    case 'fa':
                        $editor_locale = 'fa-IR';
                        break;
                    case 'he':
                        $editor_locale = 'he-IL';
                        break;
                    case 'ja':
                        $editor_locale = 'ja-JP';
                        break;
                    case 'ko':
                        $editor_locale = 'ko-KR';
                        break;
                    case 'nb':
                        $editor_locale = 'nb-NO';
                        break;
                    case 'sl':
                        $editor_locale = 'sl-SI';
                        break;
                    case 'sr':
                        $editor_locale = 'sr-RS';
                        break;
                    case 'sv':
                        $editor_locale = 'sv-SE';
                        break;
                    case 'uk':
                        $editor_locale = 'uk-UA';
                        break;
                    case 'vi':
                        $editor_locale = 'vi-VN';
                        break;
                    case 'zh':
                        $editor_locale = 'zh-CN';
                        break;
                    default:
                        $editor_locale = $editor_locale . '-' . strtoupper($editor_locale);
                        break;
                }
            }
        }
        return $editor_locale;
    }


}