<?php

namespace Kordy\Ticketit\Services;

use Exception;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Log;

class AbilitiesRegistrar
{
    /**
     * define the configured abilities in Config/acl.php
     *
     * @param GateContract $gate
     * @return bool
     */
    public function ticketitAbilities(GateContract $gate)
    {
        try {

            // abilities defined in Config/acl.php
            $abilities = config('ticketit.acl.abilities');

            foreach ($abilities as $ability => $polices) {
                $gate->define($ability, function ($user, $model) use ($polices) {
                    return $this->applyPolices($user, $model, $polices);
                });
            }
        } catch (Exception $e) {
            Log::alert('Could not register abilities .. '.$e);

            return false;
        }
    }

    /**
     * Return final result of ability polices
     *
     * @param $user
     * @param $model
     * @param $polices
     * @return bool
     */
    private function applyPolices($user, $model, $polices)
    {
        $result = true;
        if (!empty($polices)) {
            foreach ($polices as $policy => $operator) {
                // if policy has an operator
                if (!is_integer($policy)) {
                    list($class, $method) = explode('@', $policy);
                    $policy_method = app($class)->$method($user, $model);
                    if ($operator == 'or' || $operator == '||') {
                        $result = $result || $policy_method;
                    } else {
                        $result = $result && $policy_method;
                    }
                    // policy has no operator
                } else {
                    list($class, $method) = explode('@', $policy);
                    $result = $result && app($class)->$method($user, $model);
                }
            }
        }
        return $result;
    }
}