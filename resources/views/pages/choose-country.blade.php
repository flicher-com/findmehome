@extends('layouts.master')
@section('nav')
    @include('partials.nav')
@endsection

@section('title') FindMeHome | Find rooms where ever you go, anytime, at any cost @endsection

@section('footer')
    @include('partials.footer')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <h2 class="text-center">Please choose one of these country to continue!</h2>
            <div class="col-md-4 col-md-offset-2 col-xs-6">
                <a href="{{ route('country.change', 'ca') }}">
                    <img class="img-responsive" src="/assets/images/country-flags/canada-big.png" alt="">
                    <h4 class="country_text">Canada</h4>
                </a>
            </div>
            <div class="col-md-4 col-md-offset-2 col-xs-6">
                <a href="{{ route('country.change', 'in') }}">
                    <img class="img-responsive" src="/assets/images/country-flags/india-big.png" alt="">
                    <h4 class="country_text">India</h4>
                </a>
            </div>
        </div>
    </div>
@endsection