<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Http\Request;

class userRegisterPDFController extends Controller
{
    public function user_register_pdf()
    {
        $pdf = PDF::loadView('pdf.user_register_pdf')
            ->setPaper('a4', 'portrait')
            ->setWarnings(false)
            ->setOptions(['defaultFont' => 'sans-serif'])
            ->setOptions(['isRemoteEnabled' => true])
            ->setOptions(['isHtml5ParserEnabled' => true])
            ->setOptions(['isRemoteEnabled' => true])
            ->setOptions(['isJavaScriptEnabled' => true])
            ->setOptions(['isPhpEnabled' => true])
            ->setOption('margin-top', 0)
            ->setOption('margin-bottom', 0)
            ->setOption('margin-left', 0)
            ->setOption('margin-right', 0);

        return $pdf->stream('user_register.pdf');
    }

}
