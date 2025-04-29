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
<div class="loginarea sp_bottom_80 sp_top_80">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-md-2 loginarea__col">
                <button 
                class="btn btn-primary col-12 active single__tab__link" 
                data-bs-toggle="tab" 
                data-bs-target="#register_tab" 
                type="button" 
                role="tab" 
                aria-controls="register_tab" 
                aria-selected="true"
                tabindex="0">
                Sign Up
              </button>
              
            </div>

            <div class="tab-content tab__content__wrapper" id="myTabContent">
                <div class="tab-pane fade show active" id="register_tab" role="tabpanel">
                    <div class="col-xl-8 offset-md-2 loginarea__col">
                        <div class="loginarea__wraper">
                            <div class="loginarea__heading">
                                <h5 class="login__title">Sign Up</h5>
                                <p class="login__description">
                                    Already have an account?
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#registerModal">Log In</a>
                                </p>
                            </div>

                            <form action="{{ route('new-customer') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="loginarea__form">
                                            <label class="form__label">Name</label>
                                            <input class="common__login__input" type="text" name="name" placeholder="Your Name" required />
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="loginarea__form">
                                            <label class="form__label">Email</label>
                                            <input class="common__login__input" type="email" name="email" placeholder="Your Email" required />
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="loginarea__form">
                                            <label class="form__label">Phone</label>
                                            <input class="common__login__input" type="number" name="phone" placeholder="Phone Number" required />
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="loginarea__form">
                                            <label class="form__label">Password</label>
                                            <input class="common__login__input" type="password" name="password" placeholder="Password" required />
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="loginarea__form">
                                            <label class="form__label">Confirm Password</label>
                                            <input class="common__login__input" type="password" name="password_confirmation" placeholder="Re-Enter Password" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="loginarea__form d-flex justify-content-between flex-wrap gap-2">
                                    <div class="form__check">
                                        <input type="checkbox" id="regi__privacy" required />
                                        <label for="regi__privacy">Accept the Terms and Privacy Policy</label>
                                    </div>
                                </div>

                                <div class="login__button">
                                    <button type="submit" class="default__button text-center">Sign Up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- tab-pane -->
            </div> <!-- tab-content -->
        </div>
    </div>
</div>
<!-- login__section__end -->

@endsection
