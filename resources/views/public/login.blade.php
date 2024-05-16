@extends('template.layout')
@section('title', 'Login - Web Perpustakaan')
@section('header')
    <style>
        .img-logo {
    width: 82px;
    margin: 24px auto;
    display: block;
    }

@media only screen and (max-width: 576px) {
        .login-container {
        padding: 50px 30px;
        }
    }
        @media only screen and (min-width: 576px) {
        .login-container {
        padding: 50px 120px;
        }
        }
        @media only screen and (min-width: 768px) {
        .login-container {
        padding: 50px 200px;
        }
        }
        @media only screen and (min-width: 992px) {
        .login-container {
        padding: 50px 300px;
        }
        }
        @media only screen and (min-width: 1200px) {
        .login-container {
        padding: 50px 460px;
        }
    }
    </style>
@endsection
@section('main')
<section class="login-container">
<div class="card shadow-lg">
<div class="card-header">
    <img src="{{ asset('logo.jpg') }}" alt="..." class="img-logo">


<h3 class="text-center">Login - Web PKL</h3>
</div>
<div class="card-body">
<form action="">
<div class="form-group">
<label for="username" class="form-label">Username *</label>

<input type="text" name="username" id="username" class="form-control" placeholder="Masukkan username Anda">

</div>
<div class="form-group my-3">
    <label for="password" class="form-label">Password *</label>
        
        <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password Anda">
        
        </div>
        <div class="form-group my-3">
        <button class="btn btn-primary" type="submit">Login</button>
        
        </div>
        </form>
        </div>
        <div class="card-footer">
        <a href="#"><p class="text-primary text-center">Tidak punya akun?Silahkan mendaftar</p></a>
        </div>
        </div>
        </section>
        @endsection