<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Shipment;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;

class OrderController extends Controller
{
    public $api_key = "855813b222b10d90e5d3ec901f0d8220";

    public function index()
    {
        $curl = curl_init();

        curl_setopt_array($curl,
            array(
                CURLOPT_URL => "https://api.rajaongkir.com/starter/city",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                    "key: ".$this->api_key
                )
            )
        );

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            // echo "cURL Error #:" . $err;
            $data['city'] = array('error' => true);
        } else {
            // echo $response;
            $data['city'] = json_decode($response);
        }
        // print_r($data['city']);

        $shipments = Shipment::all();
        return view('checkout', $data, compact('shipments'));
    }

    public function cekOngkir($from, $to, $weight, $expedition){
        $curl = curl_init();

        curl_setopt_array($curl,
            array(
                CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => "origin=".$from."&destination=".$to."&weight=".$weight."&courier=".$expedition,
                CURLOPT_HTTPHEADER => array(
                    "content-type: application/x-www-form-urlencoded",
                    "key: ".$this->api_key
                )
            )
        );

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            // echo "cURL Error #:" . $err;
            $data['total'] = array('error' => true);
        } else {
            // echo $response;
            $data['total'] = json_decode($response);
        }

        return view('payment', $data);
    }
}
