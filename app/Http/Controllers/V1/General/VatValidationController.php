<?php

namespace Crater\Http\Controllers\V1\General;

use Crater\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DvK\Laravel\Vat\Facades\Rates;
use DvK\Laravel\Vat\Facades\Validator;
use DvK\Laravel\Vat\Facades\Countries;

class VatValidationController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $vatid = $request->vatid;
        // Validate a VAT number by both format and existence
        $vat_check = Validator::validate($vatid); 
        return response()->json([
            'vat_check' => $vat_check
        ]);
    }
}
