@extends('layouts.template')

@section('title', 'Wishlist')

@section('content')
    <div class="col align-items-center p-5 bg-image-light">
        <div class="row p-0 p-md-4">
            @if($wishlists->isNotEmpty())
                <h1 class="text-center py-4 red fw-bold"> Your Wishlist </h1>
                @foreach ($wishlists as $key => $wishlist)
                    @php
                        $delay_pattern = [0, 100, 200];
                        $animation_delay = $delay_pattern[$key % count($delay_pattern)];
                    @endphp
                    <div class="col-md-4 align-items-start" data-aos="fade-up" data-aos-delay="{{$animation_delay}}">
                        <a href="detailProducts/{{$wishlist->produk->nama}}"><img src="{{asset('storage/'.$wishlist->produk->foto)}}" alt="Banner 1" class = "shadow-lg my-div p-product w-100"> </a>
                        <div class="row justify-content-start p-product">
                            <div class="col" data-aos="fade-up" data-aos-delay="300">
                                <div class="pt-4 row"> <a href="detailProducts/{{$wishlist->produk['id']}}" class = "link-underline-light link-secondary">
                                <div class= "col-md-10">
                                    <p class ="fs-4 fw-bold red"> {{$wishlist->produk->nama}} ({{$wishlist->produk->warna}}) </p> </a>
                                </div>
                                <div class= "col-md-2">
                                    <form action="{{ route('wishlist.destroy', $wishlist)}}" method="POST" id="addToCartForm">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn w-25">  <img src="{{ asset('storage/images/Like_button.png') }}" width="30" height="30"> </button>
                                    </form>
                                </div>
                                </div>
                                <div class="pb-3 fw-normal fs-6 text-secondary">
                                    <a href="detailProducts/{{$wishlist->produk['id']}}" class="link-underline-light link-secondary"> See in Detail <img src="{{ asset('storage/images/Arrow.png') }}" width="30" height="20"></a>
                                </div>
                                <div class="pb-3">
                                    <button id="minus" class="btn btn-danger me-2"> - </button>
                                    <span id="counter" class="me-2 counter"> 0 </span>
                                    <button id="plus" class="btn btn-success text-light plus"> + </button>
                                </div>

                                <form action="/addToCart/{{$wishlist->produk['id']}}" method="POST" id="addToCartForm">
                                    @method('post')
                                    @csrf
                                    <!-- Update the form identifier to use a unique identifier -->
                                    <input type="hidden" name="quantity" id="quantityInput" value="0">
                                    <button type="submit" class="btn btn-success text-light w-100 h-100 p-2 fw-bold">Add to Cart</button>
                                </form>
                                <form action="{{ route('wishlist.destroy', $wishlist)}}" method="POST" id="addToCartForm">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger w-100 h-100 p-2 fw-bold my-2"> Remove from Wishlist </button>
                                </form>
                                {{-- <div> <a href="addToCart/{{$wishlist->produk['id']}}" class="btn btn-danger"> Add To Cart </a> </div> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-12 px-5 py-3 text-center">
                    <h1 class = "fw-bold large py-5"> Oh, no! Your Wishlist is Empty. </h1>
                    <a href="/products" class="btn btn-danger py-3 w-50"> SHOP NOW </a>
                </div>
            @endif
        </div>
    </div>
    <script>
        $(".plus").click(function () {
            var counter = $(this).parent().find(".counter");
            counter.text(parseInt(counter.text()) + 1);
        });

        $(".minus").click(function () {
            var counter = $(this).parent().find(".counter");
            var x = parseInt(counter.text());
            if (x > 0) {
                counter.text(x - 1);
            }
        });

        $(".addToCartForm").submit(function () {
            var quantityInput = $(this).find(".quantityInput");
            var counter = $(this).find(".counter");
            quantityInput.val(counter.text());
        });
    </script>

@endsection
