@extends('layouts.master')
@section('nav')
    @include('partials.nav')
@endsection

@section('title') Login | FindMeHome @endsection

@section('content')
        <!--==================================Section Open=================================-->
<section>

    <div class="lp-section-row aliceblue">
        <div class="lp-section-content-container-one">
            <div class="container">
            @include('errors.error')
                <div class="row">
                    <div class="col-md-12">
                        <div class="login-form-popup lp-border-radius-8">
                            <div class="siginincontainer">
                                <h1 class="text-center">Sign in</h1>
                                <form class="form-horizontal margin-top-30"  method="post" action="{{ url('/login') }}">
                                {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="siusername">Username or Email Address *</label>
                                        <input type="text" class="form-control" id="siusername" name="email" value="{{ old('email') }}"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="sipassword">Password *</label>
                                        <input type="password" class="form-control" id="sipassword" name="password" />
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox pad-bottom-10">
                                            <input id="check1" type="checkbox" name="remember">
                                            <label for="check1">Keep me signed in</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" value="Sign in" class="lp-secondary-btn width-full btn-first-hover" />
                                    </div>
                                </form>
                                <div class="pop-form-bottom">
                                    <div class="bottom-links">
                                        <a href="/register" class="{{--signUpClick--}}">Not a member? Sign up</a>
                                        <a  class="forgetPasswordClick pull-right" >Forgot Password</a>
                                    </div>
                                    <p class="margin-top-15">Connect with your Social Network</p>
                                    <ul class="social-login list-style-none">
                                        <li>
                                            <a href="{{ route('social.redirect', ['provider' => 'google']) }}">
                                                <button class="google flaticon-googleplus" ><i class="fa fa-google-plus"></i><span>Google</span></button>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ route('social.redirect', ['provider' => 'facebook']) }}">
                                                <button class="facebook flaticon-facebook" ><i class="fa fa-facebook"></i><span>Facebook</span></button>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('social.redirect', ['provider' => 'twitter']) }}">
                                                <button class="twitter flaticon-twitter" ><i class="fa fa-twitter"></i><span>Twitter</span></button>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <a class="md-close"><i class="fa fa-close"></i></a>
                            </div>

                            <div class="forgetpasswordcontainer">
                                <h1 class="text-center">Forgotten Password</h1>
                                <form class="form-horizontal margin-top-30" action="{{ route('auth.password-post') }}"  method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="fpassword">Email Address *</label>
                                        <input type="email" name="email" class="form-control" id="fpassword" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Get New Password" class="lp-secondary-btn width-full btn-first-hover" />
                                    </div>
                                </form>
                                <div class="pop-form-bottom">
                                    <div class="bottom-links">
                                        <a class="cancelClick" >Cancel</a>
                                    </div>
                                </div>
                                <a class="md-close"><i class="fa fa-close"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- ../section-row -->

</section>
<!--==================================Section Close=================================-->
    @include('partials.footer')
@endsection
