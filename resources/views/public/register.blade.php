@extends('template.layout')
@section('title', 'Register - Web Perpustakaan')
@section('header')
    <style>
        .img-logo {
            width: 82px;
            margin: 24px auto;
            display: block;
        }

        @media only screen and (max-width: 576px) {
            .register-container {
                padding: 50px 30px;
            }
        }

        @media only screen and (min-width: 576px) {
            .register-container {
                padding: 50px 120px;
            }
        }

        @media only screen and (min-width: 768px) {
            .register-container {
                padding: 50px 200px;
            }
        }

        @media only screen and (min-width: 992px) {
            .register-container {
                padding: 50px 300px;
            }
        }

        @media only screen and (min-width: 1200px) {
            .register-container {
                padding: 50px 460px;
            }
        }
    </style>
@endsection

@section('main')
<section class="register-container">
    <div class="card shadow-lg">
        <div class="card-header">
            <img src="{{ asset('logo.jpg') }}" alt="..." class="img-logo">
            <h3 class="text-center">Register - Web PKL</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('register.action')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-label">Name *</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name">
                </div>
                <div class="form-group my-3">
                    <label for="username" class="form-label">Username *</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Enter your username">
                </div>
                <div class="form-group my-3">
                    <label for="password" class="form-label">Password *</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
                </div>
                <div class="form-group my-3">
                    <label for="password_confirmation" class="form-label">Password Confirmation *</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm your password">
                </div>
                <div class="form-group my-3">
                    <button class="btn btn-primary" type="submit">Register</button>
                </div>
            </form>
        </div>
        <div class="card-footer">
            <p class="text-primary text-center">Already have an account? <a href="{{ route('login') }}">Login</a></p>
        </div>
    </div>
</section>
@endsection
