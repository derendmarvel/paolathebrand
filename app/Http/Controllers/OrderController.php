<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Shipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
        $carts = Cart::where('user_id', Auth::user()->id)->get();
        $weight = 0;

        foreach($carts as $cart){
            $weight = $weight + $cart->quantity;
        }

        $weight = $weight * 250;
        return view('checkout', $data, compact('shipments', 'carts', 'weight'));
    }

    public function cekOngkir(Request $request){
        $from = $request->input('from');
        $to = $request->input('to');
        $weight = $request->input('weight');
        $expedition = $request->input('expedition');

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
        // print_r($data['total']);

        $carts = Cart::where('user_id', Auth::user()->id)->get();

        foreach($carts as $cart){
            $cart->delete();
        }

        return view('payment', $data, compact('carts'));
    }

    public function store(Request $request, Order $order){
        $validatedData = $request->validate([
            'foto' => 'image'
        ]);

        $shipment = $request->input('expedition');
        $user = Auth::user()->id;
        $payment = $request->input('proof');
        $price = $request->input('cost');
        $status = "paid";
        $weight = $request->input('weight');

        if($request->input('proof')){
            if($order->payment){
                if(Storage::disk('public')->exists($order->payment)){
                    Storage::disk('public')->delete($order->payment);
                }
            }

            $validatedData['foto'] = $request->file('foto')->store('payment', ['disk' => 'public']);

            Order::create([
                'shipment' => $shipment,
                'user_id' => $user,
                'payment' => $validatedData['foto'],
                'total_price' => $price,
                'status' => $status,
                'order_weight' =>$weight
            ]);
        }

        return redirect()->route('history');
    }

    public function adminView(){
        return view('Admin.orders', [
            "activateOrders" => "active",
            'orders' => Order::all(),
        ]);
    }

    public function visitorView(){
        return view('history', [
            "activateOrders" => "active",
            'orders' => Order::all(),
        ]);
    }
}
