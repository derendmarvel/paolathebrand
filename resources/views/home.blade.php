@extends('layouts.template')

    @section('title', 'Paola The Brand')

    @section('content')
    <div class="bg-dark px-5 pt-3 pb-5">
        <div class = "container px-3 pb-3 ">
            <div class="row align-items-center text-light">
                <div class="col align-items-start">
                    <p class = "fw-medium fs-5"> EST. 2023 </p> 
                    <h1 class = "fw-bold large"> Romanticize Your Basic </h1> 
                    <p class = "fw-normal fs-5 py-2 opacity-75"> Serving you the chicest and timeless pieces for your wardrobe. Made and built with love. </p> 
                    <a href="/products" class="btn btn-danger px-5 py-3"> SHOP NOW </a>
                </div>
                <div class="col image-container">
                    <img src="/images/Paola-Lookbook-1.png" alt="Banner 1" width="300" height="450">
                    <img src="/images/Paola-Lookbook-2.png" alt="Overlay Image" width="200" height="300" class = "shadow">
                </div>
            </div>
        </div>
    </div>

    <div class="p-5">
        <div class = "container">
            <div class="row align-items-center">
                <div class="col align-items-start">
                    <p class = "fw-bold fs-5"> EST. 2023 </p> 
                    <h1 class = "fw-bold large"> Romanticize Your Basic </h1> 
                    <p class = "fw-normal fs-5"> Serving you the chicest and timeless pieces for your wardrobe. Made and built with love. </p> 
                    <a href="/products" class="btn btn-danger px-5 py-3"> SHOP NOW </a>
                </div>
            </div>
        </div>
    </div>
    @endsection
