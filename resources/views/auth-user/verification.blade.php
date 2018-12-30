@extends('layouts.master')
@section('nav')
    @include('partials.nav')
@endsection

@section('title') Verifications | FindMeHome @endsection

@section('footer')
    @include('partials.footer')
@endsection
@section('content')
    <section class="aliceblue">
        <div class="container-fluid">
            <div class="tab-content">
                <div class="tab-pane fade active in" id="dashborad">
                    <div class="dashboard-tab">
                        <div class="user-details">
                            @include('errors.error')

                            <div class="row">
                                <div class="col-md-4">
                                    @include('pages.partials.sidebar')
                                </div>
                                <?php
                                if($country == 'ca') {
                                    $country_code = '1';
                                } elseif($country == 'in') {
                                    $country_code = '91';
                                }
                                ?>


                                <div class="col-md-8">
                                    <div class="user-box user-description-box lp-border lp-border-radius-8">
                                        <h5>FindMeHome is a community based on trust</h5>
                                        <hr>
                                        <p> Verify your profile and earn trust from the community. With a verified profile, users are seen as three times more trustworthy than others.</p>
                                    </div>
                                    {{--<div class="user-box user-description-box lp-border lp-border-radius-8">
                                        <h5>Verify your ID</h5>
                                        <hr>
                                        <input type="submit" class="btn btn-danger btn-lg save-btn" value="Start">
                                    </div>--}}

                                    <div class="user-box user-description-box lp-border lp-border-radius-8">
                                        <h5>Verify your email</h5>
                                        <hr>
                                        @if($user->email_verified == 0)
                                            <strong>Confirmation pending</strong>
                                            <p>A confirmation link was sent to your email address</p>
                                            <p>Haven't received the email yet?
                                            <form action="{{ route('user.account-verifications-email-post') }}" method="post">
                                                {{ csrf_field() }}
                                                <input type="submit" class="btn btn-xs" value="Send email again">
                                            </form>
                                        @elseif($user->email_verified == 1)
                                            <div class="row">
                                                <div class="col-md-4 col-md-offset-4 text-center verified-phone">
                                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                    <h5>Email Verified</h5>
                                                </div>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="user-box user-description-box lp-border lp-border-radius-8">
                                        <h5>Verify your phone number</h5>
                                        <hr>
                                        <div class="err">

                                        </div>

                                        <form action="{{ route('send.otp') }}" method="post">
                                            <input type="hidden" id="csrf-token" name="_token" value="{{ csrf_token() }}">
                                            <div class="row e-phone-no @if(Auth::user()->phone_verified == 1) hidden @endif">
                                                <h5 align="center">Confirmation pending</h5>
                                                <h6 align="center">Please Enter Your Phone Number</h6>
                                                <div class="col-md-7 ">
                                                    <div class="input-group input-center">
                                                        <span class="input-group-addon">+{{ $country_code }}</span>
                                                        <input type="tel" class="form-control phone-no" minlength="10" maxlength="10" placeholder="----------">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-primary verify1">Verify</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-md-offset-0 text-center e-pin-code hidden">
                                                    <h5 align="center">SMS sent to +{{ $country_code }}-<span class="pno"></span></h5>
                                                    <h6 align="center">Enter 4 digit pin</h6>
                                                    <input type="text" class="form-control pin-code" minlength="4" maxlength="4" placeholder="----">
                                                    <button type="button" class="btn btn-primary pinverify">Verify</button>
                                                    <br>
                                                    <button type="button" class="btn btn-success resend">Resend Code</button>
                                                    <button type="button" class="btn btn-danger change-phone">Change Phone Number</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 col-md-offset-4 text-center verified-phone @if(Auth::user()->phone_verified != 1) hidden @endif">
                                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                    <h5>+{{ $country_code }}-<span class="pno">{{ Auth::user()->phone_no }}</span> Verified</h5> <a href="#" class="change-phone">Change Phone Number</a>
                                                </div>
                                            </div>
                                        </form>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        /*$(document).ready(function () {
         $(".verify").click(function () {
         $(".e-phone-no").addClass("hidden");
         $(".e-pin-code").removeClass("hidden");
         });

         $(".change-phone").click(function () {
         $(".e-phone-no").removeClass("hidden");
         $(".e-pin-code").addClass("hidden");
         });
         });*/

        $(document).ready(function() {

            $('.verify1').on('click', function (e) {
                e.preventDefault();
                $(".pin-code").val("");

                var phoneno = $(".phone-no").val();

                $.ajax({
                    type: 'POST',
                    url: '/sendotp',
                    data: {phoneno: phoneno, _token: $('#csrf-token').val()},
                    dataType: 'json',
                    success: function () {
                        $('.err').empty();
                        $(".e-phone-no").addClass("hidden");
                        $(".pno").empty();
                        $(".pno").append(phoneno);
                        $(".e-pin-code").removeClass("hidden");
                    },

                    error: function(data) {
                        var errors = data.responseJSON; //this will get the errors response data.

                        var errorsHtml = '<div class="alert alert-danger"><ul>';

                        $.each( errors.message, function( key, value ) {
                            errorsHtml += '<li>' + value[0] + '</li>'; //showing only the first error.
                        });
                        errorsHtml += '</ul></div>';

                        $( '.err' ).html( errorsHtml );
                    }
                });
            });

            $('.resend').on('click', function (e) {
                e.preventDefault();
                $(".pin-code").val("");

                var phoneno = $(".phone-no").val();
                $.ajax({
                    type: 'POST',
                    url: '/sendotp',
                    data: {phoneno: phoneno, _token: $('#csrf-token').val()},
                    dataType: 'json',
                    success: function () {
                        var errorsHtml = '<div class="alert alert-danger"><ul><li>SMS Sent Successfully!</li></ul></div>';
                        $( '.err' ).html( errorsHtml );
                    }
                });
            });

            $('.pinverify').on('click', function (e) {
                e.preventDefault();
                var phoneno = $(".phone-no").val();

                var otp = $(".pin-code").val();
                $.ajax({
                    type: 'POST',
                    url: '/verifyotp',
                    data: {phoneno: phoneno, otp: otp, _token: $('#csrf-token').val()},
                    dataType: 'json',
                    success: function () {
                        $('.err').empty();
                        $(".e-pin-code").addClass("hidden");
                        $(".verified-phone").removeClass("hidden");
                    },
                    error: function(data) {
                        var errors = data.responseJSON; //this will get the errors response data.

                        var errorsHtml = '<div class="alert alert-danger"><ul>';

                        $.each( errors.message, function( key, value ) {
                            errorsHtml += '<li>' + value[0] + '</li>'; //showing only the first error.
                        });
                        errorsHtml += '</ul></div>';

                        $( '.err' ).html( errorsHtml );
                        console.log(errors.message);
                    }
                });
            });

            $(".change-phone").click(function () {
                $(".e-phone-no").removeClass("hidden");
                $(".e-pin-code").addClass("hidden");
                $(".verified-phone").addClass("hidden");
            });


        });
    </script>
@endsection