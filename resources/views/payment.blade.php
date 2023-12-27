@extends('layouts.template')

@section('title', 'Payment')

@section('content')
    {{-- @php
        dd($total);
    @endphp --}}

    <div class="col align-items-center px-5 py-2">
        <div class="row px-3">
            <h1 class="text-center red py-4 fw-bold"> Your Order </h1>
            @foreach ($carts as $key => $cart)
                @php
                    $delay_pattern = [0, 100, 200];
                    $animation_delay = $delay_pattern[$key % count($delay_pattern)];
                @endphp
                <div class="col-md-4 align-items-start" data-aos="fade-up" data-aos-delay="{{$animation_delay}}">
                    <a href="detailProducts/{{$cart->produk->nama}}"><img src="{{asset('storage/'.$cart->produk->foto)}}" alt="Banner 1" class = "shadow-lg my-div w-100"> </a>
                    <div class="row justify-content-start">
                        <div class="col">
                            <div class="pt-4 row"> 
                                <a href="detailProducts/{{$cart->produk['id']}}" class = "link-underline-light link-secondary"> 
                                    <p class ="fs-5 fs-md-4 fw-bold red"> {{$cart->produk->nama}} ({{$cart->produk->warna}}) </p> 
                                    <p class ="fs-6 fs-md-4 fw-bold"> {{$cart->quantity}} </p> 
                                </a> 
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row px-3 my-5">
        <form action="{{ route('finalOrder') }}" method="POST" enctype="multipart/form-data">
            @method('post')
            @csrf
            <div class="col-12 col-md-12 mb-3 form-group">
                <label> From : </label>
                <p value="Jakarta Barat" type="text" name="from"> Jakarta Barat </p>
                {{-- <?php //echo "Jakarta Barat" ?> --}}
            </div>

            <div class="col-12 col-md-12 mb-3 form-group">
                <label>To :</label>
                <p value="{{$total->rajaongkir->destination_details->city_name}}" type="text" name="to"> {{$total->rajaongkir->destination_details->city_name}} </p>
                {{-- <?php //echo $total->rajaongkir->destination_details->city_name ?> --}}
            </div>

            <div class="col-12 col-md-12 mb-3 form-group">
                <label>Expedition :</label>
                    <select class="form-select p-1 my-1" name="expedition" required>
                        <option value="{{$total->rajaongkir->results[0]->name}}">{{$total->rajaongkir->results[0]->name}}</option>
                    </select>
                {{-- <p value="{{$total->rajaongkir->results[0]->name}}" type="text" name="expedition"> {{$total->rajaongkir->results[0]->name}} </p> --}}
                {{-- <?php //echo $total->rajaongkir->results[0]->name ?><br> --}}
            </div>

            <div class="col-12 col-md-12 mb-3 form-group">
                <label>Weight :</label>
                <select class="form-select p-1 my-1" name="weight" required>
                    <option value="{{$total->rajaongkir->query->weight/1000}}">{{$total->rajaongkir->query->weight/1000}} Kg</option>
                </select>
                {{-- <p value="{{$total->rajaongkir->query->weight/1000}}" type="text" name="weight"> {{$total->rajaongkir->query->weight/1000}} </p> --}}
                {{-- <?php //echo $total->rajaongkir->query->weight/1000 ?>Kg<br> --}}
            </div>       
            
            <div class = "col-12 col-md-12 mb-3 form-group">
                <label>Cost :</label>
                <select class="form-select" name="cost" required>
                    {{-- <option value="">Select Expedition</option> --}}
                    @foreach ($total->rajaongkir->results[0]->costs as $biaya) <br>
                    <option value="{{$biaya->cost[0]->value}}"> {{$biaya->service}} = {{number_format($biaya->cost[0]->value)}} {{$biaya->cost[0]->etd}} Day </option>
                    {{-- <?php //echo $biaya->service?> : <?php //echo number_format($biaya->cost[0]->value) ?> (<?php //echo $biaya->cost[0]->etd ?> Day)<br> --}}
                    @endforeach
                </select>
            </div>
            
            <div class = "col-12 col-md-12 mb-3 form-group">
                <label>Proof of Payment</label>
                <input type="file" name="payment" id="image" class="form-control" accept="image/jpg, image/png, image/jpeg" required>
            </div>

            <div class="col-12 col-md-12 mb-3 pt-4">
                <button type="submit" class="btn btn-danger"> Pay Now </button>
            </div>
        </form>
        </div>
    </div>
@endsection
