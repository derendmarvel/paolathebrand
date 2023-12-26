<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderProduk;
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

        return view('payment', $data, compact('carts'));
    }

    public function store(Request $request, Order $order){
        $validatedData = $request->validate([
            'shipment' => 'required',
            'user_id' => 'required',
            'payment' => 'image',
            'total_price' => 'required',
            'status' => 'required',
            'order_weight' => 'required'
        ]);

        // $shipment = $request->input('expedition');
        // $user = Auth::user()->id;
        // $payment = $request->input('proof');
        // $price = $request->input('cost');
        // $status = "paid";
        // $weight = $request->input('weight');

        if($request->file('payment')){
            if($order->payment){
                if(Storage::disk('public')->exists($order->payment)){
                    Storage::disk('public')->delete($order->payment);
                }
            }

            $validatedData['payment'] = $request->file('payment')->store('image', ['disk' => 'public']);

            Order::create([
                'shipment' => $validatedData['shipment'],
                'user_id' => $validatedData['user_id'],
                'payment' => $validatedData['payment'],
                'total_price' => $validatedData['total_price'],
                'status' => $validatedData['status'],
                'order_weight' => $validatedData['order_weight']
            ]);
        }

        $orderProduk = OrderProduk::where('order_id', Order::where('user_id', Auth::user()->id)->latest()->first());
        $order = Order::where('user_id', Auth::user()->id)->latest()->first();
        $carts = Cart::where('user_id', Auth::user()->id)->get();

        foreach($carts as $cart){
            OrderProduk::create([
                'order_id' => $order->id,
                'produk_id' => $cart->produk,
                'quantity' => $cart->quantity,
            ]);
            $cart->delete();
        }

        return view('payment', compact('orderProduk'));
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
            'orders' => Order::where('user_id', Auth::user()->id)->get(),
        ]);
    }
}
