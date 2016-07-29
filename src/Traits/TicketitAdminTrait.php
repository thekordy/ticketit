<?php

namespace Kordy\Ticketit\Traits;

trait TicketitAdminTrait
{
    /**
     * Add admin flag to this.
     *
     * @return $this
     */
    public function addToAdmins()
    {
        $this->ticketit_admin = 1;
        $this->save();

        return $this;
    }

    /**
     * Remove admin flag from this.
     *
     * @return $this
     */
    public function removeFromAdmins()
    {
        $this->ticketit_admin = 0;
        $this->save();

        return $this;
    }

    /**
     * Check admin flag.
     *
     * @return boolean
     */
    public function isAdmin()
    {
        return $this->ticketit_admin == 1;
    }
}
