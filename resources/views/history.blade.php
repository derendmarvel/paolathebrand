@extends('layouts.template')

@section('title', 'Orders')

@section('content')
<div class = "col-12 align-items-center p-5 bg-image-light">
    <div class = "row p-0 p-md-4">
    @if($orders->isNotEmpty())
    <h1 class="text-center red py-4"> Orders </h1>
        <table class="table table-striped table-hover px-5">
            <thead>
                <tr>
                    <th scope="col">Shipment</th>
                    <th scope="col">Order Weight</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <th scope="row"> {{ $order->shipment }} </th>
                        <td> {{ $order->order_weight }} </td>
                        <td> {{ $order->total_price }} </td>
                        <td> {{ $order->status }} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="col-12 px-5 py-3 text-center">
            <h1 class = "fw-bold large text-center py-5"> No Orders Yet </h1>
            <a href="/products" class="btn btn-danger py-3 w-50"> SHOP NOW </a>
        </div>
    @endif
    </div>
</div>
@endsection
