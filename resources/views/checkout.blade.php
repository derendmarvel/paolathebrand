@extends('layouts.template')

@section('title', 'Checkout')

@section('content')

    <div class="row align-items-center login-bg">
        <div class="col-md p-4" data-aos="fade-right" data-aos-duration="3000">
            <div class="carousel-container ms-5" data-aos="fade-left" data-aos-duration="3000">
                @foreach ($carts as $cart)
                    <div class="card">
                        <img src="{{ asset('storage/'.$cart->produk->foto) }}" alt="Banner 1" width="280" height="420" class = "shadow-lg my-div card-size">
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-md px-3 py-5 bg-light" data-aos="fade-left" data-aos-duration="3000">
        <div class = "container-fluid padding-form">
        <h1 class = "red text-center"> Check Out </h1>
        <form method="POST" action="/cekOngkir">
        {{-- <form action="/promo/store" method="POST" enctype="multipart/form-data"> --}}
            @csrf
            <div class="mb-3 form-group">
                <label> From </label>
                {{-- <input type="text" class="form-control" name = "from" value = "151" disabled> --}}
                {{-- <option value="jakarta barat">Jakarta Barat</option> --}}
                <select class="form-control autosearch" name="from">
                    <option value="151">Jakarta Barat</option> {{-- ini jangan diganti ya, kl disabled g kebaca datanya --}}
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
                    <option value=""> Select City </option>
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
                    <option value="{{(int)$weight}}">{{$weight}} Kg</option>
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
        </div>
    </div>
@endsection
