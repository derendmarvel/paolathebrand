@extends('layouts.template')

@section('title', 'Cart')

@section('content')
    <div class="col align-items-center p-5 bg-image-light">
        <div class="row p-0 p-md-4">
            @if($carts->isNotEmpty())
                <h1 class="text-center py-4 red fw-bold"> Your Cart </h1>
                @foreach ($carts as $key => $cart)
                    @php
                        $delay_pattern = [0, 100, 200];
                        $animation_delay = $delay_pattern[$key % count($delay_pattern)];
                    @endphp
                    <div class="col-md-4 align-items-start py-4" data-aos="fade-up" data-aos-delay="{{$animation_delay}}">
                        <img src="{{asset('storage/'.$cart->produk->foto)}}" alt="Banner 1" class = "shadow-lg my-div p-product w-100">
                        <div class="row justify-content-start p-2">
                            <div class="col">
                                <div class="pt-4 pb-2 row header-text"> 
                                    <p class ="fs-4 fw-bold red"> {{$cart->produk->nama}} ({{$cart->produk->warna}}) </p> 
                                    <p class ="fs-6 fw-bold"> Quantity: {{$cart->quantity}} </p>
                                    <form action="{{ route('cart.destroy', $cart) }}" method="POST">
                                        @method('delete')    
                                        @csrf
                                        <button type="submit" class="btn btn-danger w-75 fw-bold"> Remove from Cart </button>
                                    </form> 
                                </div>
                            </div>
                        </div>
                        
                    </div>
                @endforeach
                <a href="/products" class="btn btn-success text-light py-3 px-5 my-2 fw-bold"> Continue Shopping </a>
                <a href="/checkout" class="btn btn-dark py-3 px-5 fw-bold"> Checkout </a>
            @else
                <div class="col-12 px-5 py-3 text-center">
                    <h1 class = "fw-bold large py-5"> Oh, no! Your Cart is Empty. </h1>
                    <a href="/products" class="btn btn-danger py-3 w-50"> SHOP NOW </a>
                </div>
            @endif
        </div>
    </div>
@endsection
