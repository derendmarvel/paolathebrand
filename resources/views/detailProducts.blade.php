@extends('layouts.template')

@section('title', 'Products')

@section('content')
    <div class="container-fluid bg-image-light">
        <div class="row align-items-center">
            <div class="col-md-4 ps-detail py-5">
                <img src="{{$produk['foto']}}" alt="Banner 1" width="290" height="435" class = "shadow-lg" data-aos="fade-up">
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
                        <p class="col-md-2 align-items-center" data-aos="fade-up" data-aos-delay="1250"> <a href="" class="btn btn-success w-28 h-75 pb-3 fw-bold"> Edit </a></p>
                        <p class="col-md align-items-center" data-aos="fade-up" data-aos-delay="1250"> <a href="addToCard/{{$produk['id']}}" class="btn btn-danger w-28 h-75 pb-3 fw-bold"> Delete </a></p>
                        @elseif (Auth::user()->isVisitor())
                        <p class="col-md-4 align-items-center" data-aos="fade-up" data-aos-delay="1250"> <a href="{{$produk['link']}}" class="btn btn-info text-light w-100 h-100 p-2 fw-bold"> Buy Now </a></p>
                        <p class="col-md-4 align-items-center" data-aos="fade-up" data-aos-delay="1250"> <a href="addToCard/{{$produk['id']}}" class="btn btn-danger w-100 h-100 p-2 fw-bold"> Add To Cart </a></p>
                        @else
                        <p class="col-md-4 align-items-center" data-aos="fade-up" data-aos-delay="1250"> <a href="{{$produk['link']}}" class="btn btn-info w-100 h-100 p-2 fw-bold"> Buy Now </a></p>
                        @endif
                    </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
@endsection