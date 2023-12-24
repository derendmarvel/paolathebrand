@extends('layouts.template')

@section('title', 'Cart')

@section('content')
    @if($cart->isNotEmpty())
        <div class="row align-items-center py-5 bg-image-light px-5">
            <div class="row px-5">
                @foreach ($cart as $key => $cart)
                    @php
                        $delay_pattern = [0, 100, 200];
                        $animation_delay = $delay_pattern[$key % count($delay_pattern)];
                    @endphp
                    <div class="col-md-4 align-items-start" data-aos="fade-up" data-aos-delay="{{$animation_delay}}">
                        <a href="detailProducts/{{$cart->produk->nama}}"><img src="{{asset('storage/'.$cart->produk->foto)}}" alt="Banner 1" width="280" height="420" class = "shadow-lg my-div p-product"> </a>
                        <div class="row justify-content-start p-product">
                            <div class="col">
                                <div class="pt-4 row"> <a href="detailProducts/{{$cart->produk['id']}}" class = "link-underline-light link-secondary col"> <p class ="fs-4 fw-bold"> {{$cart->quantity}} </p> <p class ="fs-4 fw-bold red"> {{$cart->produk->nama}} ({{$cart->produk->warna}}) </p> </a> </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <a href="checkout" class="btn btn-danger py-3 px-5"> Checkout </a>
    @else
    <div class="row px-5 py-3">
        <h1 class = "fw-bold large text-center py-5"> Oh, no! Your Cart is Empty. </h1>
        <a href="/products" class="btn btn-danger py-3"> SHOP NOW </a>
    </div>
    @endif
@endsection
