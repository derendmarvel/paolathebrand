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
                        <a href="/detailProducts/{{$wishlist->produk->id}}"><img src="{{asset('storage/'.$wishlist->produk->foto)}}" alt="Banner 1" class = "shadow-lg my-div p-product w-100"> </a>
                        <div class="row justify-content-start">
                            <div class="col" data-aos="fade-up" data-aos-delay="300">
                                <div class="pt-4 row"> <a href="/detailProducts/{{$wishlist->produk['id']}}" class = "link-underline-light link-secondary">
                                <div class= "col-8">
                                    <p class ="fs-4 fw-bold red"> {{$wishlist->produk->nama}} ({{$wishlist->produk->warna}}) </p> </a>
                                </div>
                                <div class= "col-4 text-end pe-4">
                                    <form action="{{ route('wishlist.destroy', $wishlist)}}" method="POST" id="addToCartForm">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn w-25">  <img src="{{ asset('storage/images/Like_button.png') }}" width="30" height="30"> </button>
                                    </form>
                                </div>
                                </div>
                                <div class="pb-3 fw-normal fs-6 text-secondary">
                                    <a href="/detailProducts/{{$wishlist->produk['id']}}" class="link-underline-light link-secondary"> See in Detail <img src="{{ asset('storage/images/Arrow.png') }}" width="30" height="20"></a>
                                </div>
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
@endsection
