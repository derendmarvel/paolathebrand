@extends('layouts.template')

@section('title', 'Cart')

@section('content')
    <div class="row align-items-center py-5 bg-image-light px-5">
        <div class="row px-5">
            @if($carts->isNotEmpty())
                <h1 class="text-center py-4 red fw-bold"> Your Cart </h1>
                @foreach ($carts as $key => $cart)
                    @php
                        $delay_pattern = [0, 100, 200];
                        $animation_delay = $delay_pattern[$key % count($delay_pattern)];
                    @endphp
                    <div class="col-md-4 align-items-start py-4" data-aos="fade-up" data-aos-delay="{{$animation_delay}}">
                        <img src="{{asset('storage/'.$cart->produk->foto)}}" alt="Banner 1" class = "shadow-lg my-div p-product w-100">
                        <div class="row justify-content-start p-product">
                            <div class="col">
                                <div class="pt-4 pb-2 row"> 
                                    <p class ="fs-4 fw-bold red"> {{$cart->produk->nama}} ({{$cart->produk->warna}}) </p> 
                                    <p class ="fs-6 fw-bold"> Quantity: {{$cart->quantity}} </p> 
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('cart.destroy', $cart) }}" method="POST">
                            @method('delete')    
                            @csrf
                            <button type="submit" class="btn btn-danger w-100 h-100 fw-bold"> Remove from Wishlist </button>
                        </form>
                    </div>
                @endforeach
                <a href="/products" class="btn btn-success text-light py-3 px-5 my-2"> Continue Shopping </a>
                <a href="/checkout" class="btn btn-danger py-3 px-5"> Checkout </a>
            @else
                <div class="row px-5 py-3">
                    <h1 class = "fw-bold large text-center py-5"> Oh, no! Your Cart is Empty. </h1>
                    <a href="/products" class="btn btn-danger py-3"> SHOP NOW </a>
                </div>
            @endif
        </div>
    </div>
@endsection
