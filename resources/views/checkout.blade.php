@extends('layouts.template')

@section('title', 'Checkout')

@section('content')
    <div class = "container-fluid bg-white padding-form">
        <h1 class = "red"> Check Out </h1>
        <form method="POST" action="/cekOngkir">
        {{-- <form action="/promo/store" method="POST" enctype="multipart/form-data"> --}}
            @csrf
            <div class="mb-3 form-group">
                <label> From </label>
                <select class="form-control autosearch" name="from">
                    <option value="">Select City</option>
                    @if($city)
                        @foreach ($city->rajaongkir->results as $each)
                            <option value="{{$each->city_id}}"><?php echo $each->city_name ?></option>
                        @endforeach
                    @endif
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
                <input type="text" name="weight" class="form-control">
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
