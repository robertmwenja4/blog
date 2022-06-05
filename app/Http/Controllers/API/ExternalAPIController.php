<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ExternalAPIController extends Controller
{
    public function index(){
        $mon = 'August 2021';
        //https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest
        $response = Http::acceptJson()->get('http://smartmeter.co.ke/read.php?month=',['month'=>$mon]);

        return view('base',['response'=>$response->body()]);
    }
}
