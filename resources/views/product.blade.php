@extends('layouts.template')

    @section('title', 'Products')

    @section('content')
    <div class = "col-12">
        <div class="row align-items-center bg-image-long text-light py-5 px-2 py-md-5 px-md-5">
            <div class="col-12 col-md-6 align-items-start ps-product header-text order-lg-1 order-2" data-aos="fade-right" data-aos-duration="3000">

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
            <div class="col-6 col-md-6 order-lg-2 order-1">
                <div class = "carousel-container d-none d-md-flex" data-aos="fade-left" data-aos-duration="3000">
                    @foreach ($products as $key => $product)
                        @if ($key < 3)
                            <div class="card">
                                <a href="detailProducts/{{$product['id']}}"><img src="{{ asset('storage/'.$product->foto) }}" alt="Banner 1" width="280" height="420" class = "shadow-lg my-div card-size"> </a>
                            </div>
                        @else
                            @break
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row align-items-center py-4 bg-image-light px-3">
            <h1 class = "text-center red pb-5 pt-4 py-2 fw-bold"> All Products </h1>
            <div class="row px-5">
                @foreach ($products as $key => $product)
                    @php
                        $delay_pattern = [0, 100, 200];
                        $animation_delay = $delay_pattern[$key % count($delay_pattern)];
                    @endphp
                    <div class="col-md-4 align-items-start px-4" data-aos="fade-up" data-aos-delay="{{$animation_delay}}">
                        <div class="px-3">
                        <a href="/detailProducts/{{$product['id']}}"><img src="{{ asset('storage/'.$product->foto) }}" alt="Banner 1" class = "shadow-lg my-div p-product w-100"> </a>
                        </div>
                        <div class="row justify-content-start p-product">
                            <div class="col">
                                <div class="row pt-4">
                                    <div class= "col-md-9 ps-3">
                                        <a href="/detailProducts/{{$product['id']}}" class ="link-underline-light link-secondary col fs-4 fw-bold text-danger pb-2"> {{$product->nama}} ({{$product->warna}}) </a>
                                    </div>
                                    @auth
                                    @if(Auth::user()->isVisitor())
                                    <div class= "col-md-2">
                                        <form action="addWishlist/{{$product['id']}}" method="POST">
                                            @csrf
                                            @method('post')
                                            <button type = "submit" class = "btn w-25" id="likeButton">
                                                <img src="storage/images/Unlike_button.png" id="likeImage" width="25" height="25">
                                            </button>
                                        </form>
                                    </div>
                                    @endif
                                    @endauth

                                    @auth
                                    @if(Auth::user()->isVisitor())
                                    <script>
                                        function updateImageSource{{$key}}() {
                                            var condition{{$key}} = {{$wishlists->contains('produk_id', $product->id) ? 'true' : 'false'}};
                                            var imageElement{{$key}} = document.querySelector('.likeImage{{$key}}[data-product-id="{{$product->id}}"]');

                                            if (condition{{$key}}) {
                                                imageElement{{$key}}.src = 'storage/images/Like_button.png';
                                            } else {
                                                imageElement{{$key}}.src = 'storage/images/Unlike_button.png';
                                            }
                                        }

                                        window.onload = function() {
                                            updateImageSource{{$key}}();
                                        };
                                    </script>
                                    @endif
                                    @endauth

                                    <!-- <a href="addWishlist/{{$product['id']}}" class="col pt-1 ps-like z-2 position-absolute"> <img src="storage/images/Unlike_button.png" width="25" height="25"> </a>  -->
                                </div>
                                <div class="row pb-5 fw-normal fs-6 text-secondary">
                                    <div class= "col-md-6 ps-3">
                                        <a href="/detailProducts/{{$product['id']}}" class="link-underline-light link-secondary my-2"> See in Detail <img src="storage/images/Arrow.png" width="30" height="20"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    @endsection
