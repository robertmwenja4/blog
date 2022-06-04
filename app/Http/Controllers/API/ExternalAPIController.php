<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ExternalAPIController extends Controller
{
    public function index(){
        //https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest
        $response = Http::post('https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest');

        return view('base',['response'=>$response]);
    }
}
