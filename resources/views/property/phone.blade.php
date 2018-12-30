@extends('layouts.master')
@section('nav')
    @include('partials.nav')
@endsection

@section('title') Phone | FindMeHome @endsection

@section('content')
    <section class="aliceblue">
        <div class="container">
            @include('property.partials.menu')

            <div class="row">
                <div class="col-sm-12 col-sm-offset-0">
                    @include('errors.error')
                    <div class="err">

                    </div>
                    <?php

                    if($country == 'in') {
                        $country_code = '91';
                    } elseif($country == 'ca') {
                        $country_code = '1';
                    }
                    ?>
                    <div class="row">
                        <form action="{{ route('phone.post', $property->id) }}" method="post" onkeypress="return event.keyCode != 13;">
                            <input type="hidden" id="csrf-token" name="_token" value="{{ csrf_token() }}">
                            <div class="col-md-12 wiz-content">
                                <h4 align="center">Phone number certification</h4>

                                <div class="row">

                                    <div class="col-md-4 col-md-offset-4 text-center e-phone-no @if(Auth::user()->phone_verified == 1) hidden @endif">
                                        <h5 align="center">Enter Your Phone number</h5>
                                        <div class="input-group phone-input">
                                            <span class="input-group-addon">+{{ $country_code }}</span>
                                            <input type="tel" class="form-control phone-no" minlength="10" maxlength="10" placeholder="----------" @if(Auth::user()->phone_verified == 0) required @endif>
                                        </div>
                                        <input type="checkbox" value="1" class="private" name="private" data-toggle="tooltip" data-placement="left" title="If you select this option, vistors can't able to see your phone no" >Make my Number Private! <br>
                                        <button type="button" class="btn btn-primary verify">Verify</button>
                                    </div>

                                    <div class="col-md-4 col-md-offset-4 text-center e-pin-code hidden">
                                        <h5 align="center">SMS sent to +{{ $country_code }}-<span class="pno"></span></h5>
                                        <h6 align="center">Enter 4 digit pin</h6>
                                        <input type="text" class="form-control pin-code" minlength="4" maxlength="4" placeholder="----" @if(Auth::user()->phone_verified == 0) required @endif>
                                        <button type="button" class="btn btn-primary pinverify">Verify</button>
                                        <br>
                                        <button type="button" class="btn btn-success resend">Resend Code</button>
                                        <button type="button" class="btn btn-danger change-phone">Change Phone Number</button>
                                    </div>

                                    <div class="col-md-4 col-md-offset-4 text-center verified-phone @if(Auth::user()->phone_verified != 1) hidden @endif">
                                        <h5 align="center">You are all set, Click on publish button to Publish your Listing.</h5>
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                        <h5>+{{ $country_code }}-<span class="pno">{{ Auth::user()->phone_no }}</span> Verified</h5> <a href="#" class="change-phone">Change Phone Number</a>
                                    </div>
                                </div>



                            </div>

                            <a href="{{ route('property.new-listing-photos', $property->id) }}">
                                <button type="button" class="btn btn-lg btn-success">Previous</button>
                            </a>
                            <a href="{{ route('property.new-listing-description', $property->id) }}">
                                <button class="btn btn-lg btn-danger btn-right">Publish</button>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.footer')
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

            $('.verify').on('click', function (e) {
                e.preventDefault();
                $(".pin-code").val("");

                var phoneno = $(".phone-no").val();
                if ($('input.checkbox_check').is(':checked')) {
                    var privateno = 1;
                } else {
                    var privateno = 0;
                }

                $.ajax({
                    type: 'POST',
                    url: '/sendotp',
                    data: {phoneno: phoneno, private: privateno, _token: $('#csrf-token').val()},
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