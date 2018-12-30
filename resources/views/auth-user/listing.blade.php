@extends('layouts.master')
@section('nav')
    @include('partials.nav')
@endsection

@section('title') Listings | FindMeHome @endsection

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
                            <div class="row">
                                <div class="col-md-4">
                                    @include('pages.partials.sidebar')
                                </div>
                                <div class="col-md-8">
                                    @include('errors.error')
                                    @if(count($properties) != 0)
                                        @foreach($properties as $property)
                                            <?php
                                            $steps = explode(',', $property->step_completed);

                                            //house
                                            $rooms = $property->rooms;
                                            $rent = array();

                                            foreach ($rooms as $room) {
                                                array_push($rent, (int)$room->rent);
                                            }

                                            // pg
                                            $pg = $property->pg;
                                            $pgrooms = $pg['pgrooms'];

                                            $pgrent = array();

                                            for ($i=0; $i<count(array($pgrooms)); $i++) {
                                                array_push($pgrent, $pgrooms[$i]['rent']);
                                                //print_r($pgrooms[$i]['rent']);
                                            }

                                            ?>

                                            <div class="lp-list-view d-listing">
                                                <div class="lp-list-view-inner-contianer lp-border lp-border-radius-8 clearfix">
                                                    <div class="lp-list-view-thumb">
                                                        <div class="lp-list-view-thumb-inner">
                                                            @if(count($property->photos) > 0)
                                                                <?php $pic = $property->photos->first() ?>
                                                                <img src="/images/icon_size/{{ $pic->photo_name }}"  alt="list-1" />
                                                            @endif
                                                            @if(count($property->photos) == 0)
                                                                <img src="/assets/images/default.png"  alt="list-1" />
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="lp-list-view-content listing-wii">
                                                        <div class="lp-list-view-content-upper">
                                                            <h4>{{ $property->type }} for rent @if($property->locality != '') in {{ $property->locality }} @endif</h4>
                                                            <ul class="lp-grid-box-price">
                                                                <li><strong>Adddress: </strong>{{ substr($property->address, 0, 200).'...' }}</li>
                                                                <br>
                                                            </ul>
                                                        </div>
                                                        <div class="btn-em lp-list-view-content-bottom">
                                                            <ul class="list-style-none list-pt-display">
                                                                <li>
                                                                    <a target="_blank" href="{{ route('pages.property-details', $property->id) }}">
                                                                        <button class="btn btn-sm btn-success">View</button>
                                                                    </a>
                                                                </li>
                                                                @if(!Auth::guest())
                                                                    @if(Auth::user()->id == $user->id)
                                                                        <li>
                                                                            <a href="{{ route('property.new-listing-location', $property->id) }}">
                                                                                <button class="btn btn-sm btn-info">Edit</button>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="{{ route('property.dashboard', $property->id) }}">
                                                                                <button class="btn btn-sm btn-primary">Manage</button>
                                                                            </a>
                                                                        </li>
                                                                        {{--<li>
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
                                                                        </li>--}}
                                                                        <li>
                                                                            <form action="{{ route('user.listing.delete', $property->id) }}" method="post">
                                                                                {{ csrf_field() }}
                                                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                                            </form>
                                                                        </li>
                                                                    @endif
                                                                @endif
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <?php
                                                        if($country == 'ca') {
                                                            $currency = '&#36;';
                                                        } else {
                                                            $currency = '&#8377;';
                                                        }
                                                    ?>

                                                    @if($country == 'in')
                                                        @if(count($rooms) == 0 && count($pg) == 0 && count($property->commercial) == 0)

                                                        @else
                                                            <div class="pull-right listing-price">
                                                                @if($property->type == 'house')
                                                                    @if(min($rent) == max($rent))
                                                                        <span>{{ $currency }}{{ $rent[0] }}</span>
                                                                        <p>Single Unit</p>
                                                                    @else
                                                                        <span>{{ $currency }}{{ min($rent) }} - {{ $currency }}{{ max($rent) }}</span>
                                                                        <p>Multiple Units</p>
                                                                    @endif
                                                                @elseif($property->type == 'pg')
                                                                    @if($property->pg->property_name != '')
                                                                        @if(min(array_diff($pgrent, array(0, 1))) == max($pgrent))
                                                                            <span>{{ $currency }}{{ $pgrent[0] }}</span>
                                                                            <p>Single Unit</p>
                                                                        @else
                                                                            <span>{{ $currency }}{{ min(array_diff($pgrent, array(0))) }} - {{ $currency }}{{ max($pgrent) }}</span>
                                                                            <p>Multiple Units</p>
                                                                        @endif
                                                                    @endif
                                                                @elseif($property->type == 'commercial-property')
                                                                    {{--<span>&#8377;{{ $property->commercial->rent }}</span>--}}
                                                                    <p>
                                                                        {{--@if($property->commercial->multi_properties != 0)
                                                                            Multiple Units
                                                                        @else
                                                                            Single Unit
                                                                        @endif--}}
                                                                    </p>
                                                                @endif


                                                                @if(!Auth::guest())
                                                                    @if(Auth::user()->id == $user->id)
                                                                        @if($property->published == 1)
                                                                            <i class="fa fa-eye" aria-hidden="true"></i> {{ $property->views_count }} Views <br>
                                                                            <i class="fa fa-comment" aria-hidden="true"></i> {{ count($property->contactmessages) }} Messages
                                                                        @endif
                                                                    @endif
                                                                @endif

                                                            </div>
                                                        @endif
                                                    @elseif($country == 'ca')
                                                        <div class="pull-right listing-price">
                                                            @if($property->type != 'commercial-property')
                                                                @if(min($rent) == max($rent))
                                                                    <span>{{ $currency }}{{ $rent[0] }}</span>
                                                                    <p>Single Unit</p>
                                                                @else
                                                                    <span>{{ $currency }}{{ min($rent) }} - {{ $currency }}{{ max($rent) }}</span>
                                                                    <p>Multiple Units</p>
                                                                @endif
                                                            @endif
                                                        </div>
                                                    @endif

                                                </div>

                                                <div class="progress">
                                                    @if(in_array(1, $steps))
                                                        <div class="progress-bar progress-bar-success" style="width: 16.6%" data-toggle="tooltip" data-placement="bottom" title="Step 1 Completed">
                                                            <span class="sr-only">1 Step</span>
                                                        </div>
                                                    @endif

                                                    @if(in_array(2, $steps))
                                                        <div class="progress-bar progress-bar-warning progress-bar-striped" style="width: 16.6%">
                                                            <span class="sr-only">2 Step</span>
                                                        </div>
                                                    @endif

                                                    @if(in_array(3, $steps))
                                                        <div class="progress-bar progress-bar-success" style="width: 16.6%">
                                                            <span class="sr-only">1 Step</span>
                                                        </div>
                                                    @endif

                                                    @if(in_array(4, $steps))
                                                        <div class="progress-bar progress-bar-warning progress-bar-striped" style="width: 16.6%">
                                                            <span class="sr-only">1 Step</span>
                                                        </div>
                                                    @endif

                                                    @if(in_array(5, $steps))
                                                        <div class="progress-bar progress-bar-success" style="width: 16.6%">
                                                            <span class="sr-only">1 Step</span>
                                                        </div>
                                                    @endif

                                                    @if(in_array(6, $steps))
                                                        <div class="progress-bar progress-bar-warning progress-bar-striped" style="width: 16.6%">
                                                            <span class="sr-only">2 Step</span>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-xs-12 lp-grid-box-contianer card10 m-listing" data-title="Buy now 10 shots" data-reviews="3" data-number="+001-587-4567-89" data-email="russel@example.com" data-website="www.example.com" data-price="$50" data-pricetext="Text about your price" data-description="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi archeum" data-userimage="images/user-thumb-94x94.png" data-username="Jhon Russel" data-userlisting="14" data-fb="www.facebook.com" data-gplus="www.plus.google.com" data-linkedin="www.linkedin.com" data-instagram="www.instagram.com" data-twitter="www.twitter.com" data-lattitue="51.516576" data-longitute="-0.137508" data-id="10"  data-posturl="post-detail.html" data-authorurl="author.html">
                                                <div class="lp-grid-box lp-border lp-border-radius-8">
                                                    <div class="lp-grid-box-thumb-container">
                                                        <div class="lp-grid-box-thumb">
                                                            @if(count($property->photos) > 0)
                                                                <?php $pic = $property->photos->first() ?>
                                                                <img class="img-responsive" src="/images/icon_size/{{ $pic->photo_name }}"  alt="list-1" />
                                                            @endif
                                                            @if(count($property->photos) == 0)
                                                                <img class="img-responsive" src="/assets/images/default.png"  alt="list-1" />
                                                            @endif

                                                            <div class="rentcc">
                                                                @if($country == 'ca')
                                                                    @if($property->type != 'commercial-property')
                                                                        @if(min($rent) == max($rent))
                                                                            <span>{{ $currency }}{{ $rent[0] }}</span>
                                                                        @else
                                                                            <span>{{ $currency }}{{ min($rent) }} - {{ $currency }}{{ max($rent) }}</span>
                                                                        @endif
                                                                    @endif
                                                                @elseif($country == 'in')
                                                                    @if(count($rooms) == 0 && count($pg) == 0)

                                                                    @else
                                                                        @if($property->type == 'house')
                                                                            @if(min($rent) == max($rent))
                                                                                <span>{{ $currency }}{{ $rent[0] }}</span>
                                                                            @else
                                                                                <span>{{ $currency }}{{ min($rent) }} - {{ $currency }}{{ max($rent) }}</span>
                                                                            @endif
                                                                        @else
                                                                            @if($property->pg->property_name != '')
                                                                                @if(min(array_diff($pgrent, array(0, 1))) == max($pgrent))
                                                                                    <span>{{ $currency }}{{ $pgrent[0] }}</span>
                                                                                @else
                                                                                    <span>{{ $currency }}{{ min(array_diff($pgrent, array(0))) }} - {{ $currency }}{{ max($pgrent) }}</span>
                                                                                @endif
                                                                            @endif
                                                                        @endif
                                                                    @endif
                                                                @endif

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="lp-grid-box-description ">
                                                        <h4 class="lp-h4">
                                                            <a href="/listing/'+properties[i].id+'">
                                                                {{ $property->type }} for rent @if($property->locality != '') in {{ $property->locality }} @endif
                                                                </a>
                                                            </h4>
                                                        <p>
                                                            <i class="fa fa-map-marker"></i>
                                                            <span>{{ substr($property->address, 0, 200).'...' }}</span>
                                                        </p>
                                                    </div>
                                                    @if(!Auth::guest())
                                                        @if(Auth::user()->id == $user->id)
                                                            <div class="row margin-right-0 margin-left-0">
                                                                <div class="col-xs-6 text-center border-black-1">
                                                                    <i class="fa fa-eye" aria-hidden="true"></i> {{ $property->views_count }} Views <br>
                                                                </div>
                                                                <div class="col-xs-6 text-center border-black-1">
                                                                    <i class="fa fa-comment" aria-hidden="true"></i> {{ count($property->contactmessages) }} Messages
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xs-3 padding-right-0">
                                                                    <a target="_blank" href="{{ route('pages.property-details', $property->id) }}">
                                                                        <button class="btn btn-sm btn-success width-full lp-border-radius-0">View</button>
                                                                    </a>
                                                                </div>
                                                                <div class="col-xs-3 padding-0 ">
                                                                    <a href="{{ route('property.new-listing-location', $property->id) }}">
                                                                        <button class="btn btn-sm btn-info width-full lp-border-radius-0">Edit</button>
                                                                    </a>
                                                                </div>
                                                                <div class="col-xs-3 padding-0 ">
                                                                    <a href="{{ route('property.dashboard', $property->id) }}">
                                                                        <button class="btn btn-sm btn-primary width-full lp-border-radius-0">Manage</button>
                                                                    </a>
                                                                </div>
                                                                <div class="col-xs-3 padding-left-0 ">
                                                                    <a target="_blank" href="{{ route('pages.property-details', $property->id) }}">
                                                                        <button class="btn btn-sm btn-danger width-full lp-border-radius-0">Delete</button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endif
                                                </div>
                                            </div>
                                        @endforeach
                                    @else

                                        <h1>Zero Listing</h1>
                                        @if(!Auth::guest())
                                            @if(Auth::user()->id == $user->id)
                                                <a href="/new"><button class="btn btn-primary">Add new Listing Now</button></a>
                                            @endif
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection