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
                        <p class="col-md-2 pe-1 align-items-center" data-aos="fade-up" data-aos-delay="1250"> <a href="{{$produk['link']}}" class="btn btn-danger w-28 h-75 pb-3"> BUY NOW </a></p>
                        <p class="col-md align-items-center" data-aos="fade-up" data-aos-delay="1250"> <a href="addToCard/{{$produk['id']}}" class="btn btn-danger w-28 h-75 pb-3"> ADD TO CART </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
