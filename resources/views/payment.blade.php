@extends('layouts.template')

@section('title', 'Payment')

@section('content')
    {{-- @php
        dd($total);
    @endphp --}}

    <div class="col align-items-center py-5 px-5">
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

        <form method="POST" action="/finalOrder">
            @method('post')
            @csrf
            

            <strong>From :</strong>
            <p value="Jakarta Barat" type="text" name="from"> Jakarta Barat </p>
            {{-- <?php //echo "Jakarta Barat" ?> --}}

            <strong>To :</strong>
            <p value="{{$total->rajaongkir->destination_details->city_name}}" type="text" name="to"> {{$total->rajaongkir->destination_details->city_name}} </p>
            {{-- <?php //echo $total->rajaongkir->destination_details->city_name ?> --}}

            <strong>Expedition :</strong>
            <select class="form-select autosearch p-1 my-1" name="expedition">
                <option value="{{$total->rajaongkir->results[0]->name}}">{{$total->rajaongkir->results[0]->name}}</option>
            </select>
            {{-- <p value="{{$total->rajaongkir->results[0]->name}}" type="text" name="expedition"> {{$total->rajaongkir->results[0]->name}} </p> --}}
            {{-- <?php //echo $total->rajaongkir->results[0]->name ?><br> --}}

            <strong>Weight :</strong>
            <select class="form-select autosearch p-1 my-1" name="weight">
                <option value="{{$total->rajaongkir->query->weight/1000}}">{{$total->rajaongkir->query->weight/1000}} Kg</option>
            </select>
            {{-- <p value="{{$total->rajaongkir->query->weight/1000}}" type="text" name="weight"> {{$total->rajaongkir->query->weight/1000}} </p> --}}
            {{-- <?php //echo $total->rajaongkir->query->weight/1000 ?>Kg<br> --}}

            <strong>Cost :</strong>
            <div class="mb-3">
                <select class="form-select autosearch " name="cost">
                    {{-- <option value="">Select Expedition</option> --}}
                    @foreach ($total->rajaongkir->results[0]->costs as $biaya) <br>
                    <option value="{{$biaya->cost[0]->value}}"> {{$biaya->service}} = {{number_format($biaya->cost[0]->value)}} {{$biaya->cost[0]->etd}} Day </option>
                    {{-- <?php //echo $biaya->service?> : <?php //echo number_format($biaya->cost[0]->value) ?> (<?php //echo $biaya->cost[0]->etd ?> Day)<br> --}}
                    @endforeach
                </select>
            </div>

            <strong>Proof of Payment</strong>
            <div>
                <input type="file" name="proof" id="image" class="form-control" accept="image/jpg, image/png, image/jpeg">
            </div>

            <div class="form-group pt-4">
                <input class="btn btn-danger" value="Pay Now" type="submit" name="submit">
            </div>
        </form>
    </div>
@endsection
