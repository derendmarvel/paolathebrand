@extends('layouts.template')

@section('title', 'Add Product')

@section('content')

<div class = "container-fluid bg-white p-5">
    <h1 class = "red"> New Product </h1>
    <form>
    <div class="mb-3">
        <label for="nama" class="form-label"> Product Name </label>
        <input type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="kategori" class="form-label"> Kategori </label>
        <input type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="warna" class="form-label"> Color </label>
        <input type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="size" class="form-label"> Size </label>
        <input type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label"> Prices </label>
        <input type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="foto" class="form-label"> Image </label>
        <input type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="deskripsi" class="form-label"> Description </label>
        <input type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="stok" class="form-label"> Stock </label>
        <input type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="link" class="form-label"> Link </label>
        <input type="text" class="form-control">
    </div>
    <button type="submit" class="btn btn-danger">Submit</button>
    </form>
</div>
@endsection