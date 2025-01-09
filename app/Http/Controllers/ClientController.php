<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function client_registration_step1_show()
    {
        return view('clients.register-step1');
    }
}
