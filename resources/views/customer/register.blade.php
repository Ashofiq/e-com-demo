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
                    <h1>Register</h1>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="color__blue">Register</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb__end -->

<!-- login__section__start -->
<div class="loginarea d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="loginarea__wraper" style="border: 1px solid #ddd; padding: 20px; border-radius: 10px;">
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form__label">Name</label>
                                <input class="common__login__input w-100" type="text" name="name" placeholder="Your Name" required style="border: 1px solid #ccc; padding: 10px; border-radius: 5px; width: 100%; box-sizing: border-box; margin-bottom: 15px;" />
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form__label">Email</label>
                                <input class="common__login__input w-100" type="email" name="email" placeholder="Your Email" required style="border: 1px solid #ccc; padding: 10px; border-radius: 5px; width: 100%; box-sizing: border-box; margin-bottom: 15px;" />
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form__label">Phone</label>
                                <input class="common__login__input w-100" type="number" name="phone" placeholder="Phone Number" required style="border: 1px solid #ccc; padding: 10px; border-radius: 5px; width: 100%; box-sizing: border-box; margin-bottom: 15px;" />
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form__label">Password</label>
                                <input class="common__login__input w-100" type="password" name="password" placeholder="Password" required style="border: 1px solid #ccc; padding: 10px; border-radius: 5px; width: 100%; box-sizing: border-box; margin-bottom: 15px;" />
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form__label">Confirm Password</label>
                                <input class="common__login__input w-100" type="password" name="password_confirmation" placeholder="Re-Enter Password" required style="border: 1px solid #ccc; padding: 10px; border-radius: 5px; width: 100%; box-sizing: border-box; margin-bottom: 15px;" />
                            </div>
                        </div>

                        <div class="form__check mb-3" style="margin-bottom: 15px;">
                            <input type="checkbox" id="regi__privacy" required style="border: 1px solid #ccc; margin-right: 5px;" />
                            <label for="regi__privacy">Accept the Terms and Privacy Policy</label>
                        </div>

                        <div class="login__button text-center">
                            <button type="submit" class="default__button btn btn-primary" style="border: none; border-radius: 5px; padding: 10px 20px;">Sign Up</button>
                        </div>

                        
                        <p class="login__description" style="text-align: right !important; margin-top: 20px; font-size: 14px; color: #333;">
                            Already have an account? 
                            <a href="{{ route('login') }}" style="color: #007bff; text-decoration: none;">Login</a>
                        </p>
                     
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- login__section__end -->




@endsection
