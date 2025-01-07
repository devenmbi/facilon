<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function client_registration_step1_show()
    {
        return view('client.registration-step1');
    }
}
