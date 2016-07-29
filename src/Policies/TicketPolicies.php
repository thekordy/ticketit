<?php

namespace Kordy\Ticketit\Policies;

use Illuminate\Http\Request;

class TicketPolicies
{
    /**
     * Check if user is admin.
     *
     * @param \TicketitAdmin $user
     *
     * @return bool
     */
    public function isAdministrator($user)
    {
        $admin_instance = app('TicketitAdmin');

        return $user instanceof $admin_instance && $user->isAdmin();
    }

    /**
     * Check if authenticated Ticketit user.
     *
     * @param \TicketitUser $user
     *
     * @return bool
     */
    public function isUser($user)
    {
        $user_instance = app('TicketitUser');

        return $user instanceof $user_instance;
    }

    /**
     * Check if user is the ticket creator.
     *
     * @param $user
     * @param string|null $ability (optional)
     * @param object|null $model   (optional)
     *
     * @return bool
     */
    public function isOwner($user, $ability = null, $model = null)
    {
        $model = $this->getTicketFromRequest($model);

        return $user instanceof $model->ticketable && $user->getKey() == $model->ticketable->getKey();
    }

    /**
     * Check if user is isAgent.
     *
     * @param \TicketitAgent $user
     *
     * @return bool
     */
    public function isAgent($user)
    {
        $agent_instance = app('TicketitAgent');

        return $user instanceof $agent_instance && $user->isAgent();
    }

    /**
     * Check if user is the assigned agent of a ticket.
     *
     * @param $user
     * @param string|null $ability (optional)
     * @param object|null $model   (optional)
     *
     * @return bool
     */
    public function isAssigned($user, $ability = null, $model = null)
    {
        $agent_instance = app('TicketitAgent');

        $model = $this->getTicketFromRequest($model);

        return $user instanceof $agent_instance && $user->getKey() == $model->agent->getKey();
    }

    /**
     * Check if user is an agent in same category of the ticket.
     *
     * @param $user
     * @param string|null $ability (optional)
     * @param object|null $model   (optional)
     *
     * @return bool
     */
    public function isAssignedTeam($user, $ability = null, $model = null)
    {
        $agent_instance = app('TicketitAgent');

        $model = $this->getTicketFromRequest($model);

        if ($user instanceof $agent_instance) {
            $cat_key = $model->category->getKey();
            $cat_keyName = $model->category->getKeyName();

            return $user->categories()->where($cat_keyName, $cat_key)->first() !== null;
        }

        return false;
    }

    /**
     * Check if user is isCategoryTeam.
     *
     * @param $user
     * @param string|null $ability (optional)
     * @param object|null $model   (optional)
     *
     * @return bool
     */
    public function isCategoryTeam($user, $ability = null, $model = null)
    {
        $agent_instance = app('TicketitAgent');

        $model = $this->getCategoryFromRequest($model);

        if ($user instanceof $agent_instance) {
            $cat_key = $model->getKey();
            $cat_keyName = $model->getKeyName();

            return $user->categories()->where($cat_keyName, $cat_key)->first() !== null;
        }

        return false;
    }

    /**
     * @param $model
     *
     * @return mixed
     */
    private function getTicketFromRequest($model)
    {
        if ($model === null || $model instanceof Request) {
            $ticket_keyname = app('TicketitTicket')->getKeyName();
            $ticket_id = request()->input($ticket_keyname);
            $model = \TicketitTicket::findOrFail($ticket_id);

            return $model;
        }

        return $model;
    }

    /**
     * @param $model
     *
     * @return mixed
     */
    private function getCategoryFromRequest($model)
    {
        if ($model === null || $model instanceof Request) {
            $category_keyname = app('TicketitCategory')->getKeyName();
            $category_id = request()->input($category_keyname);
            $model = \TicketitCategory::findOrFail($category_id);

            return $model;
        }

        return $model;
    }
}
