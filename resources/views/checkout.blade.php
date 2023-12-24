@extends('layouts.template')

@section('title', 'Checkout')

@section('content')
    <div class = "container-fluid bg-white padding-form">
        <h1 class = "red"> Check Out </h1>
        <div class="row align-items-center py-5 bg-image-light px-5">
            <div class="row px-5">
                @foreach ($carts as $key => $cart)
                    @php
                        $delay_pattern = [0, 100, 200];
                        $animation_delay = $delay_pattern[$key % count($delay_pattern)];
                    @endphp
                    <div class="col-md-4 align-items-start" data-aos="fade-up" data-aos-delay="{{$animation_delay}}">
                        <a href="detailProducts/{{$cart->produk->nama}}"><img src="{{asset('storage/'.$cart->produk->foto)}}" alt="Banner 1" width="280" height="420" class = "shadow-lg my-div p-product"> </a>
                        <div class="row justify-content-start p-product">
                            <div class="col">
                                <div class="pt-4 row"> <a href="detailProducts/{{$cart->produk['id']}}" class = "link-underline-light link-secondary col"> <p class ="fs-4 fw-bold"> {{$cart->quantity}} </p> <p class ="fs-4 fw-bold red"> {{$cart->produk->nama}} ({{$cart->produk->warna}}) </p> </a> </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <form method="POST" action="/cekOngkir">
        {{-- <form action="/promo/store" method="POST" enctype="multipart/form-data"> --}}
            @csrf
            <div class="mb-3 form-group">
                <label> From </label>
                {{-- <option value="jakarta barat">Jakarta Barat</option> --}}
                <select class="form-control autosearch" name="from">
                    <option value="151">Jakarta Barat</option>
                    {{-- <option value="">Select City</option>
                    @if($city)
                        @foreach ($city->rajaongkir->results as $each) --}}
                            {{-- <option value="{{$each->city_id}}"><?php echo $each->city_name ?></option> --}}
                        {{-- @endforeach
                    @endif --}}
                </select>
            </div>
            <div class="mb-3 form-group">
                <label> To </label>
                <select class="form-control autosearch" name="to">
                    <option value="">Select City</option>
                    @if($city)
                        @foreach ($city->rajaongkir->results as $each)
                            <option value="{{$each->city_id}}"><?php echo $each->city_name ?></option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="mb-3 form-group">
                <label> Weight in gr</label>
                <select class="form-control autosearch" name="weight">
                    <option value="{{(int)$weight}}">{{$weight}}</option>
                </select>
                {{-- <input type="text" name="weight" class="form-control"> --}}
            </div>
            <div class="mb-3 form-group">
                <label> Expedition </label>
                <select class="form-select" size="1" name="expedition" required>
                    @foreach ($shipments as $shipment)
                        <option value="{{ $shipment->name }}">{{ $shipment->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <input class="btn btn-danger" value="Check Out" type="submit" name="submit">
            </div>
            {{-- <button type="submit" class="btn btn-danger">Submit</button> --}}
        </form>
    </div>
@endsection
