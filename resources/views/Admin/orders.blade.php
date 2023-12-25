@extends('layouts.template')

@section('title', 'Orders')

@section('content')
<div class = "col-md-12 align-items-center p-5 bg-image-light">
    @if($orders->isNotEmpty())
    <h1 class="text-center red py-4"> Orders </h1>
        <table class="table table-striped table-hover px-5">
            <thead>
                <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">User ID</th>
                    <th scope="col">Shipment</th>
                    <th scope="col">Payment</th>
                    <th scope="col">Order Weight</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <th scope="row"> {{ $order->id }} </th>
                        <td> {{ $order->user_id }} </td>
                        <td> {{ $order->shipment }} </td>
                        <td> <img src="{{ asset('storage/'.$order->payment) }}" width="30"> </td>
                        <td> {{ $order->order_weight }} </td>
                        <td> {{ $order->total_price }} </td>
                        <td> {{ $order->status }} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h1 class = "fw-bold large text-center py-5"> No Orders Yet </h1>
    @endif
</div>
@endsection