@extends('layouts.template')

@section('title', 'Add Kategori')

@section('content')

<div class = "container-fluid bg-white padding-form">
    <h1 class = "red"> New Kategori </h1>
    <form action="/kategori/store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="kategori" class="form-label"> Kategori </label>
            <input type="text" name="kategori" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-danger">Submit</button>
    </form>
</div>
@endsection
