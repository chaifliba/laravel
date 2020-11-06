<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;


class PdfController extends Controller
{
    public function create()
    {
    	$data = [
            'senderlastName' => 'Laravel 7',
            'senderphoneNumber' => '0999699'
        ];
        $pdf = PDF::loadView('fullform', $data);
  
        return $pdf->download('Nicesnippets.pdf');
    }

    public function index()
    {
        return view('pdf');
    }
}
