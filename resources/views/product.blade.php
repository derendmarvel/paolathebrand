@extends('layouts.template')

@section('title', 'Products')

@section('content')
    <div class="container-fluid">
        <div class="row align-items-center bg-image text-light py-5">
            <div class="col align-items-start pb-5">
                <h1 class = "fw-bold large extra"> Latest </h1>
                <h1 class = "fw-bold large extra"> Arrivals </h1> 
            </div>
            <div class="col">
                <div class="row scrollable">
                    @foreach ($products as $key => $product)
                    @if ($key < 3)
                        <div class="col pt-2 padding-start scrollable">
                            <img src="{{asset($product->foto)}}" alt="Banner 1" width="250" height="375">
                            <div class="row text-center pb-5 pt-2">
                                <h3 class="fs-5"> {{$product->nama}} ( {{$product->warna}} ) </h3>
                            </div>
                        </div>
                    @else
                        @break
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row align-items-center py-4">
            <h1 class = "text-center red pb-5 pt-4 py-2"> All Products </h1>
            <div class="row ps-all-products">
                @foreach ($products as $key => $product)
                @if ($key < 3)
                <div class="col align-items-start">
                    <img src="{{asset($product->foto)}}" alt="Banner 1" width="280" height="420">
                    <div class="row justify-content-start">
                        <div class="col">
                            <div class="pt-2 fs-4 fw-bold red"><p> {{$product->nama}} ( {{$product->warna}} ) </p></div>
                            <div class="pb-5 fw-normal fs-6 text-secondary">
                                <a href="detailProducts/{{$product['id']}}" class="link-underline-light link-secondary"> See in Detail <img src="/images/Arrow.png" width="30" height="20"></a>
                            </div>
                        </div>
                        <!-- <div class="col ps-4 pt-3">
                            <img src="/images/Arrow.png" width="30" height="20">
                        </div> -->
                    </div>
                </div>
                @else
                <div class="col align-items-start">
                    <img src="{{asset($product->foto)}}" alt="Banner 1" width="280" height="420">
                    <div class="row justify-content-start">
                        <div class="col">
                            <div class="pt-2 fs-4 fw-bold red"><p> {{$product->nama}} ( {{$product->warna}} )</p></div>
                            <div class="pb-5 fw-normal fs-6 text-secondary">
                                <a href="detailProducts/{{$product['id']}}" class="link-underline-light link-secondary"> See in Detail <img src="/images/Arrow.png" width="30" height="20"></a>
                            </div>
                        </div>
                        <!-- <div class="col ps-4 pt-3">
                            <img src="/images/Arrow.png" width="30" height="20">
                        </div> -->
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection