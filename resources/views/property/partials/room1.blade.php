@extends('layouts.master')
@section('nav')
    @include('partials.nav')
@endsection
@section('content')
    <section class="aliceblue">
        <div class="container">
            @include('property.partials.menu')

            <div class="row">
                <div class="col-sm-12 col-sm-offset-0">
                    <div class="row">
                        @if(count($pub_rooms) > 0)
                            <h4>{{ count($pub_rooms) }} rooms available (Published)</h4>
                            <div class="col-md-12 wiz-content">
                                @foreach($pub_rooms as $room)
                                    <div class="col-md-3 col-sm-6 lp-grid-box-contianer card1" data-title="The Dorchester grill" data-reviews="4" data-number="+007-123-4567-89" data-email="jhonruss@example.com" data-website="www.example.com" data-price="$200" data-pricetext="Text about your price" data-description="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi archeum" data-userimage="images/user-thumb-94x94.png" data-username="Jhon Russel" data-userlisting="14" data-fb="www.facebook.com" data-gplus="www.plus.google.com" data-linkedin="www.linkedin.com" data-instagram="www.instagram.com" data-twitter="www.twitter.com" data-lattitue="40.6700" data-longitute="-73.9400"  data-id="1" >
                                        <div class="lp-grid-box lp-border lp-border-radius-8">
                                            <div class="lp-grid-box-description ">
                                                <h4 class="lp-h4">
                                                    <a href="#">
                                                        @if($room->multi_room == 1) {{ count(explode(';', $room->room_name)) . 'Rooms' }} @else {{ $room->room_name }} @endif
                                                    </a>
                                                </h4>

                                                <ul class="lp-grid-box-price">
                                                    <li><span>&#8377;{{ $room->rent }}</span></li>
                                                </ul>
                                            </div><!-- ../grid-box-description-->
                                            <div class="lp-grid-box-bottom">
                                                <div class="pull-left">
                                                    <a href="@if($room->multi_room == 1) {{ route('property.multiple.room.edit', $room->id) }} @else {{ route('property.new-listing-newroom-edit', $room->id) }} @endif"><button class="btn btn-xs btn-default">Edit</button></a>
                                                </div>
                                                <div class="pull-left btndel">
                                                    <a href="{{ route('property.new-listing-newroom-edit', $room->id) }}"><button class="btn btn-xs btn-default">Delete</button></a>
                                                </div>
                                                <div class="pull-right">
                                                    <form action="{{ route('property.new-listing-room-unpublish', $room->id) }}" method="post">
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-xs btn-default">Unpublish</button>
                                                    </form>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div><!-- ../grid-box-bottom-->
                                        </div><!-- ../grid-box -->
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <h4>No rooms available (published)</h4>
                        @endif
                        <div class="col-md-12 wiz-content">
                            <a href="{{ route('property.new-listing-newroom', $property->id) }}">
                                <button class="btn btn-lg btn-primary">Add a room</button>
                            </a>
                            <a href="{{ route('property.multiple.room', $property->id) }}">
                                <button class="btn btn-lg btn-primary">Add Multiple Rooms under same Price</button>
                            </a>
                        </div>
                        @if(count($un_pub_rooms) > 0)
                            <h4>{{ count($un_pub_rooms) }} rooms unavailable (Not published)</h4>
                            <div class="col-md-12 wiz-content">
                                @foreach($un_pub_rooms as $room)
                                    <div class="col-md-3 col-sm-6 lp-grid-box-contianer card1"  >
                                        <div class="lp-grid-box lp-border lp-border-radius-8">
                                            <div class="lp-grid-box-description ">
                                                <h4 class="lp-h4">
                                                    <a href="#">
                                                        @if($room->multi_room == 1) {{ count(explode(';', $room->room_name)) . 'Rooms' }} @else {{ $room->room_name }} @endif
                                                    </a>
                                                </h4>

                                                <ul class="lp-grid-box-price">
                                                    <li><span>&#8377;{{ $room->rent }}</span></li>
                                                </ul>
                                            </div><!-- ../grid-box-description-->
                                            <div class="lp-grid-box-bottom">
                                                <div class="pull-left">
                                                    <a href="@if($room->multi_room == 1) {{ route('property.multiple.room.edit', $room->id) }} @else {{ route('property.new-listing-newroom-edit', $room->id) }} @endif"><button class="btn btn-xs btn-default">Edit</button></a>
                                                </div>
                                                <div class="pull-left btndel">
                                                    <a href="{{ route('property.new-listing-newroom-edit', $room->id) }}"><button class="btn btn-xs btn-default">Delete</button></a>
                                                </div>
                                                <div class="pull-right">
                                                    <form action="{{ route('property.new-listing-room-publish', $room->id) }}" method="post">
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-xs btn-default">Publish</button>
                                                    </form>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div><!-- ../grid-box-bottom-->
                                        </div><!-- ../grid-box -->
                                    </div>
                                @endforeach
                            </div>
                        @endif
                        <a href="{{ route('property.new-listing-location', $property->id) }}">
                            <button class="btn btn-lg btn-success">Previous</button>
                        </a>
                        <a href="{{ route('property.new-listing-description', $property->id) }}">
                            <button class="btn btn-lg btn-danger btn-right">Save & Continue</button>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')
@endsection