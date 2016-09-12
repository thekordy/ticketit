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
        $ticket = $this->getModelFromRequest($model, 'TicketitTicket');

        return $user instanceof $ticket->ticketable && $user->getKey() == $ticket->ticketable->getKey();
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

        $ticket = $this->getModelFromRequest($model, 'TicketitTicket');

        return $user instanceof $agent_instance && $user->getKey() == $ticket->agent->getKey();
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

        $ticket = $this->getModelFromRequest($model, 'TicketitTicket');

        if ($user instanceof $agent_instance) {
            $cat_key = $ticket->category->getKey();
            $cat_keyName = $ticket->category->getKeyName();

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

        $category = $this->getModelFromRequest($model, 'TicketitCategory');

        if ($user instanceof $agent_instance) {
            $cat_key = $category->getKey();
            $cat_keyName = $category->getKeyName();

            return $user->categories()->where($cat_keyName, $cat_key)->first() !== null;
        }

        return false;
    }

    /**
     * Check if user is isCategoryAdmin.
     *
     * @param $user
     * @param string|null $ability (optional)
     * @param object|null $model   (optional)
     *
     * @return bool
     */
    public function isCategoryAdmin($user, $ability = null, $model = null)
    {
        $agent_instance = app('TicketitAgent');

        $category = $this->getModelFromRequest($model, 'TicketitCategory');

        if ($user instanceof $agent_instance) {
            return $category->admin_id == $user->getKey();
        }

        return false;
    }

    /**
     * Check if user is isTicketCategoryAdmin.
     *
     * @param $user
     * @param string|null $ability (optional)
     * @param object|null $model   (optional)
     *
     * @return bool
     */
    public function isTicketCategoryAdmin($user, $ability = null, $model = null)
    {
        $agent_instance = app('TicketitAgent');

        $ticket = $this->getModelFromRequest($model, 'TicketitTicket');

        if ($user instanceof $agent_instance) {
            return $ticket->category->admin_id == $user->getKey();
        }

        return false;
    }

    /**
     * Check passed model if null, then try to get it from the request route parameters.
     *
     * @param $model
     * @param $model_name
     *
     * @return mixed
     */
    private function getModelFromRequest($model, $model_name)
    {
        if ($model === null || $model instanceof Request) {
            $model_keyname = app($model_name)->getKeyName();
            $model_id = request()->route($model_keyname);
            $model = app($model_name)->findOrFail($model_id);

            return $model;
        }

        return $model;
    }
}
