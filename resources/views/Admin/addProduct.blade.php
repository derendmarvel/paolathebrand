@extends('layouts.template')

@section('title', 'Add Product')

@section('content')

<div class = "container-fluid bg-white padding-form">
    <h1 class = "red"> New Product </h1>
    <form action="/produk/store" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="nama" class="form-label"> Product Name </label>
        <input type="text" class="form-control" name = "nama" required>
    </div>
    <div class="mb-3">
        <label for="kategori" class="form-label"> Kategori </label>
        <select class="form-select" size="1" name="kategori_id" required>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->kategori }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="warna" class="form-label"> Color </label>
        <input type="text" class="form-control" name = "warna" required>
    </div>
    <div class="mb-3">
        <label for="size" class="form-label"> Size </label>
        <input type="text" class="form-control" name = "size" required>
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label"> Prices </label>
        <input type="text" class="form-control" name = "harga" required>
    </div>
    <div class="mb-3">
        <label for="foto" class="form-label"> Upload Image </label>
        <img class="img-preview img-fluid mb-3 col-sm-5">
        <input type="file" name="foto" id="image" class="form-control" accept="image/jpg, image/png, image/jpeg" onchange="previewImage()">
    </div>
    <div class="mb-3">
        <label for="deskripsi" class="form-label"> Description </label>
        <input type="text" class="form-control" name = "deskripsi" required>
    </div>
    <div class="mb-3">
        <label for="stok" class="form-label"> Stock </label>
        <input type="text" class="form-control" name = "stok" required>
    </div>
    <div class="mb-3">
        <label for="link" class="form-label"> Link </label>
        <input type="text" class="form-control" name = "link" required>
    </div>
    <button type="submit" class="btn btn-danger"> ADD PRODUCT </button>
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