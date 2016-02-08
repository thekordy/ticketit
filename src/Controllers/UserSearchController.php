<?php

namespace Kordy\Ticketit\Controllers;

use App\Http\Controllers\Controller;
use Input;
use App\User;

class UserSearchController extends Controller {

    public function userSearch() {

        $keyword = Input::get('q'); 
        // If you wanted to search multiple Terms you could do something like the following
        //$searchRaw = Input::get('q');
        //$keywords = explode(" ", $searchRaw);

        $user_list = User::Where('users.name', 'LIKE', '%' . $keyword . '%');
        
        // This is where you put additional fields to be searched through
        $user_list->orWhere(function ($query) use ($keyword) {
            $query->orWhere('users.email', 'LIKE', '%' . $keyword . '%');
            $query->orWhere('users.last_name', 'LIKE', '%' . $keyword . '%');
            $query->orWhere('users.first_name', 'LIKE', '%' . $keyword . '%');
            $query->orWhere('users.business_name', 'LIKE', '%' . $keyword . '%');
            $query->orWhere('users.phone_1', 'LIKE', '%' . $keyword . '%');
            $query->orWhere('users.phone_2', 'LIKE', '%' . $keyword . '%');
        });
        
        $data = $user_list->get();
        echo json_encode($data);
    }

}
