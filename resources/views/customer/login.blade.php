@extends('master')

@section('title', $config->company_name . ' | Category')
@section('description', 'Category list')
@section('image', $config->logo)
@section('url', url()->full())
@section('keywords', 'Ecommerce automation')

@section('main-section')
<!-- breadcrumb__start -->
<div class="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb__title">
                    <h1>Login</h1>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="color__blue">Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb__end -->

<!-- login__section__start -->
<div class="loginarea d-flex justify-content-center align-items-center" style="min-height: 100vh; background-color: #f4f6f9;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="loginarea__wraper" style="background-color: #ffffff; padding: 30px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 8px;">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="loginarea__form" style="margin-bottom: 20px;">
                            <label class="form__label" for="phone" style="font-size: 16px; color: #333;">Phone</label>
                            <input id="phone" name="phone" class="common__login__input" type="number" placeholder="Your username or email" required style="width: 100%; padding: 10px; margin-top: 8px; border-radius: 4px; border: 1px solid #ccc;"/>
                        </div>

                        <div class="loginarea__form" style="margin-bottom: 20px;">
                            <label class="form__label" for="password" style="font-size: 16px; color: #333;">Password</label>
                            <input id="password" name="password" class="common__login__input" type="password" placeholder="Password" required style="width: 100%; padding: 10px; margin-top: 8px; border-radius: 4px; border: 1px solid #ccc;"/>
                        </div>

                        <div class="loginarea__form d-flex justify-content-between flex-wrap gap-2" style="margin-bottom: 20px;">
                            <div class="form__check" style="font-size: 14px; color: #333;">
                                <input type="checkbox" name="remember" id="login__privacy" />
                                <label for="login__privacy" style="margin-left: 5px;">Remember Me</label>
                            </div>
                            <div class="text-end login__form__link">
                                <a href="#" style="font-size: 14px; color: #007bff; text-decoration: none;">Forgot your password?</a>
                            </div>
                        </div>

                        <div class="loginarea__button text-center" style="margin-top: 20px;">
                            <button type="submit" class="default__button" style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 4px; font-size: 16px; cursor: pointer;">Log In</button>
                        </div>

                        <p class="login__description" style="text-align: right !important; margin-top: 20px; font-size: 14px; color: #333;">
                            Already have an account? 
                            <a href="{{ route('register') }}" style="color: #007bff; text-decoration: none;">Register</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- login__section__end -->
@endsection




{{-- <!-- Breadcrumb Section -->
<div class="page-header py-4 bg-light">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active" aria-current="page">Login / Register</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Login/Register Section -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <div class="mb-4 text-center">
                            <h3 class="mb-3">Login</h3>
                        </div>

                        @if(session('message'))
                            <p class="text-danger text-center">{{ session('message') }}</p>
                        @endif

                        <form method="post" action="{{ route('login-check') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" required name="user_name" class="form-control" placeholder="Your Email Or Phone">
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" required name="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group d-flex justify-content-between align-items-center mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="rememberMe" name="checkbox">
                                    <label class="form-check-label" for="rememberMe">Remember me</label>
                                </div>
                                <a href="#" class="text-muted small">Forgot password?</a>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary w-100">Log In</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Spacer for large screen -->
            <div class="col-lg-1 d-none d-lg-block"></div>

            <!-- Register Section -->
            <div class="col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <div class="mb-4 text-center">
                            <h3 class="mb-3">Create an Account</h3>
                        </div>
                        <p class="text-muted small mb-4">
                            Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy.
                        </p>

                        <form method="post" action="{{ route('new-customer') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" required name="name" class="form-control" placeholder="Full Name">
                            </div>
                            <div class="form-group mb-3">
                                <input type="email" required name="email" class="form-control" placeholder="Email Address">
                            </div>
                            <div class="form-group mb-3">
                                <input type="number" required name="phone" class="form-control" placeholder="Mobile Number">
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" required name="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" required name="password_confirmation" class="form-control" placeholder=" confirm Password">
                            </div>

                            <div class="form-group d-flex align-items-center mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="agreeTerms" name="checkbox" checked>
                                    <label class="form-check-label" for="agreeTerms">
                                        I agree to terms & Policy
                                    </label>
                                </div>
                                <a href="page-privacy-policy.html" class="ms-auto small text-muted">
                                    <i class="bi bi-book"></i> Learn more
                                </a>
                            </div>

                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-success w-100">Submit & Register</button>
                            </div>
                        </form>

                        <div class="text-center my-3">
                            <span class="text-muted">or</span>
                        </div>

                   

                        <div class="text-center mt-3">
                            <span class="text-muted small">Already have an account? </span>
                            <a href="{{ route('login-register') }}" class="small">Sign in now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</section> --}}

{{-- @endsection --}}
