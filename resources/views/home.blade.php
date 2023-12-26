@extends('layouts.template')

    @section('title', 'Paola The Brand')

    @section('content')
    <div class="bg-image-long px-md-5">
        <div class= "px-5 py-3" data-aos="fade-right" data-aos-duration="3000">
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-6 px-4 header-text text-light order-lg-1 order-2">
                <p class="fw-medium fs-5 fs-sm-1">EST. 2023</p>
                <h1 class="fw-bold large">Romanticize Your Basic</h1>
                <p class="fw-normal small py-2">Serving you the chicest and timeless pieces for your wardrobe. Made and built with love.</p>
                @auth
                    @if (Auth::user()->isAdmin())
                        <a href="/produk/create" class="btn btn-danger p-3 me-3 fw-bold">Add Product</a>
                        <a href="/promo/create" class="btn btn-success p-3 fw-bold">Add Promo</a>
                    @elseif (Auth::user()->isVisitor())
                        <a href="/products" class="btn btn-danger px-5 py-3">SHOP NOW</a>
                    @endif
                @else
                    <a href="{{ route('login') }}" class="btn btn-danger px-5 py-3">SHOP NOW</a>
                @endauth
            </div>
            <div class="col-sm-12 col-md-6 order-lg-2 order-1" data-aos="fade-left" data-aos-delay="300" data-aos-duration="3000">
                <img src="{{ asset('storage/images/Paola-Header-Image-Compressed.png') }}" alt="Banner 1" class="img-fluid w-100">
            </div>
        </div>
        </div>
        <div class="row align-items-center py-5 text-light" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
        <h1 class="text-center red py-4"> Promo </h1>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                @foreach($promos as $key => $promo)
            <div class="carousel-item{{ $key === 0 ? ' active' : '' }} align-items-center pb-4">
                    <img src="{{ asset('storage/'.$promo->image) }}" class="d-block mx-auto img-fluid promos">
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
    </div>

    <div class="col-md-12 align-items-center p-4 bg-image-light">
        <h1 class="text-center red py-4"> Paola Tops </h1>
        <div class="row align-items-center ps-all-products">
            @foreach ($products as $key => $product)
                    @php
                        $animation_delay = $key * 250;
                    @endphp
                    <div class="col-md-4 justify-content-center pb-4" data-aos="fade-up" data-aos-delay="{{$animation_delay}}">
                        <a href="detailProducts/{{$product['id']}}"><img src="{{ asset('storage/'.$product->foto) }}" alt="Banner 1" class="shadow-lg my-div home-product w-100"></a>
                        <div class="row mt-3">
                            <a href="detailProducts/{{$product['id']}}" class="link-underline-light link-danger">
                                <p class="fs-4 fw-bold"> {{$product->nama}} ({{$product->warna}}) </p>
                            </a>
                        </div>
                        <div class="row align-items-center home-product">
                            <div class="col-6 col-md-8">
                                <div class="fw-normal fs-6 text-light">
                                    <a href="detailProducts/{{$product['id']}}" class="link-underline-light link-secondary"> See in Detail </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 text-end">
                                <a href="detailProducts/{{$product['id']}}"><img src="storage/images/Arrow.png" class="img-fluid arrow"> </a>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>

    <div class="col-md-12 align-items-center p-4 bg-image-long text-light">
        <h1 class="text-center py-4"> Better in Black </h1>
        <div class="row align-items-center ps-all-products">
            @foreach ($products2 as $key => $product)
                    @php
                        $animation_delay = $key * 250;
                    @endphp
                    <div class="col-md-4 justify-content-center pb-4" data-aos="fade-up" data-aos-delay="{{$animation_delay}}">
                        <a href="detailProducts/{{$product['id']}}"><img src="{{ asset('storage/'.$product->foto) }}" alt="Banner 1" class="shadow-lg my-div home-product w-100"></a>
                        <div class="row mt-3">
                            <a href="detailProducts/{{$product['id']}}" class="link-underline-light link-light link-underline-opacity-0">
                                <p class="fs-4 fw-bold"> {{$product->nama}} ({{$product->warna}}) </p>
                            </a>
                        </div>
                        <div class="row align-items-center home-product">
                            <div class="col-6 col-md-8 ">
                                <div class="fw-normal fs-6 text-light">
                                    <a href="detailProducts/{{$product['id']}}" class="link-underline-light link-light link-underline-opacity-0"> See in Detail </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 text-end">
                                <a href="detailProducts/{{$product['id']}}"><img src="storage/images/Arrow.png" class="img-fluid arrow"> </a>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
    @endsection
