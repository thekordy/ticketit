<?php
if (!function_exists('tkTrans')) {
    /**
     * Translate the given message.
     *
     * @param  string  $key
     * @param  array   $replace
     * @param  string  $locale
     * @return \Illuminate\Contracts\Translation\Translator|string|array|null
     */
    function tkTrans($key, $replace = [], $locale = null)
    {
        return trans('ticketit::lang.'.$key, $replace, $locale);
    }
}