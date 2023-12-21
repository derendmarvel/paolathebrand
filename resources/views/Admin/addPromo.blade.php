@extends('layouts.template')

@section('title', 'Add Promo')

@section('content')

<div class = "container-fluid bg-white padding-form">
    <h1 class = "red"> New Promo </h1>
    <form action="/promo/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label"> Promo Name </label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="start_date" class="form-label"> Start Date </label>
            <input type="text" name="start_date" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="end_date" class="form-label"> End Date </label>
            <input type="text" name="end_date" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label"> Upload Image </label>
            <img class="img-preview img-fluid mb-3 col-sm-5">
            <input type="file" name="image" id="image" class="form-control" accept="image/jpg, image/png, image/jpeg" onchange="previewImage()">
        </div>
        <button type="submit" class="btn btn-danger">Submit</button>
    </form>
</div>

<script>
    function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const ofReader = new FileReader();
        ofReader.readAsDataURL(image.files[0]);

        ofReader.onload = function (oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection
