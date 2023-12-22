@extends('layouts.template')

    @section('title', 'Paola The Brand')

    @section('content')
    <div class="bg-image">
        <div class= "container px-5 pt-3 pb-5" data-aos="fade-right" data-aos-duration="3000">
            <div class="row align-items-center">
                <div class="col ps-home align-items-start text-light">
                    <p class = "fw-medium fs-5"> EST. 2023 </p>
                    <h1 class = "fw-bold large"> Romanticize Your Basic </h1>
                    <p class = "fw-normal fs-5"> Serving you the chicest and timeless pieces for your wardrobe. Made and built with love. </p>
                    @auth
                        @if (Auth::user()->isAdmin())
                            <a href="/produk/create" class="btn btn-danger p-3 me-3 fw-bold"> Add Product </a>
                            <a href="/promo/create" class="btn btn-success p-3 fw-bold"> Add Promo </a>
                        @endif
                        @else
                            <a href="/products" class="btn btn-danger px-5 py-3"> SHOP NOW </a>
                    @endauth
                </div>
                <div class="col pt-2 relative-div" data-aos="fade-left" data-aos-delay="300" data-aos-duration="3000">
                    <img src="/images/Paola-Lookbook-1.png" alt="Banner 1" width="340" height="510" class = "shadow-lg img-home-1">
                    <div class="absolute-div">
                        <img src="/images/Dulcie-Top-Brown.png" alt="Banner 1" width="250" heigth="375" class="shadow-lg img-home-2">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row align-items-center py-5 bg-image text-light">
        <h1 class="text-center red pb-5 pt-3 py-2"> Promo </h1>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                @foreach($promos as $key => $promo)
                <div class="carousel-item active align-items-center pb-4">
                    <img src="{{asset($promo->image)}}" class="d-block mx-auto w-25 h-25">
                    @auth
                        @if (Auth::user()->isAdmin())
                            <form action="/promo/delete/{{$promo['id']}}" method="POST" class="text-center d-block mx-auto pt-4">
                                @method('delete')
                                @csrf
                                <button class='btn btn-danger w-25' id='delete' name='delete'>DELETE</button>
                            </form>
                        @endif
                    @endauth
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="row align-items-center py-4 bg-image-light">
        <h1 class="text-center red pb-5 pt-4 py-2"> Paola Tops </h1>
        <div class="row ps-all-products">
            @foreach ($products as $key => $product)
                    @php
                        $animation_delay = $key * 150;
                    @endphp
                    <div class="col justify-content-center" data-aos="fade-up" data-aos-delay="{{$animation_delay}}">
                        <a href="detailProducts/{{$product['id']}}"><img src="{{asset($product->foto)}}" alt="Banner 1" width="280" height="420" class = "shadow-lg my-div home-product"> </a>
                        <div class="row align-items-center home-product">
                            <div class="col">
                                <div class="pt-4"> <a href="detailProducts/{{$product['id']}}" class = "link-underline-light link-secondary"> <p class ="fs-4 fw-bold red"> {{$product->nama}} ({{$product->warna}}) </p> </a> </div>
                                <div class="pb-5 fw-normal fs-6 text-secondary">
                                    <a href="detailProducts/{{$product['id']}}" class="link-underline-light link-secondary"> See in Detail </a>
                                </div>
                            </div>
                            <div class="col">
                                <a href="detailProducts/{{$product['id']}}"><img src="/images/Arrow.png" width="42" height="35"> </a>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>

    <div class="row align-items-center py-4 bg-image text-light">
        <a href="/products" class="link-light link-underline link-underline-opacity-0"><h1 class="text-center pb-5 pt-4 py-2"> Better in Black </h1></a>
        <div class="row ps-all-products">
            @foreach ($products2 as $key => $product)
                    @php
                        $animation_delay = $key * 150;
                    @endphp
                    <div class="col justify-content-center" data-aos="fade-up" data-aos-delay="{{$animation_delay}}">
                        <a href="detailProducts/{{$product['id']}}"><img src="{{asset($product->foto)}}" alt="Banner 1" width="280" height="420" class = "shadow-lg my-div home-product"> </a>
                        <div class="row align-items-center home-product">
                            <div class="col">
                                <div class="pt-4"> <a href="detailProducts/{{$product['id']}}" class = "link-underline-light link-light"> <p class ="fs-4 fw-bold"> {{$product->nama}} ({{$product->warna}}) </p> </a> </div>
                                <div class="pb-5 fw-normal fs-6 text-light">
                                    <a href="detailProducts/{{$product['id']}}" class="link-underline-light link-light"> See in Detail </a>
                                </div>
                            </div>
                            <div class="col">
                                <a href="detailProducts/{{$product['id']}}"><img src="/images/Arrow.png" width="42" height="35"> </a>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
    @endsection
