@extends('layouts.template')

    @section('title', 'Product Detail')

    @section('content')
        <div class="container-fluid bg-image-light pe-5">
            <div class="row align-items-center pe-5">
                <div class="col-md-4 ps-detail py-5">
                    <img src="{{ asset('storage/'.$produk->foto) }}" alt="Banner 1" width="290" height="435" class = "shadow-lg" data-aos="fade-up">
                </div>
                <div class="col-md ps-text">
                    <div class="row">
                        <p class="pt-5 fs-1 fw-bold red" data-aos="fade-up" data-aos-delay="250">{{$produk['nama']}} ({{$produk['warna']}})</p>
                        <p class="fs-6 text-secondary" data-aos="fade-up" data-aos-delay="500">Stock : {{$produk['stok']}}</p>
                        <p class="fs-6 w-75" data-aos="fade-up" data-aos-delay="750"> {{$produk['deskripsi']}}</p>
                        <p class="fs-2 fw-medium red" data-aos="fade-up" data-aos-delay="1000"> Rp {{$produk['harga']}}</p>
                        <div class="row">
                        @auth
                            @if (Auth::user()->isAdmin())
                            <div class="col-md align-items-center" data-aos="fade-up" data-aos-delay="1250"> 
                                <a href="{{ route('produk.edit', $produk)}}" class="btn btn-info text-light w-100 h-100 p-2 fw-bold"> Edit </a>
                            </div>
                            <div class="col-md align-items-center" data-aos="fade-up" data-aos-delay="1250"> 
                            <form action="{{ route('produk.destroy', $produk)}}" method="POST">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger w-100 h-100 p-2 fw-bold"> Delete </button>
                            </form>
                            </div>

                            @elseif (Auth::user()->isVisitor())
                            <p class="align-items-center" data-aos="fade-up" data-aos-delay="1250"> <a href="{{$produk['link']}}" class="btn btn-info text-light w-100 h-100 p-2 fw-bold"> Buy Now </a></p>
                            <div class="shadow">
                                <button id = "minus" class ="mx-4"> - </button>
                                <span id = "counter" class= "mx-4"> 0 </span>
                                <button id = "plus" class = "mx-4"> + </button>
                            </div>
                            <form action="/addToCart/{{$produk['id']}}" method="POST" id="addToCartForm">
                                @csrf
                                @method('post')
                                <input type="hidden" name="quantity" id="quantityInput" value="0"> 
                                <button type="submit" class="btn btn-danger w-100 h-100 p-2 fw-bold" data-aos="fade-up" data-aos-delay="1250">Add to Cart</button>
                            </form>

                            @endif
                        @else
                            <p class="col-md-4 align-items-center" data-aos="fade-up" data-aos-delay="1250"> <a href="{{$produk['link']}}" class="btn btn-danger w-100 h-100 p-2 fw-bold"> Buy Now </a></p>
                            
                        </div>
                        @endauth
                    </div>
                </div>
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