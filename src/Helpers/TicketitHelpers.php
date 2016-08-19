<?php

namespace Kordy\Ticketit\Helpers;


class TicketitHelpers
{

    /**
     * Get route name from Ticketit routes configuration
     *
     * @param string $route_config_name
     * @return string
     */
    public function getApiRouteName($route_config_name)
    {
        $routes = config('ticketit.routes');
        return $routes['api'][$route_config_name]['parameters']['as'];
    }

    /**
     * Get route full path from Ticketit routes configuration
     *
     * @param string $route_config_name
     * @param mixed $param (optional)
     * @return string
     */
    public function getApiRoutePath($route_config_name, $param = null)
    {
        $route_name = $this->getApiRouteName($route_config_name);
        if ($param) {
            return route($route_name, $param);
        }
        return route($route_name);
    }
}