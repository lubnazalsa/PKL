@extends('template.layout')
@section('title', 'Halaman Create Penerbit')
@section('header')
@include('template.navbar')
@endsection
@section('main')
<div id="layoutSidenav">
@include('template.sidebar')
<div id="layoutSidenav_content">
<main>
<div class="container-fluid px-4">
<h1 class="mt-4">Penerbit</h1>
<ol class="breadcrumb mb-4">
<li class="breadcrumb-item active">Halaman Create Data Penerbi

t</li>
</ol>

<form action="{{ route('action.createpenerbit') }}" class="row my-
4 gap-3" method="post">

@csrf
<div class="form-group col-12 col-md-6 col-lg-4">
<label for="nama" class="form-label">Nama Penerbit</label>
<input type="text" name="nama" id="nama" class="form-contr

ol" placeholder="Masukkan nama penerbit">

</div>
<div class="form-group col-12 col-md-6 col-lg-4">
<label for="alamat" class="form-label">Alamat Penerbit</la

bel>

<input type="text" name="alamat" id="alamat" class="form-c

ontrol" placeholder="Masukkan alamat penerbit">

</div>
<div class="form-group col-12 col-md-6 col-lg-4">
<label for="notelp" class="form-label">No Telp Penerbit</l

abel>

<input type="number" name="notelp" id="notelp" class="form

-control" placeholder="Masukkan notelp penerbit">

</div>
<div class="form-group col-12 col-md-6 col-lg-4">
<label for="email" class="form-label">Email Penerbit</labe

l>

<input type="email" name="email" id="email" class="form-co

ntrol" placeholder="Masukkan email penerbit">

</div>
<div class="form-group col-12 col-md-6 col-lg-4">
<button class="btn btn-success" type="submit">Tambahkan</b

utton>

</div>
</form>
</div>
</main>
@include('template.footer')
</div>
</div>
@endsection