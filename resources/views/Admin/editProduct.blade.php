@extends('layouts.template')

@section('title', 'Add Product')

@section('content')

<div class = "container-fluid bg-white padding-form">
    <h1 class = "red"> Edit Product </h1>
    <form action="{{ route('produk.update', $produk) }}" method="POST" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
        <label for="nama" class="form-label"> Product Name </label>
        <input type="text" class="form-control" name = "nama" placeholder ="Product Name" value = "{{ $produk->nama }}" required>
    </div>
    <div class="mb-3">
        <label for="kategori" class="form-label"> Category </label>
        <select class="form-select" size="1" name="kategori_id" required>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->kategori }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="warna" class="form-label"> Color </label>
        <input type="text" class="form-control" name = "warna" placeholder ="Color" value = "{{ $produk->warna }}" required>
    </div>
    <div class="mb-3">
        <label for="size" class="form-label"> Size </label>
        <input type="text" class="form-control" name = "size" placeholder ="Size" value = "{{ $produk->size }}" required>
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label"> Price </label>
        <input type="text" class="form-control" name = "harga" placeholder ="Price" value = "{{ $produk->harga }}" required>
    </div>
    <div class="mb-3">
        <label for="foto" class="form-label"> Upload Image </label>
        <br>
        @if ($produk->foto)
        <img src = "{{ asset('storage/'.$produk->foto) }}" class="img-preview img-fluid mb-3 col-sm-5">   
        @else
        <img class="img-preview img-fluid mb-3 col-sm-5">
        @endif
        <input type="file" name="foto" id="image" class="form-control" accept="image/jpg, image/png, image/jpeg" onchange="previewImage()" placeholder ="Image" value = "{{ $produk->foto }}" required>
    </div>
    <div class="mb-3">
        <label for="deskripsi" class="form-label"> Description </label>
        <input type="text" class="form-control" name = "deskripsi" placeholder ="Description" value = "{{ $produk->deskripsi }}" required>
    </div>
    <div class="mb-3">
        <label for="stok" class="form-label"> Stock </label>
        <input type="text" class="form-control" name = "stok" placeholder ="Stock" value = "{{ $produk->stok }}" required>
    </div>
    <div class="mb-3">
        <label for="link" class="form-label"> Link </label>
        <input type="text" class="form-control" name = "link" placeholder ="Link" value = "{{ $produk->link }}" required>
    </div>
    <button type="submit" class="btn btn-danger px-5 py-3 fw-bold"> UPDATE PRODUCT </button>
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