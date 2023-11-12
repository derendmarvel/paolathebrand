@extends('layouts.template')

    @section('title', 'Paola The Brand')

    @section('content')
    <div class="bg-image">
        <div class= "container px-5 py-3" >
            <div class="row align-items-center">
                <div class="col align-items-start text-light">
                    <p class = "fw-medium fs-5"> EST. 2023 </p> 
                    <h1 class = "fw-bold large"> Romanticize Your Basic </h1> 
                    <p class = "fw-normal fs-5"> Serving you the chicest and timeless pieces for your wardrobe. Made and built with love. </p> 
                    <a href="https://shopee.co.id/paola_thebrand?originalCategoryId=11042750&page=0" class="btn btn-danger px-5 py-3"> SHOP NOW </a>
                </div>
                <div class="col">
                    <img src="/images/Paola-Lookbook-1.png" alt="Banner 1" width="300" height="450" class = "shadow-lg">
                </div>
            </div>
        </div>
    </div>
    @endsection
