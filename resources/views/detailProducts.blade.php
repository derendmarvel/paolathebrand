@extends('layouts.template')

@section('title', 'Products')

@section('content')
    <div class="container-fluid bg-image-light">
        <div class="row">
            <div class="col-md-4 ps-detail py-5">
                <img src="{{$produk['foto']}}" alt="Banner 1" width="290" height="435" class = "shadow-lg">
            </div>
            <div class="col-md ps-detail">
                <div class="row">
                    <p class="pt-5 fs-1 fw-bold red">{{$produk['nama']}} ( {{$produk['warna']}} )</p>
                    <p class="fs-6 text-secondary">Stock : {{$produk['stok']}}</p>
                    <p class="fs-6 w-75">{{$produk['deskripsi']}}</p>
                    <p class="pt-3 fs-2 fw-medium red">Rp {{$produk['harga']}}</p>
                    <p class="align-items-center"><a href="{{$produk['link']}}" class="btn btn-danger w-28 h-75 pb-3"> BUY NOW </a></p>
                </div>
            </div>
        </div>
    </div>
@endsection