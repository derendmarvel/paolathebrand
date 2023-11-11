@extends('layouts.template')

@section('title', 'Products')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-5 extra pt-3">
                <img src="{{$produk['foto']}}" alt="Banner 1" width="280" height="400">
            </div>
            <div class="col">
                <div class="row">
                    <p class="pt-5 fs-1 fw-bold red">{{$produk['nama']}} ( {{$produk['warna']}} )</p>
                    <p class="fs-6 text-secondary">Stock : {{$produk['stok']}}</p>
                    <p class="fs-6 w-75">{{$produk['deskripsi']}}</p>
                    <p class="pt-3 fs-2 fw-medium red">Rp {{$produk['harga']}}</p>
                    <p class="align-items-center"><a href="#" class="btn btn-danger w-25 h-75 pb-3"> BUY NOW </a></p>
                </div>
            </div>
        </div>
    </div>
@endsection