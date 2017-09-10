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

if (!function_exists('tkAdminTrans')) {
    /**
     * Translate the given message.
     *
     * @param  string  $key
     * @param  array   $replace
     * @param  string  $locale
     * @return \Illuminate\Contracts\Translation\Translator|string|array|null
     */
    function tkAdminTrans($key, $replace = [], $locale = null)
    {
        return trans('ticketit::admin.'.$key, $replace, $locale);
    }
}

if (! function_exists('tkView')) {
    /**
     * Get the evaluated view contents for the given view.
     *
     * @param  string  $view
     * @param  array   $data
     * @param  array   $mergeData
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    function tkView($view, $data = [], $mergeData = [])
    {
        $factory = app(ViewFactory::class);

        if (func_num_args() === 0) {
            return $factory;
        }

        return view('ticketit::'.$view, $data, $mergeData);
    }
}

if (! function_exists('tkAction')) {
    /**
     * Generate the URL to a controller action.
     *
     * @param  string  $name
     * @param  array   $parameters
     * @param  bool    $absolute
     * @return string
     */
    function tkAction($name, $parameters = [], $absolute = true)
    {
        return action('\\Kordy\\Ticketit\\Controllers\\'.$name, $parameters, $absolute);
    }
}
