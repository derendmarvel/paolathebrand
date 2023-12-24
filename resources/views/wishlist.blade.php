@extends('layouts.template')

@section('title', 'Wishlist')

@section('content')
    <div class="row align-items-center py-5 bg-image-light px-5">
        <div class="row px-5">
            @if($wishlists->isNotEmpty())
                @foreach ($wishlists as $key => $wishlist)
                    @php
                        $delay_pattern = [0, 100, 200];
                        $animation_delay = $delay_pattern[$key % count($delay_pattern)];
                    @endphp
                    <div class="col-md-4 align-items-start" data-aos="fade-up" data-aos-delay="{{$animation_delay}}">
                        <a href="detailProducts/{{$wishlist->produk->nama}}"><img src="{{asset('storage/'.$wishlist->produk->foto)}}" alt="Banner 1" width="280" height="420" class = "shadow-lg my-div p-product"> </a>
                        <div class="row justify-content-start p-product">
                            <div class="col">
                                <div class="pt-4 row"> <a href="detailProducts/{{$wishlist->produk['id']}}" class = "link-underline-light link-secondary col"> <p class ="fs-4 fw-bold red"> {{$wishlist->produk->nama}} ({{$wishlist->produk->warna}}) </p> </a> <a href="/addWishlist" class="col pt-1 ps-like z-2 position-absolute"> <img src="{{ asset('storage/images/Like_button.png') }}" width="25" height="25"> </a> </div>
                                <div class="pb-3 fw-normal fs-6 text-secondary">
                                    <a href="detailProducts/{{$wishlist->produk['id']}}" class="link-underline-light link-secondary"> See in Detail <img src="{{ asset('storage/images/Arrow.png') }}" width="30" height="20"></a>
                                </div>
                                <div class="shadow">
                                    <button id = "minus" class ="mx-4"> - </button>
                                    <span id = "counter" class= "mx-4"> 0 </span>
                                    <button id = "plus" class = "mx-4"> + </button>
                                </div>
                                <form action="/addToCart/{{$wishlist->produk['id']}}" method="POST" id="addToCartForm">
                                    @csrf
                                    @method('post')
                                    <input type="hidden" name="quantity" id="quantityInput" value="0">
                                    <button type="submit" class="btn btn-danger w-100 h-100 p-2 fw-bold" data-aos="fade-up" data-aos-delay="1250">Add to Cart</button>
                                </form>
                                {{-- <div> <a href="addToCart/{{$wishlist->produk['id']}}" class="btn btn-danger"> Add To Cart </a> </div> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h1 class = "fw-bold large text-center py-5"> Oh, no! Your Wishlist is Empty. </h1>
                <a href="/products" class="btn btn-danger py-3"> SHOP NOW </a>
            @endif
        </div>
    </div>
@endsection
