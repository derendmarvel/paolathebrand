@extends('layouts.template')

    @section('title', 'Product Detail')

    @section('content')
        <div class="container-fluid bg-image-light p-5">
            <div class="row align-items-center p-3 p-md-5 ">
                <div class="col-12 col-md-4">
                    <img src="{{ asset('storage/'.$produk->foto) }}" alt="Banner 1" class = "shadow-lg w-100" data-aos="fade-up">
                </div>
                <div class="col-12 col-md-8 p-5 header-text">
                    <div class="row">
                        <p class="fs-1 fw-bold red" data-aos="fade-up" data-aos-delay="250">{{$produk['nama']}} ({{$produk['warna']}})</p>
                        <p class="fs-6 text-secondary" data-aos="fade-up" data-aos-delay="500">Stock : {{$produk['stok']}}</p>
                        <p class="fs-6 w-100 w-md-75" data-aos="fade-up" data-aos-delay="750"> {{$produk['deskripsi']}}</p>
                        <p class="fs-2 fw-medium red" data-aos="fade-up" data-aos-delay="1000"> Rp {{$produk['harga']}}</p>
                        @auth
                            @if (Auth::user()->isAdmin())
                            <div class="col-12 col-md-4 my-1" data-aos="fade-up" data-aos-delay="1250"> 
                                <a href="{{ route('produk.edit', $produk)}}" class="btn btn-info text-light w-100 h-100 p-2 fw-bold"> Edit </a>
                            </div>
                            <div class="col-12 col-md-4 my-1" data-aos="fade-up" data-aos-delay="1250"> 
                            <form action="{{ route('produk.destroy', $produk)}}" method="POST">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger w-100 h-100 p-2 fw-bold"> Delete </button>
                            </form>
                            </div>

                            @elseif (Auth::user()->isVisitor())
                            <div class="col-12 col-md-4 pb-3 header-text" data-aos="fade-up" data-aos-delay="1250">
                                <button id = "minus" class ="btn btn-danger me-2"> - </button>
                                <span id = "counter" class= "me-2"> 0 </span>
                                <button id = "plus" class = "btn btn-success"> + </button>
                            </div>
                            <div data-aos="fade-up" data-aos-delay="1500">
                                <form action="/addToCart/{{$produk['id']}}" method="POST" id="addToCartForm">
                                    @csrf
                                    @method('post')
                                    <input type="hidden" name="quantity" id="quantityInput" value="0"> 
                                    <button type="submit" class="btn btn-danger w-100 p-2 fw-bold my-2">Add to Cart</button>
                                </form>
                            </div>
                                @if($wishlist)
                                <div data-aos="fade-up" data-aos-delay="1500">
                                    <form action="{{ route('wishlist.destroy', $wishlist)}}" method="POST" id="addToCartForm">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-dark w-100 p-2 fw-bold"> Remove from Wishlist </button>
                                    </form>
                                </div>
                                @else
                                <div data-aos="fade-up" data-aos-delay="1500">
                                    <form action="/addWishlist/{{$produk['id']}}" method="POST">
                                        @csrf
                                        @method('post')
                                        <button type="submit" class="btn btn-dark w-100 p-2 fw-bold">Add to Wishlist</button>
                                    </form>
                                </div>
                                @endif
                            @endif
                        @else
                            <div class = "col-12 col-md-4 align-items-center text-center" data-aos="fade-up" data-aos-delay="1500"> 
                                <a href="{{$produk['link']}}" class="btn btn-danger w-100 p-2 fw-bold"> Buy Now </a>
                            </div>
                        </div>
                        @endauth
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function () {
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
            });
        </script>
    @endsection