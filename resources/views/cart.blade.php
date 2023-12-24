@extends('layouts.template')

@section('title', 'Cart')

@section('content')
    @if($cart->isNotEmpty())
        <a href="checkout" class="btn btn-danger py-3 px-5"> Checkout </a>
    @else
        <h1 class = "fw-bold large text-center py-5"> Oh, no! Your Cart is Empty. </h1>
        <a href="/products" class="btn btn-danger py-3"> SHOP NOW </a>
    @endif
@endsection
