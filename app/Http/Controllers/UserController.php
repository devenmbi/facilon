<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function add_new_user_show()
    {
        return view('admin.users.add-new-user');
    }
}
