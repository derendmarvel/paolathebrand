@extends('layouts.template')

@section('title', 'Cart')

@section('content')
    <div class="col align-items-center p-5 bg-image-light">
        <div class="row p-0 p-md-4">
            <div class="col-12 px-5 py-3 text-center">
                <h1 class = "fw-bold large py-5"> Your Order is Being Processed </h1>
                <a href="/products" class="btn btn-danger py-3 w-50"> SHOP FOR MORE </a>
            </div>
        </div>
    </div>
@endsection