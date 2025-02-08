<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class userRegisterPDFController extends Controller
{
    public function user_register_pdf()
    {
        $pdf = Pdf::loadView('pdf.client_register_pdf')
            ->setPaper('letter', 'portrait');

        return $pdf->stream('user_register.pdf');
    }

}
