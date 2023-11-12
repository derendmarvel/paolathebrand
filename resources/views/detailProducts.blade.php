@extends('layouts.template')

@section('title', 'Products')

@section('content')
    <div class="container-fluid bg-image-light">
        <div class="row">
            <div class="col-md-4 ps-detail py-5">
                <img src="{{$produk['foto']}}" alt="Banner 1" width="290" height="435" class = "shadow-lg" data-aos="fade-up">
            </div>
            <div class="col-md ps-detail">
                <div class="row">
                    <p class="pt-5 fs-1 fw-bold red" data-aos="fade-up" data-aos-delay="100">{{$produk['nama']}} ({{$produk['warna']}})</p>
                    <p class="fs-6 text-secondary" data-aos="fade-up" data-aos-delay="200">Stock : {{$produk['stok']}}</p>
                    <p class="fs-6 w-75" data-aos="fade-up" data-aos-delay="300"> {{$produk['deskripsi']}}</p>
                    <p class="pt-3 fs-2 fw-medium red" data-aos="fade-up" data-aos-delay="400"> Rp {{$produk['harga']}}</p>
                    <p class="align-items-center" data-aos="fade-up" data-aos-delay="500"> <a href="{{$produk['link']}}" class="btn btn-danger w-28 h-75 pb-3"> BUY NOW </a></p>
                </div>
            </div>
        </div>
    </div>
@endsection