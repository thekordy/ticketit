<?php

namespace Kordy\Ticketit\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kordy\Ticketit\Models\Agent;
use Kordy\Ticketit\Models\Category;

class FiltersController extends Controller
{
    public function manage(Request $request, $filter, $value)
    {

        //### PENDING: User permissions check or redirect back

        if (in_array($filter, ['agent', 'category', 'owner']) == true) {
            if ($value == 'remove') {
                // Delete filter
                $request->session()->forget('ticketit_filter_'.$filter);
            } else {
                $add = false;

                // Filter checks
                if ($filter == 'agent') {
                    if (Agent::where('id', $value)->count() == 1) {
                        $add = true;
                    }
                }

                if ($filter == 'category') {
                    if (Category::where('id', $value)->count() == 1) {
                        $add = true;
                    }
                }

                if ($filter == 'owner') {
                    if ($value == 'me') {
                        $add = true;
                    }
                }

                // Add filter
                if ($add) {
                    $request->session()->put('ticketit_filter_'.$filter, $value);
                }
            }
        }

        return \Redirect::back();
    }
}
