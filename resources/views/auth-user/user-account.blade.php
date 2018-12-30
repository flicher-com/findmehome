@extends('layouts.master')
@section('nav')
    @include('partials.nav')
@endsection

@section('title') Account | FindMeHome @endsection

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
                                <div class="col-md-8">
                                    <form action="{{ route('user.account-password-post') }}" method="post">
                                        {{ csrf_field() }}
                                        <div class="user-box user-description-box lp-border lp-border-radius-8">
                                            <h5>Change Password</h5>
                                            <hr>
                                            <strong>Password</strong>
                                            <input type="password" class="form-control" name="password">
                                            <strong>Confirmation</strong>
                                            <input type="password" class="form-control" name="password_confirmation">
                                            <input type="submit" class="btn btn-danger save-btn" value="Save">
                                        </div>
                                    </form>
                                    <form action="{{ route('user.account-email-post') }}" method="post">
                                        {{ csrf_field() }}
                                        <div class="user-box user-description-box lp-border lp-border-radius-8">
                                            <h5>Change your email</h5>
                                            <hr>
                                            <strong>Email</strong>
                                            <input type="text" value="{{ $user->email }}" class="form-control" name="email">
                                            <input type="submit" class="btn btn-danger save-btn" value="Save">
                                        </div>
                                    </form>
                                    <div class="user-box user-description-box lp-border lp-border-radius-8">
                                        <h5>Delete your account</h5>
                                        <hr>
                                        <input type="submit" class="btn btn-danger btn-lg save-btn" value="Delete">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection