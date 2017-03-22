<?php

namespace Kordy\Ticketit\Controllers;

use App\Http\Controllers\Controller;
use Kordy\Ticketit\Models;
use Kordy\Ticketit\Models\Agent;
use Illuminate\Http\Request;

class FiltersController extends Controller
{
	public function manage(Request $request, $filter, $value){
		if (in_array($filter,array('agent','owner'))==false) abort(404);
		
		if ($value=="remove"){
			// Delete filter
			$request->session()->forget('ticketit_filter_'.$filter);
			
		}else{
			// Filter checks
			if ($filter=="agent"){
				if (Agent::where('id',$value)->count()!=1) abort(404);				
			}
			
			if ($filter=="owner"){
				if ($value!="me") abort(404);
			}
			
			// Add filter
			$request->session()->put('ticketit_filter_'.$filter,$value);			
		}

		return \Redirect::back();
	}	
}
?>