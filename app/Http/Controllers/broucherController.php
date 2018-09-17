<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


use App\Http\Requests;


class broucherController extends Controller
{


    public function brouchure()
    {
        $myFile = public_path("BCPS.pdf");
        $headers = ['Content-Type: uploads/pdf'];
        $newName = 'itsolutionstuff-pdf-file-'.time().'.pdf';
        <a href="{{ URL::to( 'public/uploads/' . $filename)  }}" target="_blank">{{ $filename }}</a>


        return response()->download($myFile, $newName, $headers);
    }
}
}
