@extends('layouts.template')

@section('title', 'Cart')

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
                            <option value="$each->city_name"><?php echo $each->city_name ?></option>
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
                            <option value="$each->city_name"><?php echo $each->city_name ?></option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="mb-3 form-group">
                <label> Weight in gr</label>
                <input type="text" name="weight" class="form-control">
            </div>
            <div class="mb-3 form-group">
                <label> Expedition </label> {{-- ini nanti diganti dropdown ngambil data dari tabel shipment, sama payment juga tapi blm aku bikin --}}
                <select class="form-control" name="expedition">
                    <option value="">Select</option>
                    <option value="jne">JNE</option>
                    <option value="pos">POS Indonesi</option>
                    <option value="tiki">TIKI</option>
                </select>
            </div>
            <div class="form-group">
                <input class="btn btn-danger" value="Check Out" type="submit" name="submit">
            </div>
            {{-- <button type="submit" class="btn btn-danger">Submit</button> --}}
        </form>
    </div>
@endsection
