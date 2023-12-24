@extends('layouts.template')

@section('title', 'Wishlist')

@section('content')
    <div class="row align-items-center py-5 bg-image-light px-5 mb-4">
        <div class="row px-5">
            @if($wishlists->isNotEmpty())
                <h1 class="text-center pb-5 pt-4 py-2 red fw-bold"> Your Wishlist </h1>
                @foreach ($wishlists as $key => $wishlist)
                    @php
                        $delay_pattern = [0, 100, 200];
                        $animation_delay = $delay_pattern[$key % count($delay_pattern)];
                    @endphp
                    <div class="col-md-4 align-items-start" data-aos="fade-up" data-aos-delay="{{$animation_delay}}">
                        <a href="detailProducts/{{$wishlist->produk->nama}}"><img src="{{asset('storage/'.$wishlist->produk->foto)}}" alt="Banner 1" class = "shadow-lg my-div p-product w-100"> </a>
                        <div class="row justify-content-start p-product">
                            <div class="col" data-aos="fade-up" data-aos-delay="300">
                                <div class="pt-4 row"> <a href="detailProducts/{{$wishlist->produk['id']}}" class = "link-underline-light link-secondary col"> 
                                    <p class ="fs-4 fw-bold red"> {{$wishlist->produk->nama}} ({{$wishlist->produk->warna}}) </p> </a> 
                                    <a href="/addWishlist" class="col pt-1 ps-like z-2 position-absolute align-items-end text-end"> <img src="{{ asset('storage/images/Like_button.png') }}" width="25" height="25"> </a> 
                                </div>
                                <div class="pb-3 fw-normal fs-6 text-secondary">
                                    <a href="detailProducts/{{$wishlist->produk['id']}}" class="link-underline-light link-secondary"> See in Detail <img src="{{ asset('storage/images/Arrow.png') }}" width="30" height="20"></a>
                                </div>
                                <div class="pb-3">
                                    <button id = "minus" class ="btn btn-danger me-2"> - </button>
                                    <span id = "counter" class= "me-2"> 0 </span>
                                    <button id = "plus" class = "btn btn-success text-light"> + </button>
                                </div>
                                <form action="/addToCart/{{$wishlist->produk['id']}}" method="POST" id="addToCartForm">
                                    @csrf
                                    @method('post')
                                    <input type="hidden" name="quantity" id="quantityInput" value="0">
                                    <button type="submit" class="btn btn-danger w-100 h-100 p-2 fw-bold">Add to Cart</button>
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
    <script>
            var x = $("#counter").text();

            $("#plus").click(function () {
                $("#counter").text(++x);
            });

            $("#minus").click(function () {
                if (x <= 0) {
                    $("#counter").text(0);
                } else {
                    $("#counter").text(--x);
                }
            });

            $("#addToCartForm").submit(function () {
                $("#quantityInput").val(x);
            });
        </script>
@endsection
