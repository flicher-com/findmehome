@extends('layouts.master')
@section('nav')
    @include('partials.nav')
@endsection

@section('title') Reset Password | FindMeHome @endsection

@section('content')
    <!--==================================Section Open=================================-->
    <section>

        <div class="lp-section-row aliceblue">
            <div class="lp-section-content-container-one">
                <div class="container">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="login-form-popup lp-border-radius-8">
                                <div class="siginincontainer">
                                    <h1 class="text-center">Reset Password</h1>
                                    <form class="form-horizontal margin-top-30"  method="post" action="{{ url('/password/reset') }}">
                                        {{ csrf_field() }}

                                        <input type="hidden" name="token" value="{{ $token }}">
                                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="siusername">Email Address *</label>
                                            <input type="text" class="form-control" id="siusername" name="email" value="{{ $email or old('email') }}"/>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="sipassword">Password *</label>
                                            <input type="password" class="form-control" id="sipassword" name="password" />

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                            <label for="sipassword">Confirm Password *</label>
                                            <input type="password" class="form-control" id="sipassword" name="password_confirmation" />

                                            @if ($errors->has('password_confirmation'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <input type="submit" value="Reset Password" class="lp-secondary-btn width-full btn-first-hover" />
                                        </div>
                                    </form>
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
