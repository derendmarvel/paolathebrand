<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GetApiController extends Controller
{
    public function index(){
        $response = Http::withHeaders([
            'key' => '855813b222b10d90e5d3ec901f0d8220'
        ])->get('https://api.rajaongkir.com/starter/city');

        return $response['rajaongkir']['results'];
    }
}
