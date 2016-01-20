<?php

namespace Kordy\Ticketit\Models;

use Cache;
use Illuminate\Database\Eloquent\Model;
use Kordy\Ticketit\Models\Setting as Table;

class Setting extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['lang', 'slug', 'value', 'default'];
    /**
     * @var string
     */
    protected $table = 'ticketit_settings';

    /**
     * Returns one of three columns by slug.
     * Priority: lang, value, default
     *
     * @param $query
     * @param $slug
     * @return mixed
     */
    public function scopeBySlug($query, $slug)
    {
        return $query->whereSlug($slug);
    }

    /**
     * Grab a setting from cached Settings table by slug.
     * Cache lifetime: 60 minutes
     *
     * @param $slug
     * @return mixed
     */
    public static function grab($slug)
    {
        /**
         * Comment out prior to 0.2 launch. Will cause massive amount
         * of Database queries. Only for adding new settings while
         * in development and testing.
         */
        //Cache::forget('settings');


        $settings = Cache::remember('settings', 60, function () {
            return Table::all();
        });

        $setting = $settings->where('slug', $slug)->first();

        if ($setting->lang) {
            return trans($setting->lang);
        }
        
        if (Setting::is_serialized($setting->value)) {
            $setting = unserialize($setting->value);
        } else {
            $setting = $setting->value;
        }
        return $setting;

    }

    /**
     * Check if a parameter under Value or Default columns
     * is serialized.
     *
     * @param $data
     * @param $strict
     * @return bool
     */
    public static function is_serialized($data, $strict = true)
    {
        // if it isn't a string, it isn't serialized.
        if (!is_string($data)) {
            return false;
        }
        $data = trim($data);
        if ('N;' == $data) {
            return true;
        }
        if (strlen($data) < 4) {
            return false;
        }
        if (':' !== $data[1]) {
            return false;
        }
        if ($strict) {
            $lastc = substr($data, -1);
            if (';' !== $lastc && '}' !== $lastc) {
                return false;
            }
        } else {
            $semicolon = strpos($data, ';');
            $brace = strpos($data, '}');
            // Either ; or } must exist.
            if (false === $semicolon && false === $brace) {
                return false;
            }

            // But neither must be in the first X characters.
            if (false !== $semicolon && $semicolon < 3) {
                return false;
            }

            if (false !== $brace && $brace < 4) {
                return false;
            }

        }
        $token = $data[0];
        switch ($token) {
            case 's':
                if ($strict) {
                    if ('"' !== substr($data, -2, 1)) {
                        return false;
                    }
                } elseif (false === strpos($data, '"')) {
                    return false;
                }
            // or else fall through
            case 'a':
            case 'O':
                return (bool) preg_match("/^{$token}:[0-9]+:/s", $data);
            case 'b':
            case 'i':
            case 'd':
                $end = $strict ? '$' : '';
                return (bool) preg_match("/^{$token}:[0-9.E-]+;$end/", $data);
        }
        return false;
    }

}
