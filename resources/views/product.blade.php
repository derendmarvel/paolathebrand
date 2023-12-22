@extends('layouts.template')

@section('title', 'Products')

@section('content')
    <div class="container-fluid">
        <div class="row align-items-center bg-image-long text-light py-5 ps-product">
            <div class="col align-items-start pb-5" data-aos="fade-right" data-aos-duration="3000">

            @if(!Auth::user())
            <h1 class = "fw-bold large"> Find Your </h1>
            <h1 class = "fw-bold large"> Style </h1>
            @endif

            @auth
                @if (Auth::user()->isAdmin())
                    <h1 class = "fw-bold large mb-3"> Paola's Products </h1>
                    <a href="/produk/create" class="btn btn-danger p-3 me-3 fw-bold"> Add Product </a>
                    <a href="/category/create" class="btn btn-success p-3 fw-bold"> Add Kategori </a>
                @else
                    <h1 class = "fw-bold large"> Find Your </h1>
                    <h1 class = "fw-bold large"> Style </h1>
                @endif
            @endauth
            </div>
            <div class="col">
                <div class="carousel-container" data-aos="fade-left" data-aos-duration="3000">
                    @foreach ($products as $key => $product)
                        @if ($key < 3)
                            <div class="card">
                                <a href="detailProducts/{{$product['id']}}"><img src="{{asset($product->foto)}}" alt="Banner 1" width="280" height="420" class = "shadow-lg my-div card-size"> </a>
                            </div>
                        @else
                            @break
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row align-items-center py-4 bg-image-light">
            <h1 class = "text-center red pb-5 pt-4 py-2"> All Products </h1>
            <div class="row ps-all-products">
                @foreach ($products as $key => $product)
                    @php
                        $delay_pattern = [0, 100, 200];
                        $animation_delay = $delay_pattern[$key % count($delay_pattern)];
                    @endphp
                    <div class="col align-items-start" data-aos="fade-up" data-aos-delay="{{$animation_delay}}">
                        <a href="detailProducts/{{$product['id']}}"><img src="{{asset($product->foto)}}" alt="Banner 1" width="280" height="420" class = "shadow-lg my-div p-product"> </a>
                        <div class="row justify-content-start p-product">
                            <div class="col">
                                <div class="pt-4 row"> <a href="detailProducts/{{$product['id']}}" class = "link-underline-light link-secondary col"> <p class ="fs-4 fw-bold red"> {{$product->nama}} ({{$product->warna}}) </p> </a> <a href="addWishlist/{{$product['id']}}" class="col pt-1 ps-like z-2 position-absolute"> <img src="/images/Unlike_button.png" width="25" height="25"> </a> </div>
                                <div class="pb-5 fw-normal fs-6 text-secondary">
                                    <a href="detailProducts/{{$product['id']}}" class="link-underline-light link-secondary"> See in Detail <img src="/images/Arrow.png" width="30" height="20"></a>
                                </div>
                            </div>
                            <!-- <div class="col ps-4 pt-3">
                                <img src="/images/Arrow.png" width="30" height="20">
                            </div>  -->
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
