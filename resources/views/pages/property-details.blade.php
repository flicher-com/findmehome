@extends('layouts.master')
@section('nav')
    @include('partials.nav')
@endsection

@section('title') {{ $property->type }} in {{ $property->locality }} | FindMeHome @endsection

@section('content')

    <section class="aliceblue">
        <div class="post-meta-info">
            <div class="container">
                <div class="row">
                    @if($property->published == 0)
                        <div class="alert alert-info" role="alert">
                            This listing not published but you are seeing it because you are staff or the owner.
                        </div>
                    @endif
                    <div class="col-md-8">
                        <div class="post-meta-left-box">
                            <ul class="breadcrumbs">
                                <li><a href="/">Home</a></li>
                                <li><a href="/search?address={{ $property->state }}&type=any">{{ $property->state }}</a></li>
                                <li><a href="/search?address={{ $property->city }}&type=any">{{ $property->city }}</a></li>
                                <li><span>{{ $property->locality }}  {{ $property->zip }}</span></li>
                            </ul>
                            @if($property->type == 'pg')
                                <h2>{{ $property->pg->property_name }} PG for rent in {{ $property->locality }} {{ $property->city }}</h2>
                            @elseif($property->type == 'commercial-property')
                                <h2>{{ $property->commercial->type }} for rent in {{ $property->locality }} {{ $property->city }}</h2>
                            @else
                                <h2>{{ $property->type }} for rent in {{ $property->locality }} {{ $property->city }}</h2>
                            @endif
                            <ul class="post-stat">
                                <li>
                                    <strong>Address: </strong><span>{{ $property->address }}</span>
                                </li>
                                {{--<li class="m-view-map">(View Map)</li>--}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="post-meta-right-box text-right">
                            <ul class="post-stat">
                                <li class="reviews sbutton">
                                    {{--<span class="reviews-stars">
                                        <img class="icon icons8-Share" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAD00lEQVRoQ9Wa7VEbMRCGtWqAdABUAFQQU0GggpAKMA3oVmogTgWBCkIqiKkgUEGcDpIGtJnVSDdC0X355LvDM/4D5qzn9ut9lwOxsJdS6iMArIQQ5/7NJ3zmNxE9GmO+544MS+FAxCsi+iyEOOk40w4A7hDxMf7cIkCqqmKANR+MiH5LKTdCiC0iciQEInJ0VtbaNQAce4CN1vouwMwOopTaAMAtH8jfaYZofCHi2keOob8YY9wNmBXEp9M3D3ERItCV7hwhIvrp/+6a02xWkKqqfnFN9IlEChdFZqe1Pp0NBBFviOgr14QxpqvAs0FSSnHhHwPA9WwgSql7AOBWyx2otS6aUi1EhYgeZgOpqopz/BwAetdGJr1CrTzPCUJ8MK31qDNUVeWuM+oiXd0l93s/uTEMPgA4RcTdPtfiv5kcJAWoB1mB1CKil4NHJAXwkxuttStf7J8Q8X6fiExS7E0A4dCh/bIY1Fpf7AMSzaHy7bcLID5wNAcGt+AoGm4ONaZWg5zmotwS0dYY85AcimdCXcQhhdrS5qASZaicttYeDQVIboAbjDlF29D1bgHADdBG0dhDTrOUCHL6LP6iPhGIP4+IJ0RUCSFukgPviAillC+xjLfWvgcAVrpOzsQQr+bISDn9ZIxhV9f5ygGwxJBSbq21GPmN7LX8DVtnjVXJXG3RRf9FwANgPBC5m3Fr5sgHKJ4T3N2klI8pQD2P/HQsJqczeqgXQGcoOz4AheT0MwCcAUA93FpS6FUExgLUESktp6WUmBZxLoVKAdQgheX0HyHEu3DxKQBikKJymoj+CiE2Usr7Map2aMQgyOBSvsAfgIecnhREKRUKdYxTWxHRD44GABxFd3MyIDhEsfvBFmQHcx0ciNsvryp5t+TWKkNzM5lDbsfEP+P2OyWQU78l5XRuIE4B5EBGSBRXG060AdTRyEW1b4S8fbjym/iw7+q/jY9FIxGtjTFf2tJMKVXLafYoWuvLPmnZBMQeJ7YDLdfq3sbHMFwzRMTz4CmS05z3H2I5HX2hk9+p4WoTkZmUC9t4Nmi8jXfblb228Zxm1lrekIf1fauc5kmeyO9BQKFrcutmedO1dRy8jfdALldZEDINewG+U+wdUgvr5XfsJzqBQm16iNWitvFDgN7ENr4LqJB9mG4b3wQkhLh8k9v4DJBrIm92G58ClVLdB9/9Ns2R0vZhNpBC9sH9o2eSbXxTRErbh9kiUto+zAZS2j7MCjLCPizrgQEflfoRjqH2YTGPcIRG0MM+nPfexvcxRYf8zFD7sMjHnOIb1GAfOrfx/wAHwA4zK2MvHgAAAABJRU5ErkJggg==" alt="share">
                                    </span>--}}
                                    <div class="addthis_inline_share_toolbox"></div>
                                </li>
                                
                                <li>
                                    <span class="email-icon">
                                        <!-- Hearts icon by Icons8 -->
                                        <img class="icon icons8-Hearts" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAD/ElEQVRoQ+1Yi1HcMBDVqgFIBYEKIBWEVMClglwq4GhAXquBcBUEKghUAKkgpIJcKghpQJt5nlXGOLYs22fIMKcZhrmxvdLbtx/tI/NCFr0QHGYH5H9jcsfIjpGZPLALrZkcO9rsYEacc6dEtDDGHBhjTnTnjTFmIyJ31torZsbvzsXMByGED0SE72EHf1h3aufae38zBFU2EOccNubapql97ojoYxMQAIjI55oDUjbgGPbeX+UA6gXCzPsi8skYs4RBEflprb0wxtwzMzxocEAADCHgnQUR7RljHojonJkv9Z2l2oG938aYa2stnm0iYGYGQ8chhBURvVYAl2rnIQUoCURB3MI4NrfWruLBuozimxACE9EZ3gEz6gAwAUesrbXMzMmDMfMyhHChTrknonepb5JAiqLA5vDkd2vtkpnvc2iuMVAdPi4Nt4qhnMXMYAeMHBljLsuyrJzStjqBwCOIZ2XiZAiIuFG0EZnpY7PtgAoGObeXckQnkKIofiDuh3qxeRjnHPLJeO9XOSx0gKmcinwqy/IwmxFmXojIFyS29z6WxlHnQM5oqCVzos+4c26DAkBE75n5uvl+KyPOOcQlyi2qTuXR517MvELVE5Er731VQeurCwhi8q1WiqrEPvdCaRaRWxH56r2PjfjvsVqBFEUheKMsy94+85QAU+faAXlKJuJegxlxzqGTHhHRmzH9Yw6Qo3KkVrVw8cvuxHMAiDZHVa2+j+Y8cJftvpbQmux63UZnx6XvVd8Fb25genn9pec5bJt3Osurc67qJSJSeu8xhzzbcs7hNl109ZAKYNfpYnLpXAEvTLpijPWCsoHo2E816GTDq7GynnLpGwsC3+HSidkmxUaSETzEFVpEvmlsYrB50utKLSqQq8lW0HsFifGpIQZjSWFhivfr32rBgRMxGvfmaS8QpbdKfMzpfSPnNoA0RuzWS2JznywgOocDDEbOWcE0QGDExnTaW2iygGi+QCUBCCgks4BpETsOckD0JnuTvoYYALkHBSBbkEiFnRYWKDbICTCxGJKP2YzU7jyQe2KYPdKuxuaHihTQziKIrHCq7zcYiIYZwGAcPlVjF2VZno8BUhQFAFTCBMZY1c56c2JUsie6fzVH63PkDW7LWaGmoQRl5Fj71CR9YBQjjXp/ouxA4nxQvXadYsc5d6Y6MkIJEizEv0nNdjKQjlDLErFF5EZBDA6lrYZWS1VbKDtRxEaoVRqUamUIpUrEVgD/6FNj8mxw+c3ZRJvno0KAw9fU/K2xMLlqZQJaqSoPdlCRstT8HNtt72wlRxJVrVLT8Xyomj8U0KxAYiHQ/5MTOgVudiBDPTv2/R2QsZ6b67sdI3N5dqzdP6xqi1FZGrwUAAAAAElFTkSuQmCC" alt="favorites">
                                    </span>
                                    <a class="email-address" href="#">
                                        Shortlist
                                    </a>
                                </li>

                            </ul>
                            <?php
                            $rent = array();
                            $pgroom = array();

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

                            if($country == 'ca') {
                                $currency = '&#36;';
                            } elseif($country == 'in') {
                                $currency = '&#8377;';
                            }

                            ?>
                            @if($country == 'in')
                            <div class="rentbtn">
                                @if($property->type == 'house')
                                    @if(min($rent) == max($rent))
                                        <span>{{ $currency }}{{ $rent[0] }}</span>
                                    @else
                                        <span>{{ $currency }}{{ min($rent) }} - {{ $currency }}{{ max($rent) }}</span>
                                    @endif
                                @elseif($property->type == 'pg')
                                    @if(min(array_diff($pgrent, array(0))) == max($pgrent))
                                        <span>{{ $currency }}{{ $pgrent[0] }}</span>
                                    @else
                                        <span>{{ $currency }}{{ min(array_diff($pgrent, array(0))) }} - {{ $currency }}{{ max($pgrent) }}</span>
                                    @endif
                                @elseif($property->type == 'commercial-property')
                                    {{ $currency }}{{ $property->commercial->rent }}
                                @endif
                            </div>
                            @elseif($country == 'ca')
                                <div class="rentbtn">
                                    @if(min($rent) == max($rent))
                                        <span>{{ $currency }}{{ $rent[0] }}</span>
                                    @else
                                        <span>{{ $currency }}{{ min($rent) }} - {{ $currency }}{{ max($rent) }}</span>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container single-inner-container single_listing"  data-title="The Dorchester grill" data-reviews="4" data-number="+007-123-4567-89" data-email="jhonruss@example.com" data-website="www.example.com" data-price="$200" data-pricetext="Text about your price" data-description="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi archeum" data-userimage="images/user-thumb-94x94.png" data-username="Jhon Russel" data-fb="www.facebook.com" data-gplus="www.plus.google.com" data-linkedin="www.linkedin.com" data-instagram="www.instagram.com" data-twitter="www.twitter.com" data-lattitue="40.6700" data-longitute="-73.9400" >
            <div class="row">
                <div class="col-md-8">
                    <script type="text/javascript">
                        $(document).ready(function(){
                            $('.bxslider').bxSlider({
                                mode: 'fade',
                                captions: true
                            });
                        });
                    </script>


                    <div>
                        <ul class="bxslider">
                            @foreach($photos as $photo)
                                <li><img src="/images/full_size/{{ $photo->photo_name }}" /></li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="post-row padding-top-5 m-ower-contact">
                        <h3>The {{ $property->status }}</h3>
                        <div class="post-row">
                            <div class="widget-box user-wid widget-bg-color post-author-box lp-border-radius-5">
                                <div class="user-info">
                                    <div class="user-thumb">
                                        @if(substr($property->user->avatar, 0, 4) == 'http')
                                            <img src="{{ $property->user->avatar }}" class="avatar-p" alt="user-thumb">
                                        @else
                                            <img src="/{{ $property->user->avatar }}" class="avatar-p" alt="user-thumb">
                                        @endif
                                    </div>
                                    <div class="user-text">
                                        <h5 class="user-name margin-top-0"><a href="/user/{{ $property->user->id }}" target="_blank">{{ $property->user->first_name }} {{ $property->user->last_name }} </a></h5>
                                        <label class="user-position md-trigger quickformtrigger2" data-modal="modal-6">Profile Strength: {{ $property->user->strength }}%</label>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5>Trusted</h5>
                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        {{--@if($property->user->email_verified == 1)<i class="fa fa-check-circle" aria-hidden="true"></i> @else <i class="fa fa-times-circle" aria-hidden="true"></i> @endif <span>ID Verified</span><br>--}}
                                        @if($property->user->email_verified == 1)<i class="fa fa-check-circle" aria-hidden="true"></i> @else <i class="fa fa-times-circle" aria-hidden="true"></i> @endif <span>Email Verified</span><br>
                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        @if($property->user->phone_verified == 1)<i class="fa fa-check-circle" aria-hidden="true"></i> @else <i class="fa fa-times-circle" aria-hidden="true"></i> @endif <span>Phone Verified</span>
                                    </div>
                                </div>
                            </div><!-- ../widget-box  -->
                        </div>

                        <a href="#submitreview" class="contact-btn" data-toggle="modal" data-target="#myModal">
                            Contact {{ $property->status }} Now
                        </a>
                    </div>

                    <div class="post-row padding-top-5">
                        <h3>The Property</h3>
                        <div class="widget-box user-wid widget-bg-color post-author-box lp-border-radius-5">
                            <div class="user-info">
                                <h4>Description</h4>
                                <hr>
                                <p class="word-wrap">{{ $property->description }}</p>
                                <hr>
                                @if($country == 'in')
                                    @if($property->type == 'pg')
                                        @for($i=0; $i < count($pgrooms); $i++)
                                            <div class="row">
                                                <div class="col-md-3 col-xs-6 border-black-1">
                                                    <strong>No of Beds</strong>
                                                    <p>{{ $pgrooms[$i]['no_beds'] }} Bed</p>
                                                </div>
                                                <div class="col-md-2 col-xs-6 border-black-1">
                                                    <strong>No of rooms</strong>
                                                    <p>{{ $pgrooms[$i]['no_rooms'] }}</p>
                                                </div>
                                                <div class="col-md-3 col-xs-6 border-black-1">
                                                    <strong>Area</strong>
                                                    <p>{{ $pgrooms[$i]['area'] }} {{$pgrooms[$i]['area_unit'] }}<sup>2</sup></p>
                                                </div>
                                                <div class="col-md-2 col-xs-6 border-black-1">
                                                    <strong>Rent</strong>
                                                    <p>&#8377;{{ $pgrooms[$i]['rent'] }}</p>
                                                </div>
                                                <div class="col-md-2 col-xs-6 border-black-1">
                                                    <strong>Deposit</strong>
                                                    <p>&#8377;{{ $pg['deposit'] }}</p>
                                                </div>
                                                <div class="col-md-3 col-xs-6 border-black-1">
                                                    <strong>Furnishing</strong>
                                                    <p>{{ $pgrooms[$i]['furnishing'] }} Furnished</p>
                                                </div>
                                                <div class="col-md-2 col-xs-6 border-black-1">
                                                    <strong>Ensuite</strong>
                                                    <p>@if($pgrooms[$i]['ensuite'] == 1) Yes @else No @endif</p>
                                                </div>
                                                <div class="col-md-7 col-xs-6 border-black-1">
                                                    <div class="col-md-4 col-xs-4 ">
                                                        <strong>AC</strong>
                                                        <p>@if($pgrooms[$i]['ac'] == 1) Yes @else No @endif</p>
                                                    </div>

                                                    <div class="col-md-4 col-xs-4">
                                                        <strong>Cooler</strong>
                                                        <p>@if($pgrooms[$i]['cooler']) Yes @else No @endif</p>
                                                    </div>

                                                    <div class="col-md-4 col-xs-4">
                                                        <strong>Storage</strong>
                                                        <p>@if($pgrooms[$i]['storage']) Yes @else No @endif</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                        @endfor

                                    @elseif($property->type == 'house')

                                        @foreach($rooms as $room)
                                            <div class="row">
                                                <div class="col-md-2 col-xs-6 border-black-1">
                                                    <strong>Unit type</strong>
                                                    <p>{{ $room->room_type }} room</p>
                                                </div>
                                                <div class="col-md-3 col-xs-6 border-black-1">
                                                    <strong>No of bed rooms</strong>
                                                    <p>{{ $room->no_bedrooms }}</p>
                                                </div>
                                                <div class="col-md-3 col-xs-6 border-black-1">
                                                    <strong>No of Bathrooms</strong>
                                                    <p>{{ $room->no_bathrooms }}</p>
                                                </div>
                                                <div class="col-md-2 col-xs-6 border-black-1">
                                                    <strong>Area</strong>
                                                    <p>{{ $room->area }} {{ $room->area_unit }}<sup>2</sup></p>
                                                </div>
                                                <div class="col-md-2 col-xs-6 border-black-1">
                                                    <strong>Min Term</strong>
                                                    <p>{{ $room->min_term}} months</p>
                                                </div>
                                                <div class="col-md-2 col-xs-6 border-black-1">
                                                    <strong>Rent</strong>
                                                    <p>&#8377;{{ $room->rent }}</p>
                                                </div>
                                                <div class="col-md-3 col-xs-6 border-black-1">
                                                    <strong>Deposit</strong>
                                                    <p>&#8377;{{ $room->deposit }}</p>
                                                </div>
                                                <div class="col-md-3 col-xs-6 border-black-1">
                                                    <strong>Available from</strong>
                                                    <p>{{ $room->available_from }}</p>
                                                </div>
                                                <div class="col-md-4 col-xs-12 border-black-1">
                                                    <div class="col-md-4 col-xs-4 ">
                                                        <strong>AC</strong>
                                                        <p>@if($room->ac == 1) Yes @else No @endif</p>
                                                    </div>

                                                    <div class="col-md-4 col-xs-4">
                                                        <strong>Cooler</strong>
                                                        <p>@if($room->cooler == 1) Yes @else No @endif</p>
                                                    </div>

                                                    <div class="col-md-4 col-xs-4">
                                                        <strong>Storage</strong>
                                                        <p>@if($room->storage == 1) Yes @else No @endif</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                        @endforeach
                                    @elseif($property->type == 'commercial-property')
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6 border-black-1">
                                                <strong>Total Area</strong>
                                                <p>{{ $commercial->total_area }} {{ $commercial->total_area_unit }}</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 border-black-1">
                                                <strong>Build up Area</strong>
                                                <p>{{ $commercial->build_up_area }} {{ $commercial->build_up_area_unit }}</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 border-black-1">
                                                <strong>Min Term</strong>
                                                <p>{{ $commercial->min_term}} months</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 border-black-1">
                                                <strong>Construction Status</strong>
                                                <p>{{ $commercial->construction_status}}</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 border-black-1">
                                                <strong>Year Build</strong>
                                                <p>{{ $commercial->year_build}}</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 border-black-1">
                                                <strong>Year Renovated</strong>
                                                <p>{{ $commercial->year_renovated}}</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 border-black-1">
                                                <strong>Rent per month</strong>
                                                <p>&#8377;{{ $commercial->rent}}</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 border-black-1">
                                                <strong>Deposit</strong>
                                                <p>&#8377;{{ $commercial->deposit}}</p>
                                            </div>
                                            @if($commercial->multi_properties > 0)
                                                <div class="col-md-3 col-xs-6 border-black-1">
                                                    <strong>Multiple Units</strong>
                                                    <p>{{ $commercial->multi_properties}}</p>
                                                </div>
                                            @endif
                                        </div>
                                    @endif
                                @elseif($country == 'ca')
                                    @foreach($rooms as $room)
                                        <p>Available from : {{ $room->available_from }}</p>
                                        <div class="row">
                                            <div class="col-md-2 col-xs-6 border-black-1">
                                                <strong>Bed Rooms</strong>
                                                <p>{{ $room->no_bedrooms }} room</p>
                                            </div>
                                            <div class="col-md-2 col-xs-6 border-black-1">
                                                <strong>Bathrooms</strong>
                                                <p>{{ $room->no_bathrooms }}</p>
                                            </div>
                                            <div class="col-md-2 col-xs-6 border-black-1">
                                                <strong>Area</strong>
                                                <p>{{ $room->area }} {{ $room->area_unit }}<sup>2</sup></p>
                                            </div>
                                            <div class="col-md-2 col-xs-6 border-black-1">
                                                <strong>Min Term</strong>
                                                <p>{{ $room->min_term}} months</p>
                                            </div>
                                            <div class="col-md-2 col-xs-6 border-black-1">
                                                <strong>Rent</strong>
                                                <p>{{ $currency }}{{ $room->rent }}</p>
                                            </div>
                                            <div class="col-md-2 col-xs-6 border-black-1">
                                                <strong>Deposit</strong>
                                                <p>{{ $currency }}{{ $room->deposit }}</p>
                                            </div>
                                        </div>

                                        <hr>
                                    @endforeach
                                @endif

                            </div>
                        </div><!-- ../widget-box  -->
                    </div>
                    @if($country == 'ca')
                    <div class=" post-row padding-top-5">
                        <div class="post-row-header clearfix margin-bottom-15">
                            <h3>Utilities Included</h3>
                        </div>
                        <div class="features1 clearfix">
                            <div class="col-md-3 col-xs-6 @if($property->amenities->water == 0) notavil @endif">
                                <img class="aiico icon icons8-Water" width="18" height="18" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAD+klEQVRoQ92a7ZFOQRCFz0aACBABIkAEiAARIAJEgAgQASJABIgAESAC6qm6R7XZuTM9985VSv/ZXfvuzDzdp7vnw4mOtyfLFA+OnOrkyMElPZV0b5njmaT7R813JMgdSc+Lhd+V9OIImKNALkt6K+msJEsKiX2XdF3Sx9kwR4CweCCAeSmJyGCvJd1YIIABapodAYKcWPwnSdfCggF8J+mSpOn5MhvkpqRXkn4sEKWEiBIwZyTdWqI0JSozQS5I+hDygopVMyqX8+WKpC8zSGaCkBdI6Y0kItMy5wvRIV922ywQexlJEZleIpMvRAKJUdXWopcGnAESJTWie+cT0LslNgPEkqpVIqoXnR3AWi5Mk9hekJakYqTIA/KhtGkS2wPSkxQVrGyKNc1HiV1M5Fc1b/aA0C9YRK1KPZL0UNLXBaaX/JYYX5HhsG0FocySG1QpvB71z89EAyOJM/sqosvnqGJrMmzCbQX5vJTZx5LwfjRLqva71mIcRZyCxIZsC4gTHNngyWhRUuXvMgsD4vyW3jIKQpUhGnwte0amSvVgfIYhp4YSfxTEHn+/bEfiwpz8ceveW3jt95Tpq5KGpDkCEqNRJmQr+UdhPNZQVEZAWtFwdx/yYoNwOCpZkFY04hkks2HMRGg4KlkQJyGnPvpENEdjyi42DExf4TSZurDIgrhvlIPG3JgVDbPYeam+kgFxp66dNby1mJUbMdJxQ9ndIWRAfMlWllUm+rbMTM2fcmQtZMsd2O3MZUUGxLIqG2ArbzIJnfmMC0lXXj0QdA8IVn7Wspqd5CXgz+UfzrW2+D0Qe6TWyZEV8jpKVgZyT2keo3sgboK1ZLanemNkJNT6TGsNv/+ut4i1QVzJan1l78LLv58C4opV5oH7R01y/yTImjf+G5DYQ3ry3BuhNVX8MW5vES3P+zT3t6pW8yzfA2n1EXfdI7Yn0dtT+ggDehda1vHhrfYGjbmPdatjLyLM7cuG2hHWzWr6w80C7ah3dw8ZkCivMh/iHVbq3DAQlTh2Nw8zIMztMlx7z4ivt3yOnJlhQ8fnLEg8G9Q8H2GoZsiRq9St5vGy7y2ndrStieOdU+2JmeRH01ywYQARQXKrdhO/NtcmuWYj4kndnFrv5QAjMQPVbiRbEH6fHyogoyAswJUKGGTGuaRmeJYoUb4zEaHU8rSNjIf3cFtAWLTLogsB3us9HaxFgYXzquXL8E03lVtBYn/heyCQ3QiQASgMfI91+8WaN/aAMCbyAYC7WhtSQ0pIiqrj9xE+y/uHJRefsJESubX5AmMviBdPLuBZ/q/JiFGicUQmh5rjzgLxJEgETwPGjoCfuS3E2C8hQZdlIrc1r05B/QI5sSJCRkd0pQAAAABJRU5ErkJggg==">
                                <span class="test">Water</span>
                            </div>
                            <div class="col-md-3 col-xs-6 @if($property->amenities->waste_disposal == 0) notavil @endif">
                                <img class="aiico icon icons8-Trash-Can" width="18" height="18" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAABeElEQVRoQ+2a4U3DQAyFv04AGwATQDdhBDZgBGACGIGNoBuUCWADkKGVqtCm7+WsJop8P092zu/ZfokuXjCTtZgJDrKBPAO3wOURgtbAK/CURWQmkBfg3gwsgDyaPnvNM4F8AufAEng/EtwN8AZEZq6mBuR7E5BKjmvfi1c9VCHNDcy1bwIS6Y8ymMKKco2yHdQj4Xw9BRTAqo9UtbRSy8AgRj63gBistphWRg6xJzPTQv8eX/nczB4JqY7VlUh3fxfPKEAOHeruFxClrJUUu8y3PPNfzJk9UkB6SkLJ2q97ZcTQfLfkSrVKtToMuCWkNLJiU83ufli6mapmr2avZv9jQFEkxaZUq1RL7KmS35JfsVTqzS5KdMnv7OV3+9+w+2PI3R9dfhX1c21G+URxg1TsC4jbyAqrLTbpGfkCzsRhgJbAd323QwUfwkiIfNMYYxYPWRGaz5HGPNQr0zg7wNwBF2YgQ80jEzF4I82qOECGBnQSv9kA+QEb5rMzpnXFtwAAAABJRU5ErkJggg==">
                                <span class="test">Garbage</span>
                            </div>
                            <div class="col-md-3 col-xs-6 @if($property->amenities->heat == 0) notavil @endif">
                                <img class="aiico icon icons8-Heating-Room" width="18" height="18" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAADVUlEQVRoQ+2agW0UQQxFnQoIFUAqCFQAVACpAKgAqACoAKgAUgFJBUAFhAqACggVgN5pPhpOtzv2rGch0o0U5XTn9fiP7W977g5s7LprZm/LFo/N7OOo7Q4GKb5ZAACkXgAB0LfsfbOBHJrZEzN7UQz9aWavy+unZnatvObzN2Z2mQUoE8jDYjRgWKdmhvEylvcBhRyL9/kcucUrAwjh89zMFEafikem8gE5PHKnWI/cy6X5swQIJ/zKzB5VYcQJv3MeL8/hIYUbzz3rDbdeIHgAoxVGnChGRWOe59GDPoUbetAXWlEgolNYiUUYcbJLWQh9eEThhr4QXXuBbNPp9wIguy5wUAC6UeWPi65bQKboVPQacn9AGP0hup4D0qLTgF1doiG63gUkSqddVgYectF1DWQpnQZs6xKdpWsByaLTLgsDD03SNUA+m9mtStlRAp0GbOsShUW/Vk9eAOSiFDZRXovJunYe8NCvopNScFkbrQ+uGpCNvXsgA0IlqvKvCOr1CFRIg3jm2P1BkfHK0g17ZpQUIFJyzzFHSPbEAZzDAYhHNgUIvRC1h6YRMHOLnom5hY4Wap9beJrLCgBdb8imAKEwYRind7tQ+Ny+yELvHg9SDo5LGz83pKUAwWg2obFkqtMFwxQYeZCBqdU5y4PkiabPXXrTgESMU8hwc4Khc4sm8UMZ2ravk+rn/gkQnbLHIwJybmZivKEegU7vO2J5VBimeIRk/1GOqdVkIkuDx38PMSBLU9iSTQGi/Gi5H6yS/bLVZe8KF+USjaAuOKbyaTGQuoVunRqyjAl4o0W9tedWKYii3RY91rkR8RxXTHNsJQ8t8oi8weU0r+cu5CJ5hHHknMdzKUC8xYrNFO8eb4hyPXmUAkRhxaVZ6443UjAjsilAaBK51mwlbp0fHtnVgUSKYMS4iGyKR0blCK3I+9JFQ+melcJabOSp6Kr+rXqDPg1VnlBEfhGQOvaZG1qnp5DxDFWS9QxVKUDgen2dUF/sTYWDZD1FjhxEJ3+tL40We8QTv2vI7IGsccqRPfYeiZzWGrJ7j6xxypE9Jj2iyuqpwpENR8hSZ5g8mYs2P1qoL7G5ZOOXPVdp/bkn2/4ylDaBgUi/D/lfQeEJ5iHs3XQAvwGZlBbhXDvy+gAAAABJRU5ErkJggg==">
                                <span class="test">Heat</span>
                            </div>
                            <div class="col-md-3 col-xs-6 @if($property->amenities->electricity == 0) notavil @endif">
                                <img class="aiico icon icons8-Electricity" width="18" height="18" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAC90lEQVRoQ82a7bENQRCGnxsBNwJEwM2ACBABIkAEiAARIAJEgAjuFQEiQATUq7bV1NTMrJnu3rJ/zqmze2bn2be/ZnpPyD/OgRuD21wAZ95pnHgH2Pn/feDVzjXfgKveeWSDfABuAg+A19Vkv2wArXPTXJkgAhDIT+ByNbM7wFsgRA2NnQliajwDnlYgo3PTamSCyOZlOlJD338UsyuVqs8tQWSCyB/uAS+BR9lqZIGYGhr/GvA1W40skBfAQ+ANoPBbHiOlls0qA0TRSb6hz1qNkVIuiAwQRacnwKctf7TUaCn134F839S4BXwsZpeqRrQiVo4crkY0SK/kKP1GxaGKxPAjKrObGq2SY+Q3YUBRIL3isFSj9pswiCjTGhWHh6gRBTIqAM1v7gLvQiWoBvOallZ+WgG2isOR34QzeUGs5GglOVNjdtJLS18PyF6S04Suz1KsLrY8ICM1ZudfRrclf1oFiU5y7ui2CuK+cacOW841qyBWHM6aUMuRQ0x0FSTKkS2ZtlaTUw9pFWTmJvIn5RpFudqRw3ZTjgDp+ZPtbbWS6cyD+nNtNsioaLSE+RjQOt91ZIP01NAW0fPV5NcizgTpZX538jsapBdWI3PQX6YsRXpqlL8vJ78jFemF1ZDkdxRIb5M6LPkdBdJTIyz5HQFSNnC0erR2QmjyiwYZNTnrdtpotbi0IqxhPFFL7YIrjafzudHFHRWZreuns7wHxCLQbImhjG7NH6319b3saE1DeGst2yV5D8gH9g5ldDVAFb10zD6A4fgeRTQxLbD+5YHI8QWhhKhqV+Dlbv3eQ9g97wHR4Gb7oyxdvjQgf5AiblOKdHaNZW22VtNT5/XWg7XfUho8BuRVxLJ1HUJlQjIlmZRMSQ5dv/mway4zF3hBdK9f2w1PN5MRnCDkQ2ozyB9SeiIlaASINqdvb++bXCpWe+pcCSLcH6Izu41nqz1N2N45ab22MWMp09dGKGI78rq5/EHOndpCyFLEwrA+BZHuDy2Q33D0zDNb1p9mAAAAAElFTkSuQmCC">
                                <span class="test">Hydro/Electricity</span>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class=" post-row padding-top-5">
                        <div class="post-row-header clearfix margin-bottom-15">
                            <h3>Amenities</h3>
                        </div>
                       <div class="features1 clearfix">
                            <div class="col-md-3 col-xs-6 @if($property->amenities->internet == 0) notavil @endif">
                                <i class="aicon fa fa-wifi" aria-hidden="true"></i>
                                <span class="test">Internet</span>
                            </div>
                            {{--<div class="col-md-3 col-xs-6 @if($property->amenities->ac == 0) notavil @endif">
                                <img class="icon icons8-Air-Conditioner aiico" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAACm0lEQVRoQ+2Y7XEUMQyG31QAVAB0ABUQKoBUAHQQKiCpgKQCoAKSCgIVkA6ACkIqgHku1uEY3/hjvY49g//czay80rP6sOQ9/V37kt5J4neGdSbpVNIXjN1zFh85iBkAQhuPJR0Bggcu3NO3kiD9MTjRI0mvvY//HBBc80wSECeDA4TmWSSdA/LbPX0g6ddkIHjmu+WIgVi+TMZy4wjfI6OB5H7gIUEIFSs0IYj/zI+a4UBeSvos6aMrPFde7r53VerAVdWhQfyzjKJz31nr/9+cGUESD+cR7CN88AjHgb++Oo/EzrdhQT5E2iTOujc7DurhQPzQupZ0z7nE/z9FaFmyf5J0KMlPdjqOV5KmSHbLkenLb9hRTH0g1rRHwyV7DQR7/oPUfrm19v3jkbUUdXmv38Z3UbiSkmtAmNFfSIqdmivpbfbaW6OuXT7QZT6eaNylO2bM5ffApkK7gGj2qTq+iM5430CeSPrWUXlLVU8lXfpzOnMAjRk5Q3M28mKSpMmkweR+a3vTaA3bpWufgSL5R7uoY/Bi7AWC9p5I2tgY3pwgAITNAjGv2B6KBEMQi6FncwcbrCUy1jTGbAACW7c6Y1dAUFPWMOJh5C22h4qBLIuvQsUL1xKZGMhPZzz23YqWJXdZlGvzHAoMyodpJZPM1yUgeIwwZJFwu0KrhcyqIMmX9xRY4pGediZ11YLkVCOUt5bbCVQLklONUNparjlITjVCaWu55iA5FctCK1W1SuSagySTr7dAbY70tjOprxQktwqZ4rXlt4ClILlVyBSsLV8NkluFTMHa8tUgudXKD62cqlUrXw2STLq7EijNkbuyM6k3BVJadUKF3fanQEqrTgjSbX8KpLTqhCDd9qdASqtULLRKqlb1/j+7HtACuS7jUgAAAABJRU5ErkJggg==" width="18" height="18">
                                <span>AC</span>
                            </div>--}}
                           @if($property->type != 'commercial-property')
                           <div class="col-md-3 col-xs-6 @if($property->amenities->tv == 0) notavil @endif">
                                <i class="aicon fa fa-television" aria-hidden="true"></i>
                                <span>TV</span>
                            </div>
                           <div class="col-md-3 col-xs-6 @if($property->amenities->ac == 0) notavil @endif">
                               <img class="icon icons8-Air-Conditioner aiico" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAACm0lEQVRoQ+2Y7XEUMQyG31QAVAB0ABUQKoBUAHQQKiCpgKQCoAKSCgIVkA6ACkIqgHku1uEY3/hjvY49g//czay80rP6sOQ9/V37kt5J4neGdSbpVNIXjN1zFh85iBkAQhuPJR0Bggcu3NO3kiD9MTjRI0mvvY//HBBc80wSECeDA4TmWSSdA/LbPX0g6ddkIHjmu+WIgVi+TMZy4wjfI6OB5H7gIUEIFSs0IYj/zI+a4UBeSvos6aMrPFde7r53VerAVdWhQfyzjKJz31nr/9+cGUESD+cR7CN88AjHgb++Oo/EzrdhQT5E2iTOujc7DurhQPzQupZ0z7nE/z9FaFmyf5J0KMlPdjqOV5KmSHbLkenLb9hRTH0g1rRHwyV7DQR7/oPUfrm19v3jkbUUdXmv38Z3UbiSkmtAmNFfSIqdmivpbfbaW6OuXT7QZT6eaNylO2bM5ffApkK7gGj2qTq+iM5430CeSPrWUXlLVU8lXfpzOnMAjRk5Q3M28mKSpMmkweR+a3vTaA3bpWufgSL5R7uoY/Bi7AWC9p5I2tgY3pwgAITNAjGv2B6KBEMQi6FncwcbrCUy1jTGbAACW7c6Y1dAUFPWMOJh5C22h4qBLIuvQsUL1xKZGMhPZzz23YqWJXdZlGvzHAoMyodpJZPM1yUgeIwwZJFwu0KrhcyqIMmX9xRY4pGediZ11YLkVCOUt5bbCVQLklONUNparjlITjVCaWu55iA5FctCK1W1SuSagySTr7dAbY70tjOprxQktwqZ4rXlt4ClILlVyBSsLV8NkluFTMHa8tUgudXKD62cqlUrXw2STLq7EijNkbuyM6k3BVJadUKF3fanQEqrTgjSbX8KpLTqhCDd9qdASqtULLRKqlb1/j+7HtACuS7jUgAAAABJRU5ErkJggg==" width="18" height="18">
                                <span>AC</span>
                            </div>

                            <div class="col-md-3 col-xs-6 @if($property->amenities->garden == 0) notavil @endif">
                                <img class="aiico icon icons8-Leaf" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAADbUlEQVRoQ82Zj5UOMRTF71aACtgKUAEqYCtABagAFaACtgJUgApQASpABZzfd/LmZPLNJHnJbHZyzp79M7PJve/d9yfvO9G+1yNJNyS9WIN5smP8gH8r6Y+k0/D9CO5eCTxPrP5Y0rslY++NwC1JryTdTcD+DF7YrQfQOVZHNmvrTNKH9OFle+B+AP2gIhbPlwiOJnBVEqCRCKD53bOupcE8ggC6BjSA+blnHQXzRREwwC1WzhH8GAwxvbMlAaz7pFEaHq/MMG9BAD2TQdLU5wHlefeepM/2Dz0ESH1UylHADfPLuMi1EiBfU3C8WcRj6bV3v8RGayGA1XMFZwuQpT0m3B4CWBvwNUWnBKD0/Lukm5mXbkv6xnMPgfeDwIMLnZMYim1FLYHRsqFgcebamgK5hgCSwfqjFsWKpi1HYOqLSgTQ/Y/B2QbrW1EsZqISAS4RD0eZXtKvcIX8WuibplSaI4D1fw8Ez1FYnyqL13OLDEQmymahp6FYjeLwN0jV7sKlcw/Gz3kAS9wp7bLhc8ssJfnYkUUC/zYEV9rKtE/wQqBm7YqA3Xc9SSNLYGQAW0ahuy0Fb+yZ3XjA+hqP9U1ylx7EFrjcKT7VCD+8U1UHmEfmGirHeYuv0nHaJb8289hGVQS8mvQQIucDnolbS72pbuY8uvQQsPEIRsL63pvdM0mvS4WM52xM2b7uQVd4N77TeqVjW08X+1Izxz94AyyHP57r9MSY+0pZ25/kwBO0GIN5f49Rmi/1XGyIiSsNcorBt+rejp30XxMDKVYOh4SnyYvBE1Pk+54ZKZ/WkL0OqyYGlgyOpNBwKbhj8OzTOxiYyaeHgJFCVnzhmdQrKfgtBgMXMp1GDoCLZZF+GNGTccxYceWeVNEqIduAaTTg4kI0C7IwxctNGGpzwmyo2xsDXPQBjnRs0SESG9PkeEPwb0LLcUTW4wHAAtw+fI43o0Dxd3K8rS1qB3sdBW58cIkAuiY4AbOU+mjKeHb06WFIt70jGcCTJGLDzLwQE0DHDFSpkoDle67JIlDpJFc37ySxKps1D9Re4rEKwA/T4YqFBekcSzXDtmJ/4iuOpdVjYg8AKDfSdm28cCJEzLtxzSD4qazIkK+pylYYZ1aJ1y4WSIX2ocoiNYdu+U4axLiaoMQbWAPgOY1viaVpr/8/LqgxjPf0UAAAAABJRU5ErkJggg==" width="18" height="18">
                                <span>Garden</span>
                            </div>

                            <div class="col-md-3 col-xs-6 @if($property->amenities->terrace == 0) notavil @endif">
                                <img class="icon icons8-Balcony aiico" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAA0CAYAAADFeBvrAAAC4ElEQVRoQ+1a7VXVQBC9VKBUoFQgVKBWAFSAVKBWoFSgViBUAFagVIBWIFYgVKDn7tnlDDdLJnM28byY7J/3kt2ZN3c+7kxy3hbi609cpEliKyIdOpwVr4AiHq6cDTk9dHgpEfKcoik69vl7QfWU17JlagOj+ldAGqWoB6c+v0ZocRFqbDOueIi4QoeX0odcFzceCDk9dHgpEfKcstK2pKjnsLUPLa4PeSmx1tBaQ8YDXrrM9nnoHYA3AG4AnAI46enuU9fEUP2PAdDuAwD8/pF2M0Lv84bF8CkD3OQIEcBrMTAB+p0R2r1rADsPRGmoB4v4VOdrdt8QUO09220F5NQGRvWzPB6p0x8C1JdyjcPzaOK1lAMBfQfwzPwMkTPd+LnJi0TwUzLpkoBeAfi8yZYHbDsufUijFNCxMUd/ANgtgBg+ssac1zbLpAB6mvNxzoBY99cFELvtuUHzJXfgcovFR9Bl7WUy4bU2Zk4ZvDeEhvtkXwD4avRcAuC9si4A7JvrQwAXBRDHnSOzOZZRVNnXWFsAqewZCa4A0q5rI6Ce+iXRUk8d53lwSIQ4P34wjkxG5Wv9XZ1edgFcGVm2mW0C0nRTg5XWNfTfADw3il8C4L0hgLy08sYmgnxi046AtOPqlODVyJSA1GCbOcTRsZ2APIN0PxWf8Yon3+dlL0KqW9O5I1+b5RKfBwzuY0CPFNQgNnhGoSwvOzr9swZIn2KVMHTfy/OWfa1vrd+Ow4YAajHIi5C376VkFZA+V6SOO5ClPIPG3k/UbGzTCee2RgpaeC1FPzYg6rMp32kpNdrWscdjGo9aIyynPdBzCEcjOw6ldwracanEpl11xAiwYASQFn3flFIbqPdK+NTLb3PTot3KNEqtLSnpFb2ORhaw7t17HtJNE4DZfE1BKBFST80Ghc6QljH+9d/GxnZawvJfA6q+uBvbjRPpu6N7bVIcxztvIycyYiy1BMMGm57B/gJY2gbOcmmknwAAAABJRU5ErkJggg==" width="18" height="18">
                                <span>Terrace</span>
                            </div>
                            <div class="col-md-3 col-xs-6 @if($property->amenities->fridge == 0) notavil @endif">
                                <img class=" aiico icon icons8-Fridge-Filled" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAABVUlEQVRoQ+1aQRECMQzcUwAOAAk4QAIScIAEQAFIQAoOsAAKwAFMhmOGB21o0twwneV73TSb3Vw7Rzrovz2AJYCpvjRkxQXAEcAuF71Ttj4AWIekVx5UiGxTMI3IDcC4fM8QhCgzsxJ5hKRkD5osvKYIidiLnkVWV2Teb3cOSri4FazWeuOGtl51RUjEaUUqkuoBWovWelWgeo80c444HWKGV1fEnIkTSCLOAg4H1+5aw2Xi3EkjMvSlUKPDHmlekWYORF4atW5WnldvdipCRYKu8bTWv1mrmXPEWVgzvPrr15yJE0gizV8anQ4xw2ktWstsnjyQ1qK1aK2gHrkDGAVVtzTsNTcPo32gk9mPTemOQetdsyiSk5BZAZgEJaiFFSVkOig5UJP9B+hL9NwbTFNWS9YduySBVL9kvasx6J+7Y5cQWfQSf1pMSIjtTj8mnFrmjv0EZ0xTMx+eAtgAAAAASUVORK5CYII=" width="18" height="18">
                                <span>Fridge</span>
                            </div>
                            <div class="col-md-3 col-xs-6 @if($property->amenities->oven == 0) notavil @endif">
                                <img class="aiico icon icons8-Toaster-Oven" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAABs0lEQVRoQ+2Z4VHDMAyFv07ACMAElAlgBNgAJoANgA1gAhihnQA2ACYANmCDcuKsO5+bxK1sN27O+ZVcKuk9PUm20xkTuWYT4UEjUpuSTZGmSKEMtNIqlFizW1HkHZibPdRhuBAiqzqwpKHwiexrv/wLMWkiNfXMArh0RXcOPLv7a+DN3fcqUlvPaMl/AUcO/DdwvCmRsXtGE6o4foEDB/7HIxVVpDYiUlovjsjVNqVVG5G++bx3ikyGiHlq1VZabWppTfqLUtqGKG79CkgJ+ZdWhnlqdTkLZ3up567YSc1eCqhmech/+C6JiK6mp8CHt+XfBIgE3iYRciaSfZ6u2qFt0tS6B+7ipZ31Fw+AxA2JJE8tcSpbgsOscNediRKyBZF4XWq2vVZtC2JSsxeupkH3WadWI5IhA02RvkUuQ3JNLrIpYopewCg2PXtPiPKZ5awAIIvLJXARMZz+BzpL5sa0WVNkTDDJsaWRauoJK6GlToRH4AZ4Am6B8NkaIKfdIEYlooeaMLAeqHICsvoaxOjPaDkBnnhRPiv8J6sXY2yxsWZv53aNyM5THgnYFGmKFMrAH1QPsXSQG8aBAAAAAElFTkSuQmCC" width="18" height="18">
                                <span>Oven</span>
                            </div>

                            <div class="col-md-3 col-xs-6 @if($property->amenities->microwave == 0) notavil @endif">
                                <img class="aiico icon icons8-Microwave" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAA0CAYAAADFeBvrAAAB7ElEQVRoQ+2Z7TEEQRCGn4sAESACRIAMZMBFQAaIABEgEkTgLgJE4DKgXrWjRtfWTs3d1ez2mvl3N7s7/czbH7O9E0Y2JiPjoQINXdGqUFWo8A5Ulyu84dnLVYWyt6zwDVWhwhuevVxVKHvLCt8weoVOgQtgv/DGLrvcDLgFHsMDgkKbwJMjELsBAjsGFgHo1TFMgBPUgYDkYjfLaj6w+6YCsuq8AGfA+8CMtebsAA/AYTQxE9CXuXLXAUwwWVBvsf1tQN5S+R9B/iXQEXAPSN4SQ7E7BZ6bxVRSLoGT5rfi5joyJFsh+WgpmGCnoBTLGiqc52Yn75rsrL+zgWzSKKGS1gix/AlIpXjEwO6AFsCGAfqIvMYd0FUTQzGTYkj/u3S5EEdxUggwboG64tady6WSkDsgWwdtnXIH1FYHa9qO/bbvwiqX03FnuzFKNUivN+Fo5M7lRpcURgdUs5wNevvG2nY4TLnBqvPx4XPth1ObZVY1NnW/zWJrz3IpA/qez07bfRucWj8JtKWWauopA5lvbWOphboXGagKrCaFh0ajmjeKsTDmo2wFi86qNBCPyjJjrg8O8ecUuVrsellP6/liwcj1fj+nBHt0itXXCC9gAlHfTqfxn9HVx05V6FKiZNnRBZSq0KWAsuz4Bi+akHwDmhvnAAAAAElFTkSuQmCC" width="18" height="18">
                                <span>Microwave</span>
                            </div>

                            <div class="col-md-3 col-xs-6 @if($property->amenities->washing == 0) notavil @endif">
                                <img class="aiico icon icons8-Washing-Machine" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAADoElEQVRoQ+2ajZENQRSFz0ZgRYAIlggQASKwIkAEiAARIAJEgAisCBABIqC+qj5bvb0z3T3b3U8ve6u2tt7rmZ577rl/fd/saVluSXoiif8zyTtJLyV9TJXaW9DyaQAxE4BUl2eS0PNYUiAw8EHSr3Dha0k/J0G0L+kw6HVJ0u2YmRQIlN2U9FjSi0kApGo8kvRc0ntJd72YAvkdFi5PxEQK5Kqkr+HLY/3XgCzFzkwE2eBTACEeXwXrPEgyUW6NW6YCgnvgJsg3SdciynNr0wEhG5J9kO8RKD7n1qYDgvuQ3hHSalzkcmvTAWlJHlPFyAWQXWWt65LuhIaTtoLPyFEIYmKBqszns8pQ17of+iCn1JKSpFxaITrarTIECIpT2Nzyk0pRDstjdRRGuA52uI4e6Ur4nusoiL6uBlR3IChGt4wLAYDW2im1pJA7WQBRN+hma92tKxBAfA7a4vMotrXlxwAAJ6aQG5VgugHBTQCBIm8CiBIDuXXAEGMYAjAlN+sGBHfC10+cCVqQhLiCGWIGN8tJFyC4EMHNKRJmtrrTmoKwCxP0X/cK2awLEHemZJrawK4ly0ZKu+H0/mYgDnDYwIIjxJ1vLvCbgXjCwkiGs/MIYVbwUNKpSUn0sGYg8XACX6awuQVhjUJIFquJG7cxvh89uZ/jK8OFT5m5WjMQUm784DVGUIi/L1FdIDEcBPAYoOSaFEfca0magXgDNsfyuAEPRCnSMcHq4lZyO0CSLLgfNjEQ7ko9sawNQboByQUilsfiADMLKEYLQzZCaQCsFb24YxgGBOvhHrWtRImVpXUDgbE1N25mxMF+Ylx5Fm0z98Dm29HB7tTYo79aw+K+a2j6Ne2kV8aqI+RHSB5DCyKKE6ScIUa2KOmcKzVYc4ywofshWGE6WFP8apgjhdPH8X8nTSNKOegpejy0hxDgBHquovs5XRhhM+oDqZg2heDEzVqEYwFM04wShzs7WKF0XLhgBjBb3Qw3AoR/sKmtT90YsfUBg5vBDFakOyY110g8PoIJOoG/MnywsrgZ7sVPds5qHgeRfawcoMl2Hgd5/kVM4FYld4qN052ReHPcg4LpeVWJFUDSJE4zoEsVxvJuGokBejOE3okY8rml1o2WDDKUkRIDPdcvgPS0Zo+9/j9Gzv0LA6RCztzn/hUOv1RDmnSV3tp29IiBpT1I5XQDfkcm+1ING/wTrznZEjBD1a0d7YxiId2X6T+MnHrx7A+8iRRChia3pgAAAABJRU5ErkJggg==" width="18" height="18">
                                <span>Washing</span>
                            </div>
                            <div class="col-md-3 col-xs-6 @if($property->amenities->dryer == 0) notavil @endif">
                                <img class="aiico icon icons8-Washing-Machine-Filled" width="18" height="18" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAACwElEQVRoQ+2agVEVMRCGfypQKkAqUCoQK8AO1ArQCsAKgAqQCsAKxArUCoAOtAKZbyZh8o7L3V42effmzWXmhoFkN/vv7u3+ybGj/vFe0rGkw8z8XH++lfRVEj9Xxk6PRZeSPs5lqXFfwJyma7tAiMS1Udncy96lkekCIWRv57bQuP/PNPW7QP4blWzKsif7FyAVQkJqxKLyrZPSQ3O97/icEdmXdB+seiXpLrFwaG7jgOxK+psBMjS3cUCokJ+CVfSutPkOzW0ckAqvmZaqVcOLNXUsEbF480/gQDehKv0OQm8kvZQEn+PFfm1RNrKmSURoYjDSZxQ7YwxgWO/hdtWBfJF0Xujhz5LOCmWrAfkX0iSmT6E9Iu2I5IuJCqoBOZDkBRFtB8yvOYB40iln79Q0c0dk5VAz0Ytjy6cc7txAVo6ZY5ZNnKea/TDKuIA8SIJ2txzQ+z3DBi4gz24wDBtOXUJ/OTEIuYCQVnjsQ+jSVBvOFVQvuvlVcs4YsuUoyBNdHnSi4yL8bkkvFxCOpWP3XgDioSikp0BoCRSFB7qSG8iyZmy4gETleJ5ujhfxKJEBIJ62DN61CJj1kYcRaetwAYEUYnCuEWIQ81QfntitYQHIUF4BkJPHIUTdQipdQGp285znu5cRuXUuIC17SDTYenXrArKO8su7x9eAseECQhXi3qnl4I7L0nRdQADQMr3WRlEAQuUBTIsBladyWYY7ImyyFTQ+eqtmKZ6SUnH/KhFBGRyLFPOeEkkluNUQbelLtWpAonJOdpC9kkGZLb24qA4kFoDeL64ZdKQSVN3z5bgJkGhvyqciv2KO9IF3xQs6a2UainJTICXpVSqzACn1XCu5JSKtPFuqd/sjMuWWr9SLteS+pxcU3e/s1pNZLWM8egb/qQbF1ssxjxFe2dF/c4ob1Pia5DW2Tz77VewRtNmgM4g7ft0AAAAASUVORK5CYII=">
                                <span>Dryer</span>
                            </div>
                           <div class="col-md-3 col-xs-6 @if($property->amenities->dishwasher == 0) notavil @endif">
                               <img class="aiico icon icons8-Dishwasher" width="18" height="18" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAACSElEQVRoQ+1a/zUEMRD+rgJ0QAWoABWgAyqgA1SACugAFRwdUAEqQAW8772Ze7nY7GyS3cu+fclfu5lN8n2ZH5nM3QwTabOJ8MDkicwB7I9UW68Adn1sIY38jpSEwvqH2yIyNtPTDa5Eci2N/nYnk5wCeJbn2P7iGnkHsCngPwBsyXNsf3Ei3wDWBPynQyq2vzgRmtC9EDnxTCumvziRXB/T8ZVIXzvZ9zzR50jfAPqaL5pIPdn72npvnurs1bQCphU0Dfk+Wb7qND4ZqEW0FJFHALdOquKf3Ja8ePj1b57nQsgnou8h+WiIPAE4FLQHjmaUqCVPJpJ6h/cXdH3kBsAZAII+avABS74UT7r6yBBE1gF8AeCdZKOBiCXPItL1XAlFJ78/931BJlYjlUjgHKgaia00qimxTLkNwA2VoQSXEegBwBuAHSN7XblGLgFcSLwnmbamdeMrABzntlzg2Wk8QyHrUSzpEBxBNjWSpfxHSj4MraMiQjBqMnxmpZCAXwTlnrxrBf8YAPMlvxXXiAIiGdahtNjmA6UmWLdqIsFvXSJ64HEMn2PlS2t3PUfcQVyUyRxJMQCw0bEJnmmFb04h07qWeUIpiiXPJtJm8wHXWXSrRkha86umpNGSJyeNIYDWRSnkI9rPyryWTF3TsuSjIUJzohnqzwsK3E3j2+S9ELEy4bZ8zNJgsjzF2SdDxHLoIeXZJ/uQ4GLmrkS6XqRidjXn22SN5Cw65NjO4VfvH0OCSZ276Z4z/T/VpO5WsXFjc+bkjfgD8cb0M7/ZClYAAAAASUVORK5CYII=">
                                <span>Dishwasher</span>
                            </div>
                           <div class="col-md-3 col-xs-6 @if($property->amenities->alarm == 0) notavil @endif">
                               <img class="aiico icon icons8-Home-Alarm" width="18" height="18" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAABfUlEQVRYR+2W4THFQBRGz6sAFdABKqADOkAHVIAKUAE6oAMqQAdUgAqYM3PXRGSzebHmzZjcPzt5L7n33O9+u8mMBcdswfWZAH6jwBpwGSM8AJ7HjHMswCFwDCxH0TfgBLiYF2JegI3o2tW4jXUn1kdANVwHxVAAO7VjOzdegH3gLq63gStgNa7PgVNAZXpjCMAucAY4c8PEFmgnFzKNxvv0xBFw00fQB2BBCwtgPEXXJXkdj2qsx3MCCNJp0hxA02TvYTC7nifMoTGXQq1Ok3YBONetqKTJTDRqi8XYBE8mvQf0y1d0AVhQ6Y2SRxzHB7BZkMZ7DEfxTclcgfRA7n/94a5wJxjOXHPmlMrmGwNg8YfGIZSad1eoRBdEVQC73QOcZ9ohOl3fXDdUaU6lKoCd6uyVxlngGfAa1/7ejqoAuWR9vpkAqimQEpVOxPbu+j8A7c7Tiyl9H+SUqaZASfoJoLoCYyXPPffj3VN6GS0MoHbhbL7SB8efg0wAnyKlXiGWPF1EAAAAAElFTkSuQmCC">
                                <span>Alarm System</span>
                            </div>

                            <div class="col-md-3 col-xs-6 @if($property->amenities->s_pool == 0) notavil @endif">
                                <img class="aiico icon icons8-Swimming" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAADmElEQVRoQ+3YjZENQRAH8L4InAgQASJABFwEiAARIAJEgAgQASJABIjAiYD6XU2rubndffP2bl+dq52qq31v9U73/6N79tmLC7L2LgiOWIGcNyVXRVZFFmJgtdZCxM7edlVkNnULPbgqsoHY+xFxLyL2I+JTRLyKiMOFxDja9qwVAeBZRFxtigbmzv8ApAXwswCiwsuIuBIRT8rnRfCcVpHbEfEiIm6U6hLAm6paMR+LtW5GxI8lkMwForinEeFqDQGo630fEXcjwvXgPADh/dcVgN/FLvoilxhWAi7Zd+9rRFwqQAAaW2KRlMOCPcU/n1KzVxHTh4UelOwJgP9zGlFHr2SM+xocAOtx2QM4FhuaYvZ4V6ZdC1Q8NQ2OE6sHCP/zODCWUUqBGkBtMzHfIuJ6SVpPK6Dctwdg9aLEl5LnQ8khXn75WFPOwT7rAQIEpj4XttMubZ9QiQUkFSMpKwGSLCpKsVZ933cDgqJAsFW7ss/eVqr/i9kEhAq/it/zbMAMNrPRh2wmAUCUahPnfWCvVdXKIx/G0441mHr6XW5RbgIi/k95CCMYTUBjADKHuO/li4LrseuzgaCBc1BknqmaRmN6gGhekyqXacQGdaMPOOHo1pgdkl0xqUBacZMiCMx+7bZWzW4qMTg1BhrXlEuvD/keEY+qgZA9MnbWmGb2m9UjY0xP3dcXeghr2GMdRbfLv7OYgeD1BYA8a/Lc8P1W2Q8I+7H3ibeDHmv1gmEXFkzlMAfQ1Fuv4jAtRh8pEgjg2gWE+NnnyCYgCq9t5AwBoMeC9haH9Wx8+1FR0QC1Y32wntMowho8nlNnykZTZKQqbKTRZ625QCSnwjY2miqwZ/ROAgREQRZpN/2Ka18at7XRUDE5io319gdZtzqA5Pw2CR6OePusbFQXpi/yPao9F9hMXWry2evR0Gl/7ByxmRnuZS6bz3dTxzoLGylU4dj3lz/EuhkvoIxxdZ1wTt0jmta0ydGXjGTSbWzkGcS4jhVuPxMrWQcqlfAc8K7+coKJUReij7VC2+we9hBAqVCyJmEmbRnJpGLzZbJlOwt3TvSO5nqPrIuyCQj5fhJM/i9Ksqkwb7zbLKMYuwrO66ZB0ru/gUCRBCTHwTbj1wb+xhhPxfLaW9jcOAoBpBUOtwEyN+GSz7E0q+7/70COjd8lGdvZ3qsiO6O6M9GqSCdROwtbFdkZ1Z2JVkU6idpZ2KrIzqjuTPQXYHfjAglwBGgAAAAASUVORK5CYII=" width="18" height="18">
                                <span>Swimming Pool</span>
                            </div>
                               @if($country == 'in')
                                <div class="col-md-3 col-xs-6 @if($property->amenities->e_backup == 0) notavil @endif">
                                    <img class="aiico icon icons8-Car-Battery" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAABv0lEQVRoQ+2a8THFQBDGf68CVEAHqAAVUAIV0AE6oAJKoAJUgAo8FaAC5stcTObJZC/J3XtJ7P2VmWx29/u+u9tkLzMmMmYTwYEDGZqSliLrwDlwDOh6cXwCt8AloOsuI0kMC8gVcBqR3TVwFmFXZ5IkhgXkIyixC7zUZLEDPAc1NjoCSRLDAvIdkmuyi7FpwhjzvGnjQCoUm2wZUy7medPGUqTjtF/+Y1Ug2maPAC3gMQxtPndh6/+t7A/A/hiyr8nxETiQIheh6H2FWiCUXYvbsrhQEdXsUQ1akyoC8gZsASehSi8rmRRx9MZxA8wFpNwRVNCGrsQieCmjglqsEXNrS0FdRh9F/g4kI8NtXbsibRnLbe+K5Ga4rf/BKlKWg3JXtYA5EIuhvvddkaZXlCo7FtNdP9L6xohaI32DWOB1v2+M/wUkhtHUNr7Yh/Y94ooMTZG2ay5q12rrdBX2DmQVrDfFdEVckUwM/Jlao+80zoHNkfd+36vdePV9dTJ7P4IesHq+h6Ebr+uiG6+hM4a9THM4t9snne1Uv+p0TqIzh+3ckRP5fw0nVsrb/0VJRGo6N10bBukySORpMkB+AKHwgteM8EQZAAAAAElFTkSuQmCC" width="18" height="18">
                                    <span>24hr Backup</span>
                                </div>
                               @endif
                           @endif
                           <div class="col-md-3 col-xs-6 @if($property->amenities->parking == 0) notavil @endif">
                               <img class="aiico icon icons8-Garage" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAADwUlEQVRoQ+2ZgXEUMQxFlQqACiAVABVAKoBUAFQAVECoAFIBpAJIBUAFhAqACiAVwLyM/o3G7J7ttfYSBjSTSe5uz9azZH3Z2bP17JaZvTCzxz7FWzN7aWbf1phyb4VBS4ByilWAMkFKgHMze+0/wDzzn2trRCgD5LqnEI7KTszsaCKNgOX9R+FZYEm5nyPZMQICwFNfZf7G5gBKH0sgIAA6Xgq0BGQEYAoIgAf+wWKgXhAiQGooAp/89ceRtDCz+z7OvQDEPESoyVpByGkGJiWwLIDSyRKIUs28pOxWq4GUAF98T4xGoOYXQKTcbX+wCjQH8tDMXoUIfPeVQQN2aYgpEbkZgJ6Y2R8LWYKwEqgxv7HLAigXqwQChJK9ARLIHY+AABAzdGHXEahFGyBSTqIKyHMzOwMEiA9eiaIaDwlUzaOBz6mYsUvAzwNA3nsdpzLwwFUFKNkBIjoUpFNAfvkTN/4iCEEhB195EUFqpXggG1b96kUgRkDUZ0kkR72tasXMBEMg5CYgaxhtSeyka3MsBqFEU+UwSh9QGYbziDB2MCV62RFhc5FOCBKqm2mMhyCTZvuNAy+KCIL0xhVfe4NV5H11xI3zbx6j3CO8RBcDgpaEVqRFkLtBcJRo8FuTxHToBSifP3RN02IBSFRqutYNorDTwrNPpsCWwEw5TuvB2aQlfbtASKPP7rw24jszo0s+9d9LIPQdOU6XQWRUUIjG3coVUhcIuXrRCrjTmojejF5t9K6KhTrzZlALFVsn3Y1NLVYzCI4SDUw5y2smX6P8qmJt2g+PCqBdIKw2lalUbAmV9gqnRSAzDWc5FWpvTAkvoPFwNRsR6UR0kBQCjA1e7pVMkHJvsEdwXOcPzRV1ZhZE3fBUE6m9Qsu/LW9H4GpzlP4tAtEgI472fHdqMZtBCGcMpYQKB5TDPc4sfTbuQco85V7GXYL28GxEyFPCq5uLq3DgYm/+cAogSGtdPFTL77a9snSVR74358+/DUJe0u1KP9gziGKGstfGTYtI7LdiirT0Q9tSqnXcNBD1PnS/VBGM9+hSRxrH1nHTQKgaVI9YxVRNek50ZXRax00Dkb5EEDV2sa73VqbWcdNAlALUb0QSQ6TQnYzUqo2bBhLPDFMNZe1IOhep1nHTQHCESWmtY/lFZZdCCK5l3FSQ3vzPfP4/yNYVyFzqmbHKFj49Irs6k+wMZK1/Q9QyYRKQNyVI3B/Fm4reAbOyrWde3fCcA7Lmvwiy4GrjHANCv8QVD3pQ3lbUBrjsz7nd4TR79Bu351yRKzWhTgAAAABJRU5ErkJggg==" width="18" height="18">
                               <span>Parking</span>
                           </div>

                           @if($property->type == 'commercial-property')
                               <div class="col-md-3 col-xs-6 @if($property->amenities->water_storage == 0) notavil @endif">
                                   <img class="aiico icon icons8-Oil-Storage-Tank" width="18" height="18" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAADt0lEQVRoQ+3ai5ENURAG4N4IEAEiQASIABEgAkSACBABIkAEiAARWBFYEVDfrdNbp6bunTtnXnd3S1dt1c7jzOm/n3/P3KO4IHJ0QXDE0kCuRcTtYqyvEXG8lOGWAnIvIh5FxP2O4h8j4l1EfJob0JxAWP9hAeD/PxGRitM7gV0qngHo/VxemgPInQoAhX9ExOsC4qRj+cvFS08j4ka5loC+TPHSWCAUYn0K1dYH4PtAhW6W9cIvvWQ9L3UNsPeRrUC61v9VrM+qzZsX7RhF2DHK1bFeGgLERpLXRqxIWI3yk8Jhi5kZCijeJrzLS4pDr6H6gAiZ5yWmgZnD+ntDZIeXgFA4Xu4qDruAsMqriACANVjfgw4hcog+ogKgx9t0qYFQXPicJ3lRvHTa2cX+t2L9oVXn0IDpzEu35FJ6hCd45MEBQ6jVMELuQ0Q8UxASiMTmCfX8PAn2wDPHdY4Ao5xK8LMeXpSX+Mr1hoh2q1b2BTecZaEnVn2q/38gDe4SsmTOWWR1j8i3nwXI9X00o8E4qwPRm5KfKSBq/hyyKhBk70mhFDyjT72ZiT2sBkTV+1yYQo67uJpOfHcG1rwaEHlxpQxdSb95RcL/jgj5MkVWAYLIof/b6E7SCnTcfWNlcSBZpcztu5oqJczrU6rY4kCSfPblQebPhuyNdMniQJRbbCFL7i49leK/E8rxICDc3koa5QORyEPiP/NIQSDoeIswlDDu5VpuagGiEhlFM2SGzDSZ9BmCRumkMkMA0dHIsQhpbIn9IbnUB2hQaHnAWBqvZ8gTlu4TzRJdER5jZHEgGft9VWuOXrI4EBa2iTeGQOFWteBezntHxutj304uDoTSkhavUv0UgpxDnPenWfLKlPlkFSDpgfyMUNP4+jPDmNzINasCmaLovrX/geyz0NrXmzyiuqhC+T5Y95WgSb/RCh84k/jpH+hJvux2jBjWr5hMiUqzaiXh0f0cf/NFddId+ygOzhP7WOd8E5DuO67uMdIHSDZPxzXP6h53e0weJ83oHvft3wQkLZujqsVpSRbiHefSYmmt9BAgPgHwJHHf2zKHWMvT6XXX/e+e5Fz2FxFpqFqfJiAe7kH1qFo3sPpa9o+6N3Svd583ZM2u/QcBwSrP+ncSXteftrJfRG4sWVy7atWNcUNQE1ESOdzoUJ/YWo1BZ9xtM/8kkExEIdUleq0brHU/EEJsU1ASSLLW/DXCWspM3Sff1pzUnxXy5xUtI+dURaasVyGlwaaSDvnBwJTNVlv7DydnCEJfbM4TAAAAAElFTkSuQmCC">
                                   <span>Water Storage</span>
                               </div>
                               <div class="col-md-3 col-xs-6 @if($property->amenities->waste_disposal == 0) notavil @endif">
                                   <img class="aiico icon icons8-Waste" width="18" height="18" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAEAElEQVRoQ9Wa/bVNMRDF96sAFaACVIAKUAEqQAWoABWgAlSAClABKkAFrJ+VuSs3b2aSnHOee+WfZ91zksyejz07OU607Xgs6Z6kS51lv0l6JenpVtufbLWQpOeSHkyuB5Ank3Pc17cE8kPSeUnXJH3uGHdV0idJRObysQH5XQwadc7s+ynekU1flrzfwnFL16Ce7meTe0DIXwr4GEZaTx4Q8vyZpBuFfX6Vvz8PhAZ7qKVz5e8HSY8k7dnTAmHS11K0ZvcLSQ8PBMK2bRkREJDEDkwLhFy8K+mLpNvFAwfGsLc9/emtpCuSXte12wIhGrw8QqGHAuhSdwvEKPFQRs7uu7O/BUIjI2z/wyD9ic7fEdEvzHBd0k1J/PsYBiz6XtLHwqh7NkVAKKhbpQlBAMcwEKM053eFiIaAWCPcTNRt4InUpigiKfoNjFqyRJolEZAoHykuJAudlW7rDcJPHkcpiZOov0g7Qf8oC7KhVtFp3UZA6PDI8pYQeilnHO8WZFmvRyTRHqlazkQj7R99c6GSArZJJFsMCJ6kqXqj13RNjtT1SZSYh+7DyadGBsTzXEqBZfXeOaP3fNG+GRDTXdQDXmIYkMzjPUN7zzk5Etm6hyFaqZs9fVWHJQOyKFcl9Qxd8rxXm2FnByzq943TSa12kNEecy0x1Jwb1YKl252ifqdqJEqjHuusARLVoJduQ53dXvKM6skXonSxHHzaiBmrfQ/uvqJG3HNOmlqA8dKol69ZxHqs563dpd622Xn07BllXosYZA0QY0q6vimDHvhTXdsDYs3Jo+Coe68B4s016k3vDkavg7wuS9rR9duxBojdVtaM6HX6KdaqG2Dr/az41gDx1u2x5FBqRdrJjsTeJUXmwYwobK+9I2zRWN0LkV5qgXbWS5mx2bOoqLvUO8JavGN9ofb+Uq+PgKyLutd3drUyEhEvR0cM8o7Js/OGqHc0Ip73Ix3GmrPGmlczh3WvbUci4h2mMk9lhy+vL2VAsventNYSCs5AZlQ6SyrTQEzrtJ/JbOP6KJwB51kExO4I2qOsHYujI8NUsc9S8JKIrKLe0WLnPa8BmpxvDztLgBh51LeItk7bID1N2JXxI4zS0uwSIB7TZcw4rbVsgrdRdCEQ1RRrRTnvyffeuWe62JngSWnrut6lMsoYcthd+5ddSVGAtndTlqa1evBucdy0mqmR7AoVg9sPpRjLb+3vALCPm7VR/Mac4SvSFtFIQ2SOpUt0Bgk9teKBdzZZHZGIglfY2Z06pHptldGI1BT8L75iDYvFJUBM95DHgDmr/0BAvfCJDaIY/tA0ExE2AAR3Vv9i0AiJzJDDZoBY0cPvNCs+OZzFQG9Bx1D+EAiM+AOJxYFCB0ukBAAAAABJRU5ErkJggg==">
                                   <span>Waste Dispasal</span>
                               </div>
                               <div class="col-md-3 col-xs-6 @if($property->amenities->atm == 0) notavil @endif">
                                   <img class="aiico icon icons8-ATM" width="18" height="18" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAEi0lEQVRoQ+WagZEOQRCF30WACBABIkAEiAARIAInAkTARXBEgAiOCBABIqC+rXl/9U3N7s7s7e7t/5uqK+fu39l+3a9f9/TckQ5kHRVw3JV0W9LVjWL8LemrpC/RvggE498lEBvFcM4swDxNoBSBnEm6Kem5pB8bR3JD0htJ3yXdwVYDuSfpU0L4fuMgbN6TxKD7kj4bCFF4Lan74Z4AISpE5AXRMZBjSS/3DAj+/ivplaTjMSCgvi7pj5MqRQtFu7VQ5L5JQpm8EKErkn4WcrcKiDnoDd8mIWBj8mkpeQYEFEeVSOhnARQqFXO4Cgi5QkR4EDGgvhBB05CQLrGgeEeXRB0igQ04FjXFFq9qIDzAgzY+AikV0zmA7YxLQCh82GARagaCFx4Hy7xhBDWH4fkeEQjGwwSvkxSZpoiQA4TTuQBf4e+aQHg3pYHFu3FuFIIqavV5e00gYxGvAoI6naaExwsUHjyyJhAYQaEmMiT6o6wMVAGBn4BBBlEvtPzaykB+JaXEBtvSnOxRJfZatT4kxXBEkFsisya1oBNMcERQzoetdYRQYrRVC/VgwzWBYANqadXi3djQJL8Ho1pEAsWATqgWbcNlRISWxaqFcjbXEXLkQQgLfOUEuSa1OG/gSK+PU3LkYFQLIJxF3P1yNibEjgj/LrHY190vNKKWuPulE26uI8gcGyB/LJ8FCLVBLgHExkLleCbicMf/ofwsqrWE8VP3rGpRpm6+5nP/JxByJZ6b1/S438W8IOZGc44AglY+TjA8WYmzV086zs1jKxBz+ssnNPys9D5a+BxMNbUYo9K6x6JUKoioGNIMoJZFp4DEFiU1K8bIcDcenaJavAQvIHteEQgAPfhmHhUNqgGEA5iPeSCN5MYzu/egDMCOfARVHREPIDyKYWO+58ttPZ+JB68aAP4MXoZarhkGwp6eX3kklQ8e2KMaCB6w13ID4zjIhSsfoA2B6nsG4/LlaMeGsQmIN4QyvvyJw7r4Qh+CaCzzF+aG4WXyj2jE/LNxiAYO9KVO32C9OiIlj8YcARytPgulgcfQhcj0vRxHkFeICPlHP8eiRSdXSjnSF9nZgPjCBQrCaQwBgI+nGBq7aIACnkg4ylAMz/uC6VKAlDzloRoG2tv+nOe4HvaVnt8MkGgcEXMOkEM1V3qTgUy9BEW14hWDzxAt8ut8i1cJJdUa2rOrQRjDXQcVM04nhh50ixLHQ86VvIWIF0L5BQ7vIGecG4ByHSld6vTZhDPPMAYP5GfhISC1Z/Y4cmW/0sjzojnC891sASCu3u57xqhh3o/dj1An8KzbG95D8uf9Uv4+HFubT+7vTjDGKlPbJ0VqOUcwLk9kDIq3xL4Czx3g4kh3i1TzXAu1eGZ3qzsWhfj7SC0bV7rWxqDYsrglyYF4j3jd1iwcY/QYq+xDQADMgczNH0A4IOXTl00A8WwW9Sn1VyiSh84kpee40UFQm995ttxSR3b7XCQi9EpjzWELZfksoOjVVqGWqUCSzf3nHuzNV/OfkkyJCJ6D51DBw7tWz/d9nmYS+jVPMf8BSv/X4HD0Iq4AAAAASUVORK5CYII=">
                                   <span>ATM</span>
                               </div>
                               <div class="col-md-3 col-xs-6 @if($property->amenities->elevator == 0) notavil @endif">
                                   <img class="aiico icon icons8-Elevator" width="18" height="18" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAACxElEQVRoQ+2a/ZFNQRDFz0aACBABIkAEiAARIAIrAkTARoAIEAEisBsBIqB+r6a3uqbuzPS9dbW96s5/782ceX2me/pr3pGWj8uSPhb4XUk/Z2z1RdLN4Pqvkm6N1h6NFnTm30m6X+bfS3owYy+EuxFc/y1CeimRV5KeSPpVhLkk6bWkp0HhrkmCTAvn90dzp6N9lxB5JOlN2dhUjqkwHkt6O/rRMo+AU7h6fwgPx1wiq/64pLUORXOIYA6cIJd8yozMHLj0aGpoDuWYPY6vWvt3tTKHyOqexkmGs7hXPn9wTmRoUrZgDpHVPY2TEi18Kp/vzHTlB9gcIuHT+RcL/zsiz4sH4UJvaeBQcPcv0Ih5jS0RqGU9EPlRXB4uMxR8LhBji2unEPldBNvqfTnIHyHCvXnpEje09iwQ8LJwISI+mnuLGkXvTFyIiEXcz1XKfltSLwJn4kJEzBFccdGWKMz3uL7rjYufiQsRwYSoGTwRzOa7pDNJrbiTiQsRMRMhD7IKkMqQfChiWhm4EBFfyXkrojLsVW6ZuBARhEcoor81C3C/lLSjeiMLFyZCbU4l54mQ31Bc9UYWbkjE2j2ttg2amWoDZeOGRKwixDthSr7wwdSultys7jll47pEEJy0BBJopG6+cepoBDK+c5KNw7S7ROxUcbm44KlBcw5X7DuB2bghEcuIfSCsyViE9yVzNi5MZJTa1yVAtCRYC7cTqc1rrZNdqsldI7tGqhNYyyTDpkWOddKIIw/dE4J5NxMwCzck4vu8U09fvqHtX5SycUMiLPBvF3U8sZOfetjJxg2TxnO2E83ukbtszf8N3E6kpynzC7tGGu3bnknuprWbVqDzv+RuzTKtVrekVa+YQBm4EJHeS27vPyKZuBCRQevqQkyfE7GG85af3s6w8WNJvOpueRweQxmQIdmjT7WlQd+N9u3xH5drkN9JH4HrAAAAAElFTkSuQmCC">
                                   <span>Elevator</span>
                               </div>
                               <div class="col-md-3 col-xs-6 @if($property->amenities->conference_room == 0) notavil @endif">
                                   <img class="aiico icon icons8-Classroom" width="18" height="18" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAADoklEQVRoQ92Z4XHUQAyFXyoAKoBUAFQAVABUAFQAVACpAKgAqACogKQCkgqACggVwHw3+xjFs7a1ju0z2T83dydr9aS3klY+UG59lXQ/J7qq1Kmku+x4kNz2T1JuH2I7DK1AsvJrALJzm4AQQtadNSxM7jEJSFL3qmKTgDyR9CJEhAi9lfRxVdMvbtYE5LokMlYfpQD0QNL5HgA1AflWQPwsETkuBpOKichNSf9S4Mpg0kCeSnovCRBEpOt1ogUIwDyT9GGrQByNx5I+9xj5SNKnhqjgnFeSbhXgLy9By3RELHhjYDMM+l5AjtUYRzj65F2h7JRg7gUI1CTCLGgIJfkOXXHUlJUGwma3JWWodTaQ2ThLGE30HAFT8rck/p+y0kBMhR+lMasddhs4dNjdcBosgHgOAEeSXk9BISkNBP2OCmAoiCdl03sl/WLUUDQwksON56EXepxE0HWZjroJCF6jdkCx2gIExnSjBcCHBSzPUTTRQ+15PpDSW4LTBMSKoRkRMSAAYBS1A6P5HY8Dis/Ie9MnZi3uEG5EW4yPsmkgGPOmGIexLYsiiqGOAuA4K+icq3imgIz1WBEU/MdgG85npFrURZNJZOZYKSDmMhRi4yk0AADnhAPvpFA7T1NBpYBQrdn8sGSals0wnjoRPd+XFFr0dmVTQC4IJXfjPGF8POikWBLCWEOZmQl0E8RiQKwY72M4jSZ1I7MyQDiHpHGvxYGMNY81YBkg3QL63wJZnVpExG1IhlZzyJz20WDKYY/PuEebw8iUjqWApDafSWjnwKWArE2txYCsTa2zpSIyE2vyaq40EBo7Wm4vKip3Cg/num5CnssS/RWLis7dfEieW6Nvhxn9o/LdiHB5omeqrdr9mg367tz8zjNx+eqb1Z+Wj0BiJBic0crTANIIovBauLJiSFfeQzwiY2f4ihvlub+gz43kmP6UfASCIbTgBhG95kjFfmdI3p78EigHhRhaZPU3yUcgv0oEapPF2kRxSJ5I8n8cwA1NLmv6m+QjkKYHw1wpC3xR/a3UilTJUHE1+dphhw5w3G+jeFvFwWfVDu8m5FvS79AhraXTVeUjENImL3b6hsp4nplUTLObkTcQT8fxLCkWasXXbHwndZpefLr6b0H+GCBEgPHP2HTctcHDty3JHwKkVrx6upRdlByZmJH2LX8EEBsXM1KfYbEt2ZL8CUBa7+dblD+/KkB2V93McKyPapv5HSBr36+XAH/2F4BycetzoFVTAAAAAElFTkSuQmCC">
                                   <span>Conference room</span>
                               </div>
                               <div class="col-md-3 col-xs-6 @if($property->amenities->security_fire_alarm == 0) notavil @endif">
                                   <img class="aiico icon icons8-Fire-Alarm" width="18" height="18" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAD4klEQVRoQ+2ZgbEMQRCG/xcBIuBFgAgQASJABIgAESACRIAIHhEgAkSACKiP6auurdnd7r7du3P1purq9t7bnem/++9/enpPdCTj5Ehw6BzIoUVym4hclHRb0h1JXPO51gB+lvSzfd5Jet+uV8NfAYLhDyXdTFr1QdJLSQBbfGSAYPiTAQA8jWHfmseJBIPIEKErLWJEzgaAnknie7ERBfJc0qO26ndJTxsA6BMZgCKSPHe5PfBC0uPIw5F75oBgwNsWhV+SWJxPFMDQBubDIXwutKjc3WK+zfxTQFj0rNEEEFDLqBNx0tQ9UA9qAYY5b20LZgoIIDD+S/uuRmEMEI4CzNX2DZjyGAPyStJ9SUSChF0ahBkMGISCyKBolodpQD0gRIFoLE2nMeM8zYhKSc16QIxSSCQqs4vBOkg7IEoUGwJBIlEpJBZPrUWpnpqR9EgzKpbeNIdA8MgNSQ8kvd5FKNwa5CS5ySaLQ1PDAyHxfrSnL+0wGj7xy+t7IFt5JOW+8ZuhFOVMmhEeSHmSJtGUMb76pfxAWjOj7EwPxPIjK4HsM59akeiNRiiuJ8GY9H/MVtceCMbgURbPlCIWSRa3JOVviEY2cVkfO1gfO8LDA/ndnporJIeTk6AIhRcIEw6odRq25t+NJTuWAAKFKDE8EOj2te1HXGfG1kDMoCq1yDE2M4aV/lVqUR4R1fBYKtnhNFHxA2PgfEa5xpKdqE6qogfCTn6vouFNfjlwefmlks2AwAkmv2/aNX8LqeL/sCGGVNEDsQTFC/suUVA6i2ZIFQ+xaBxuhlOquBGFIRDjKN5AvXZZxiPXKNWwzrLc7aniJpd6mx8KxDl6HwerXmkC5WdVceqoSzSouzLlSlj33Y0oHadSojFW5wGGUySqyiAS/N6o4lg5gpTSFgUMibcWxTDeKBVpPozu+lN1lVFskb5TJ1S+b0bLyfagsahaQdm9d65BZ32npWnm6RTtm02eVeYqXbxmJTlgoBwUqFKN+aAsuz7XVvpH5rPuTvf0OAfEwmw5w28SjETLvPOwdynMY8VgJCdsfd9r6zYMo0CYkMkwBGm2QbTstQKbk3+tQBFprxV8V4Qo4IhoIw7gHLaYa3RLyAAx4005KlLLM5k1w4KQmXQIhHqMKOFtvMWiFi0SGN5DQyKG963VE12TuelzMfdsDzo6qfd+6QQXPMKiZjgDhbJXeyFV2xeQCD3txVKo/3xoQPC+0RFKRmT5L1sqQCpne9uVaY5nmxEhUakAsVcAoQUGN61WUVeAYBtgSEh7QzsHikhwrgjxfW6y3v+rQCprrfrMOZBV3VuY/Ggi8gf+2g5CGpnruAAAAABJRU5ErkJggg==">
                                   <span>Security Fire Alarm</span>
                               </div>
                           @endif
                        </div>                      
                    </div>

                    @if($property->type != 'commercial-property')
                    <div class="post-row padding-top-5">
                        <h3>Restrictions</h3>
                        <div class="widget-box user-wid widget-bg-color post-author-box lp-border-radius-5">
                            <div class="user-info">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Restrictions</h4>
                                        <hr>

                                        <table class="table table-bordered">
                                            <tr>
                                                <td>Smoking OK?</td>
                                                <td>@if($property->livingpeople->no_smokers == 1) NO @else Don't mind @endif</td>
                                            </tr>

                                            <tr>
                                                <td>Alchol OK?</td>
                                                <td>@if($property->livingpeople->no_alcholic == 1) NO @else Don't mind @endif</td>
                                            </tr>

                                            <tr>
                                                <td>No Vegan OK?</td>
                                                <td>@if($property->livingpeople->vegans == 1) NO @else Don't mind @endif</td>
                                            </tr>

                                            <tr>
                                                <td>Commercial use allowed?</td>
                                                <td>@if($property->livingpeople->no_commercial == 1) NO @else Don't mind @endif</td>
                                            </tr>

                                            <tr>
                                                <td>Any Pets?</td>
                                                <td>@if($property->livingpeople->no_pets == 1) NO @else Don't mind @endif</td>
                                            </tr>

                                            <tr>
                                                <td colspan="2">Age: {{ $property->idealpeople->min_age }} - {{ $property->idealpeople->max_age }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Available for</h4>
                                        <hr>
                                        <ul>
                                            @if($property->idealpeople->men == 1)<li>Men</li>@endif
                                            @if($property->idealpeople->women == 1)<li>Women</li>@endif
                                            @if($property->idealpeople->student == 1)<li>Students</li>@endif
                                            @if($property->idealpeople->seniors == 1)<li>Seniors</li>@endif
                                            @if($property->idealpeople->professionals == 1)<li>Professionals</li>@endif
                                            @if($property->idealpeople->couples == 1)<li>Couples</li>@endif
                                            @if($property->idealpeople->bachelors == 1)<li>Bachelors</li>@endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!-- ../widget-box  -->
                    </div>
                    @endif
                    {{--<div class="post-row   padding-top-15 clearfix">
                        <div class="post-row-header clearfix margin-bottom-15">
                            <h3>Quick questions</h3>
                        </div>
                        <div class="post-row-accordion">
                            <div id="accordion">
                                <h5>
                                  <span>
                                  Q
                                  </span>
                                  <span class="accordion-title">Nulla blandit eu eros nec ultrices?</span>
                                </h5>
                                <div>
                                    <p>

                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                accusantium doloremque laudantium,
                                totam rem aperiam, eaque ipsa quae ab illo inventore
                                veritatis et quasi arch itecto beatae vitae dicta
                                sunt explicabo. Nemo enim ipsam v oluptatem quia voluptas
                                    </p>
                                </div><!-- accordion tab -->
                                <h5>
                                  <span>
                                  Q
                                  </span>
                                  <span class="accordion-title">Ulla blandit eu eros nec ultrices?</span>
                                </h5>
                                <div>
                                    <p>
                                    Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                                    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                                    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                                    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                                    </p>
                                </div><!-- accordion tab -->
                                <h5>
                                  <span>
                                  Q
                                  </span>
                                  <span class="accordion-title">Blandit eu eros nec ultrices?</span>
                                </h5>
                                <div>
                                    <p>

                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi arch itecto beatae vitae dicta
                                sunt explicabo. Nemo enim ipsam v oluptatem quia voluptas
                                    </p>
                                </div><!-- accordion tab -->
                            </div>
                        </div>
                    </div>--}}

                </div>
                <div class="col-md-4 d-sidebard-contact">
                    <div class="sidebar-post nav nav-pills nav-stacked" {{--data-spy="affix" data-offset-top="220" data-offset-bottom="420"--}} >

                        <div class="post-row">
                            <div class="widget-box user-wid widget-bg-color post-author-box lp-border-radius-5">
                                <div class="user-info">
                                    <div class="user-thumb">
                                        @if(substr($property->user->avatar, 0, 4) == 'http')
                                            <img src="{{ $property->user->avatar }}" class="avatar-p" alt="user-thumb">
                                        @else
                                            <img src="/{{ $property->user->avatar }}" class="avatar-p" alt="user-thumb">
                                        @endif
                                    </div>
                                    <div class="user-text">
                                        <h5 class="user-name margin-top-0"><a href="/user/{{ $property->user->id }}" target="_blank">{{ $property->user->first_name }} {{ $property->user->last_name }} </a></h5>
                                        <label class="user-position md-trigger quickformtrigger2" data-modal="modal-6">Profile Strength: {{ $property->user->strength }}%</label>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5>Trusted</h5>
                                    </div>
                                    <div class="col-md-6">
                                        {{--@if($property->user->email_verified == 1)<i class="fa fa-check-circle" aria-hidden="true"></i> @else <i class="fa fa-times-circle" aria-hidden="true"></i> @endif <span>ID Verified</span><br>--}}
                                        @if($property->user->email_verified == 1)<i class="fa fa-check-circle" aria-hidden="true"></i> @else <i class="fa fa-times-circle" aria-hidden="true"></i> @endif <span>Email Verified</span><br>
                                    </div>
                                    <div class="col-md-6">
                                        @if($property->user->phone_verified == 1)<i class="fa fa-check-circle" aria-hidden="true"></i> @else <i class="fa fa-times-circle" aria-hidden="true"></i> @endif <span>Phone Verified</span>
                                    </div>
                                </div>
                            </div><!-- ../widget-box  -->
                        </div>

                        <a href="#submitreview" class="contact-btn" data-toggle="modal" data-target="#myModal">
                            Contact {{ $property->status }} Now
                        </a>

                        <div class="widget-box  widget-bg-color post-author-box lp-border-radius-5">

                            <div class="widget-header margin-bottom-25 hideonmobile">
                                <ul class="post-stat">
                                    <li>
                                        <a class="md-trigger parimary-link singlebigmaptrigger" data-toggle="modal" data-target="#larger-map">
                                            <span class="phone-icon">
                                                <!-- Marker icon by Icons8 -->
                                                <img class="icon icons8-Marker" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAEy0lEQVRoQ91aQXbTShCszgpnQzjB93ABnBMgnwBnGXnx4QSEE8ScAHMCwsLOEucEUk4Q5wSTf4KEDbBK82YykkfG0vRISh7va5X3PJKmurqreloh/E8u6hvHeKHfMDABYQjGARFG5h3MWINwB8YNAatsqi76fHcvQJJzPcQ9TgFMiHAg2SAz7gCssI8P+ZEyf3e6OgNJzvUp7nHiAbhm4AyENe5xl0/V2uwwWegR9nAAxoiAtwBeOabusId5fqw+dkHSGkjyTR/gB7IydYCvIMzyY3Uj2ZBlkTEj4N8y9fYxbstOKyA2urAgTBpdM+EkP1a5BMD2muRcJ8SYG4Zcuo0LFmOeFw3EMaEdiEseYNI2isVGzTPpJ1YAXlsw+1Cxz4wCspVOl1mqkpiohdaOl9qwasCs86k6DK33f48DstAzIqtO1zxAEhu10MYcMwaMSbOP+VTNQvcUv4uBOIm9MinFjMM2eSzZlKuZLDbF5ECW+swoDANf81QZ+Xy0K2nxLjmQhb61bBBUSGJtLf3Ce9xbg9w4+x5WeIbPoZQ07BNDG1byqXohiZgISLLUEwK+mdrIUmU3VnclC23Y+lTn8DZlCO/yVBmVqr3GS22M9BUDR6G15iFSIEVafchTZTR/52VAEOGLM7gL59jWX0zuuw7gjf09sMHECQsDn/NUnYRYEQEpZZEwrjM+31+Y8S6fqrNdLy/Ahoq5KHoAIpkXAUkW2qjVqEmtyggyLvKpmgTSpvCLWok13QMRrqSeIgIyXmo2G8tSVbu+BNvAWgHOk9hG45O8N8pHJA+UrPFZkqyXrPnrgTiXvwX4e5a+DJ5xpKn1kNMNaVPKZURqNcn5oxR7qVoNkunJ5SpP1VGj1yx1RkDS1E956hYUD7mPFJre0Mg9pALfAPS8UX7P9SkxZiZleEDDOpf3VFDUPIpSy3P2Rk331hnDWxEwz1J1aSI2XurXDHsitK1/yBAlWeCzLgPycPC5DUmwdXDbzvCZYWZ3evF3Br1tajs2hQ7wAC9CvZk4tVxExb2Pc3kzkDDGaIcM9gzDdmoyD21MmgHRjLhIzwl4/yRt/EKviGDmY429XTsgLVrrUKO3sxfz0lhyZIgyxGJx6RUNTWGbzfv3eB20qFlsBaTUdiDPUzXuuumdjCy1JmDYJOG77hOpVtnsVb2i93N76ebM/2XTl8OYQEUBeeyiTwSOXwcuHogremtqgvO7NKqb3qrZ8XsD4ljpfaLShY0oQ6woS5WV2uPvU7HRGohlZTMc6KxgyUapRA1iZ9WqsOIrmHBkUyO3JwR8QgulauXsOzfhxj8M3GCAw1APtf2MyuSlQzA6pZbn9sGJSF2tFKNR6cinqeai5fePqLqxjZXjiOF2RW6JRqExbEg4OgOpFL7wu4ZNqZ+4cq1I6wLvrUYqrcsPXoPoH8l3jWSp7ZFAMksOMVH83gsjjhU7GQylmDcdiUrFEKDegGx5y04V21Ip8aEpBKIX1dp+ifc54I+xUNGG9KFS2+/tlRHLim1feG3HQt5RtegEQmMgSfR7dfamF1bGQgR7ACNGZutHMIlsA6Z3Rkol2wz17P+ZuI+ovUjtkzHigbHTEKdkotFnGzYepdj9jXjfzc2grffv8r0bYtso9nnfb8uVHmDpOaieAAAAAElFTkSuQmCC" alt="map-marker">
                                            </span>
                                            <span class="phone-number ">
                                                View Large Map
                                            </span>
                                        </a>    
                                    </li>
                                </ul><!-- ../post-stat -->
                            </div>
                            <div class="widget-content ">
                                <div class="widget-map" >
                                    <div id="property-map"></div>
                                </div>
                            </div>
                        </div><!-- ../widget-box  -->
                        <!-- Modal -->
                        <div class="modal fade" id="larger-map" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Address: {{ $property->address }}</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div id="property-map-larger"></div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        
                        {{--<div class="widget-box widget-bg-color widget-tags lp-border-radius-5">
                            <div class="widget-content">
                                <ul class=" list-style-none tags-container">
                                    <li><a href="#"><span class="tag-icon">#</span><span>Foods</span></a></li>
                                    <li><a href="#"><span class="tag-icon">#</span><span>Restaurant</span></a></li>
                                    <li><a href="#"><span class="tag-icon">#</span><span>Fast Food</span></a></li>
                                    <li><a href="#"><span class="tag-icon">#</span><span>WIFI Restaurant</span></a></li>
                                    <li><a href="#"><span class="tag-icon">#</span><span>Accepts Credit Cards</span></a></li>
                                </ul>
                            </div>
                        </div><!-- ../widget-box  -->
                        <div class="widget-video">
                            <iframe src="https://player.vimeo.com/video/160631850?loop=1&amp;title=0" width="360" height="202" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>--}}
                    </div><!-- ../sidebar-post  -->

                </div>
                <?php
                    if($country == 'ca') {
                        $country_code = '1';
                    } elseif($country == 'in') {
                        $country_code = '91';
                    }
                ?>
                <div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog contact-modal" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Contact {{ $property->status }}</h4>
                            </div>
                            <div class="modal-body">
                                <div class="err">

                                </div>
                                <form class="" method="post">
                                    <div class="step1 ">
                                        <input type="hidden" id="csrf-token" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" id="property-id" value="{{ $property->id }}">
                                        @if(Auth::guest())
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name:">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name:">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email:">
                                            </div>
                                        @endif
                                        @if(Auth::check())
                                            @if(Auth::user()->phone_verified != 1)
                                                <div class="input-group">
                                                    <span class="input-group-addon">+{{ $country_code }}</span>
                                                    <input type="tel" class="form-control phone-no" id="phone_no" minlength="10" maxlength="10" placeholder="----------">
                                                </div>
                                                <p>This number would be verified with a OTP sent over SMS.</p>
                                            @endif
                                        @endif
                                        @if(Auth::guest())
                                            <div class="input-group">
                                                <span class="input-group-addon">+{{ $country_code }}</span>
                                                <input type="tel" class="form-control phone-no" id="phone_no" minlength="10" maxlength="10" placeholder="----------">
                                            </div>
                                            <p>This number would be verified with a OTP sent over SMS.</p>
                                        @endif

                                        <div class="form-group">
                                            <textarea class="form-control" rows="5" id="message" placeholder="Message:"></textarea>
                                        </div>
                                        <div class="form-group mr-bottom-0">
                                            <input type="button" value="Send Message" class="lp-review-btn btn-second-hover btn-send-message">
                                        </div>
                                    </div>
                                    <div class="step2 hidden">
                                        <div class="row">
                                            <div class="col-md-10 col-md-offset-1 text-center ">
                                                <h5 align="center">SMS sent to <br>+{{ $country_code }}-<span class="pno">0000000000</span></h5>
                                                <h6 align="center">Enter 4 digit pin</h6>
                                                <input type="text" class="form-control pin-c" minlength="4" maxlength="4" placeholder="----">
                                                <button type="button" class="btn btn-primary pinverify">Verify</button>
                                                <br>
                                                <button type="button" class="btn btn-success resend">Resend Code</button>
                                                <br>
                                                <button type="button" class="btn btn-danger change-phone1">Change Phone Number</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="step3 hidden">
                                        <div class="row">
                                            <div class="col-md-10 col-md-offset-1 text-center verified-phone">
                                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                <h5>Message sent Successfully to Owner</h5>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @include('partials.footer')
    <script>
        $(document).ready(function() {

            $('.btn-send-message').on('click', function (e) {
                e.preventDefault();
                // If User is guest
                @if(Auth::guest())
                    var firstname = $("#first_name").val();
                    var lastname = $("#last_name").val();
                    var email = $("#email").val();
                    var phoneno = $(".phone-no").val();
                @else
                    // If Auth user phone not verified
                    @if(Auth::user()->phone_verified != 1)
                        var phoneno = $(".phone-no").val();
                    @endif
                @endif
                var message = $("#message").val();

                $.ajax({
                    type: 'POST',
                    url: '/send-message',
                    data: {
                        @if(Auth::guest())
                            firstname: firstname,
                            lastname: lastname,
                            email: email,
                            phoneno: phoneno,
                        @else
                            @if(Auth::user()->phone_verified != 1)
                                phoneno: phoneno,
                            @endif
                        @endif
                        message: message,
                        _token: $('#csrf-token').val(),
                        propertyid: $('#property-id').val()
                    },
                    dataType: 'json',
                    success: function () {
                        $('.err').empty();
                        @if(Auth::guest() || Auth::user()->phone_verified != 1)
                            $(".step1").addClass("hidden");
                            $(".pno").empty();
                            $(".pno").append(phoneno);
                            $(".step2").removeClass("hidden");
                        @else
                            $(".step1").addClass("hidden");
                            $(".step3").removeClass("hidden");
                        @endif
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
                @if(Auth::guest())
                    var firstname = $("#first_name").val();
                    var lastname = $("#last_name").val();
                    var email = $("#email").val();
                @endif
                var phoneno = $(".phone-no").val();
                var message = $("#message").val();
                $.ajax({
                    type: 'POST',
                    url: '/send-message',
                    data: {
                        @if(Auth::guest())
                            firstname: firstname,
                            lastname: lastname,
                            email: email,
                        @endif
                        message: message,
                        phoneno: phoneno,
                        _token: $('#csrf-token').val(),
                        propertyid: $('#property-id').val()
                    },
                    dataType: 'json',
                    success: function () {
                        var errorsHtml = '<div class="alert alert-danger"><ul><li>SMS Sent Successfully!</li></ul></div>';
                        $( '.err' ).html( errorsHtml );
                    }
                });
            });

            $('.pinverify').on('click', function (e) {
                e.preventDefault();
                @if(Auth::guest())
                    var email = $("#email").val();
                @endif
                var otp = $(".pin-c").val();
                var phoneno = $(".phone-no").val();
                var message = $("#message").val();

                $.ajax({
                    type: 'POST',
                    url: '/verify-otp',
                    data: {
                        @if(Auth::guest())
                            email: email,
                        @endif
                        phoneno: phoneno,
                        message: message,
                        otp: otp,
                        _token: $('#csrf-token').val(),
                        propertyid: $('#property-id').val()
                    },
                    dataType: 'json',
                    success: function () {
                        $('.err').empty();
                        $(".step2").addClass("hidden");
                        $(".step3").removeClass("hidden");
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

            $(".change-phone1").click(function () {
                $('.err').empty();
                $(".step1").removeClass("hidden");
                $(".step2").addClass("hidden");
            });


        });

        function initMap1() {
            var myLatLng1 = {lat: {{ $property->lat }}, lng: {{ $property->long }}};

            var map2 = new google.maps.Map(document.getElementById('property-map'), {
                zoom: 17,
                center: myLatLng1
            });



            var marker2 = new google.maps.Marker({
                position: myLatLng1,
                map: map2,
                title: 'Hello World!'
            });
            $('.parimary-link').on('click', function () {
                var map3 = new google.maps.Map(document.getElementById('property-map-larger'), {
                    zoom: 12,
                    center: myLatLng1
                });

                var marker3 = new google.maps.Marker({
                    position: myLatLng1,
                    map: map3,
                    title: 'Hello World!'
                });
            });
        }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQ97y1KBDy6WEN_gilUACseXKMT5T6k-U&callback=initMap1"
            async defer></script>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-59cd954573d59e1e"></script>
@endsection