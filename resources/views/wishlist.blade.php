@extends('layouts.template')

@section('title', 'Wishlist')

@section('content')
    <div class="row align-items-center pt-4">
        @if($wishlists->isNotEmpty())
            <div class="col-md p-4" data-aos="fade-right" data-aos-duration="3000">
                <img src="/images/Paola-BG-Light.png" class ="h-50">
            </div>
        @endif
        <div class="row ps-all-products">
            @if($wishlists->isNotEmpty())
                @foreach ($wishlists as $key => $wishlist)
                    @php
                        $delay_pattern = [0, 100, 200];
                        $animation_delay = $delay_pattern[$key % count($delay_pattern)];
                    @endphp
                    <div class="col align-items-start" data-aos="fade-up" data-aos-delay="{{$animation_delay}}">
                        <a href="detailProducts/{{$wishlist->produk->nama}}"><img src="{{asset($wishlist->produk->foto)}}" alt="Banner 1" width="280" height="420" class = "shadow-lg my-div p-product"> </a>
                        <div class="row justify-content-start p-product">
                            <div class="col">
                                <div class="pt-4 row"> <a href="detailProducts/{{$wishlist->produk['id']}}" class = "link-underline-light link-secondary col"> <p class ="fs-4 fw-bold red"> {{$wishlist->produk->nama}} ({{$wishlist->produk->warna}}) </p> </a> <a href="/addWishlist" class="col pt-1 ps-like z-2 position-absolute"> <img src="/images/Like_button.png" width="25" height="25"> </a> </div>
                                <div class="pb-5 fw-normal fs-6 text-secondary">
                                    <a href="detailProducts/{{$wishlist->produk['id']}}" class="link-underline-light link-secondary"> See in Detail <img src="/images/Arrow.png" width="30" height="20"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h1 class = "fw-bold large text-center pt-5"> Oh, no! Your Wishlist is Empty. </h1>
            @endif
        </div>
    </div>
@endsection
