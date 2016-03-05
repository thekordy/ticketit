<?php

namespace Kordy\Ticketit\Helpers;

use Illuminate\Routing\Router;

class LaravelVersion
{
    /**
     * Returns the version of the current Laravel install.
     *
     * @return string version
     */
    public static function getLaravelVersion()
    {
        $laravel = app();

        return $laravel::VERSION;
    }

    /**
     * Compare laravel version against a version number using a custom operator.
     *
     * @param string $operator One of these: <, lt, <=, le, >, gt, >=, ge, ==, =, eq, !=, <>, ne
     * @param string $version
     *
     * @return bool
     */
    public static function compare($operator, $version)
    {
        return version_compare(static::getLaravelVersion(), $version, $operator);
    }

    /**
     * Checks if the current install is older than the given version number.
     *
     * @param string $version
     *
     * @return bool
     */
    public static function lt($version)
    {
        return static::compare('<', $version);
    }

    /**
     * Checks if the current install is newer than the given version number.
     *
     * @param string $version
     *
     * @return bool
     */
    public static function gt($version)
    {
        return static::compare('>', $version);
    }

    /**
     * Checks if the current install is minimum as new as required.
     *
     * @param string $version
     *
     * @return bool
     */
    public static function min($version)
    {
        return static::compare('>=', $version);
    }

    /**
     * Checks if the current install is maximum as new as required.
     *
     * @param string $version
     *
     * @return bool
     */
    public static function max($version)
    {
        return static::compare('<=', $version);
    }

    /**
     * Returns the needed auth middleware according to the version.
     *
     * @return array
     */
    public static function authMiddleware()
    {
        if (static::min('5.2') && app(Router::class)->resolveMiddlewareClassName('web') != 'web') {
            return ['web', 'auth'];
        }

        return ['auth'];
    }
}
