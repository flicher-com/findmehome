@extends('layouts.master')
@section('nav')
    @include('partials.nav')
@endsection

@section('title') Dashboard | FindMeHome @endsection

@section('footer')
    @include('partials.footer')
@endsection
@section('content')
    <section class="aliceblue">
        <div class="container">
            <div class="tab-content">
                <div class="tab-pane fade active in" id="dashborad">
                    <div class="dashboard-tab">
                        <div class="user-details">
                            <div class="row">
                                <div class="col-md-4 col-xs-12">
                                    {{--<div class="user-portfolio lp-border lp-border-radius-8">
                                        <div class="user-info">
                                            <a href="{{ route('property.new-listing-location', $property->id) }}"><button class="btn btn-sm btn-success">Edit your listing</button></a>
                                            <hr>
                                            @if($property->type != 'pg')
                                            <a href="{{ route('property.new-listing-newroom', $property->id) }}"><button class="btn btn-sm btn-default">Add a bedroom</button></a>
                                            @endif
                                            <hr>
                                            @if($property->published == 0)
                                            <form action="{{ route('property.publish', $property->id) }}" method="post">
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-sm btn-success">Publish</button>
                                            </form>
                                            @else
                                                <form action="{{ route('property.unpublish', $property->id) }}" method="post">
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-sm btn-success">Unpublish</button>
                                                </form>
                                            @endif

                                            <hr>
                                            <a href="{{ route('pages.property-details', $property->id) }}"><button class="btn btn-sm btn-primary">View your listing</button></a>
                                            <hr>
                                            <a href="{{ route('property.new-listing-location', $property->id) }}"><button class="btn btn-sm btn-danger">Delete</button></a>

                                        </div><!-- ../user-info -->
                                    </div>--}}
                                    <div class="col-md-12 col-xs-12">
                                        <div class="profile-sidebar">
                                            <div class="profile-usermenu">
                                                <ul class="nav">
                                                    <li class="">
                                                        <a href="{{ route('pages.property-details', $property->id) }}">View your listing</a>
                                                    </li>
                                                    <li class="">
                                                        <a href="{{ route('property.new-listing-location', $property->id) }}">Edit your listing</a>
                                                    </li>
                                                    <li class="">
                                                        @if($property->published == 0)
                                                            <form action="{{ route('property.publish', $property->id) }}" method="post">
                                                                {{ csrf_field() }}
                                                                <button type="submit" class="btn btn-sm btn-success btn-pub-upub">Publish</button>
                                                            </form>
                                                        @else
                                                            <form action="{{ route('property.unpublish', $property->id) }}" method="post">
                                                                {{ csrf_field() }}
                                                                <button type="submit" class="btn btn-sm btn-success btn-pub-upub">Unpublish</button>
                                                            </form>
                                                        @endif
                                                    </li>
                                                    <li class="">
                                                        <form action="{{ route('user.listing.delete', $property->id) }}" method="post">
                                                        {{ csrf_field() }}
                                                            <button type="submit" class="btn btn-sm btn-success btn-pub-upub">Delete</button>
                                                        </form>
                                                    </li>
                                                    {{--<li>
                                                        <span>Share Your Listing with your friends now!</span>
                                                        <!-- AddToAny BEGIN -->
                                                        <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                                            <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                                                            <a class="a2a_button_facebook"></a>
                                                            <a class="a2a_button_twitter"></a>
                                                            <a class="a2a_button_google_plus"></a>
                                                            <a class="a2a_button_email"></a>
                                                        </div>
                                                        <script async src="https://static.addtoany.com/menu/page.js"></script>
                                                        <!-- AddToAny END -->
                                                    </li>--}}

                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{--<div class="row">

                                    <div class="col-xs-2 m-btn-steps">
                                        <button class="btn btn-danger btn-xs" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                            Steps
                                        </button>
                                    </div>

                                    <div class="col-xs-12">
                                        <div class="collapse" id="collapseExample">
                                            <div class="well m-steps-details">
                                                <div class="row">
                                                    <ul class="nav">
                                                        <li class="">
                                                            <a href="{{ route('pages.property-details', $property->id) }}">View your listing</a>
                                                        </li>
                                                        <li class="">
                                                            <a href="{{ route('property.new-listing-location', $property->id) }}">Edit your listing</a>
                                                        </li>
                                                        <li class="">
                                                            @if($property->published == 0)
                                                                <form action="{{ route('property.publish', $property->id) }}" method="post">
                                                                    {{ csrf_field() }}
                                                                    <button type="submit" class="btn btn-sm btn-success btn-pub-upub">Publish</button>
                                                                </form>
                                                            @else
                                                                <form action="{{ route('property.unpublish', $property->id) }}" method="post">
                                                                    {{ csrf_field() }}
                                                                    <button type="submit" class="btn btn-sm btn-success btn-pub-upub">Unpublish</button>
                                                                </form>
                                                            @endif
                                                        </li>
                                                        <li class="">
                                                            <a href="#">Delete</a>
                                                        </li>
                                                        --}}{{--<li>
                                                            <span>Share Your Listing with your friends now!</span>
                                                            <!-- AddToAny BEGIN -->
                                                            <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                                                <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                                                                <a class="a2a_button_facebook"></a>
                                                                <a class="a2a_button_twitter"></a>
                                                                <a class="a2a_button_google_plus"></a>
                                                                <a class="a2a_button_email"></a>
                                                            </div>
                                                            <script async src="https://static.addtoany.com/menu/page.js"></script>
                                                            <!-- AddToAny END -->
                                                        </li>--}}{{--
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>--}}

                                <div class="col-md-8">
                                    <div class="user-box user-description-box lp-border lp-border-radius-8">
                                        {{--<h5 class="text-centered">Publish now</h5>--}}
                                        <div>

                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Your Listing</a></li>
                                                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Messages</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="home">
                                                    <h4>Your Listing has been Successfully Published</h4>
                                                    <h5>You can view Your listing by clicking View Button</h5>
                                                    <a href="{{ route('pages.property-details', $property->id) }}"><button class="btn btn-primary">View</button></a>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="profile">
                                                    @if(count($messages) > 0)
                                                        @foreach($messages as $m)
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading"><strong>Message from </strong>{{ $m->user->first_name }}, <strong>Phone No:</strong>{{ $m->user->phone_no }}</div>
                                                                <div class="panel-body">
                                                                    {{ $m->message }}
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @else
                                                        <span>No Messages yet!</span>
                                                    @endif
                                                </div>
                                            </div>

                                        </div>

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
        $(document).ready(function () {
            $('#myTabs a').click(function (e) {
                e.preventDefault()
                $(this).tab('show')
            })
        });
    </script>
@endsection