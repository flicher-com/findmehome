@extends('layouts.master')
@section('nav')
    @include('partials.nav')
@endsection
@section('content')
    <section class="aliceblue">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-sm-offset-0">
                    <div class="row wizard">
                        <a href="#">
                            <div class="col-md-2 col-xs-12">
                                <span>Step 1</span>
                                <h6>Location</h6>
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </div>
                        </a>

                        <a href="#">
                            <div class="col-md-2 col-xs-12 disable-content">
                                <span>Step 2</span>
                                <h6>Rooms</h6>
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </div>
                        </a>

                        <a href="#">
                            <div class="col-md-2 col-xs-12 disable-content">
                                <span>Step 3</span>
                                <h6>Description</h6>
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </div>
                        </a>

                        <a href="#">
                            <div class="col-md-2 col-xs-12 disable-content">
                                <span>Step 4</span>
                                <h6>Flatshare</h6>
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </div>
                        </a>

                        <a href="#">
                            <div class="col-md-2 col-xs-12 disable-content">
                                <span>Step 5</span>
                                <h6>Pictures</h6>
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </div>
                        </a>

                        <a href="#">
                            <div class="col-md-2 col-xs-12 disable-content">
                                <span>Step 6</span>
                                <h6>Phone</h6>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-sm-offset-0">
                    <form id="location-form" action="{{ route('property.new-listing-post') }}" method="post" onkeypress="return event.keyCode != 13;">
                        {{ csrf_field() }}
                        <div class="row wiz-content">
                            @include('errors.error')

                            <div class="col-md-6">
                                <h5>What is your status</h5>
                                <select class="form-control" name="status" required>
                                    <option value="">-</option>
                                    <option value="owner">Owner</option>
                                    <option value="agent">Agent</option>
                                    <option value="roommate">Roommate</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <h5>What kind of listing</h5>
                                <select class="form-control" name="kindoflisting" required>
                                    <option value="">-</option>
                                    {{--<option value="apartment">Apartment</option>--}}
                                    <option value="house">House</option>
                                    {{--<option value="private-room">Private Room</option>
                                    <option value="shared-room">Shared Room</option>--}}
                                    <option value="pg">PG</option>
                                    {{--<option value="guesthouse">Guest House</option>
                                    <option value="commercial-property">Commercial Property</option>--}}
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <input name="address1[street_number]" value="" id="street_number" type="hidden">
                            <input name="address1[route]" value="" id="route"  type="hidden">
                            <input name="address1[locality]" value="" id="locality" type="hidden">
                            <input name="address1[state]" value="" id="administrative_area_level_1" type="hidden">
                            <input name="address1[postal_code]" value="" id="postal_code" type="hidden">
                            <input name="address1[country]" value="" id="country" type="hidden">
                            <input name="address1[lat]" value="" id="latitude" type="hidden">
                            <input name="address1[long]" value="" id="longitude" type="hidden">
                            <input type="hidden" name="type" id="changetype-address" checked="checked">
                            <div class="col-md-12 wiz-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>Address</h4>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Locality</label>
                                                <input required id="locality" name="locality" value="" class="controls form-control" type="text" placeholder="Model Town, Jalandhar" data-toggle="tooltip" data-placement="top" title="Please Enter your Locality">
                                            </div>
                                            <div class="col-md-4">
                                                <label>House/Apartment/PG Number</label>
                                                <input id="h_no" name="h_no" value="" class="controls form-control" type="text" placeholder="B-1616" data-toggle="tooltip" data-placement="top" title="Please Enter your House/Apartment/PG Number">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Street Number</label>
                                                <input id="street_no" name="street_no" value="" class="controls form-control" type="text" placeholder="2" data-toggle="tooltip" data-placement="top" title="Please Enter your Street Number">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="">Address</label>
                                                <input required id="pac-input" name="address" value="" class="controls form-control" type="text" placeholder="123, New Jawahar Nagar Market, Jalandhar" data-toggle="tooltip" data-placement="top" title="Please Enter your Whole address">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for=""></label>
                                                <button class="btn btn-danger btn-search-map">Search</button>
                                            </div>
                                        </div>
                                        <span id="address-error" class="hidden"></span>
                                    </div>
                                </div>
                                <div id="map"></div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" value="Save & Continue" class="btn btn-lg btn-danger btn-right">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script>

            var placeSearch, autocomplete;
            var componentForm = {
                street_number: 'short_name',
                route: 'long_name',
                locality: 'long_name',
                administrative_area_level_1: 'short_name',
                country: 'long_name',
                postal_code: 'short_name'
            };

            function initMap() {
                var map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: 25.4846359, lng: 73.5555112},
                    zoom: 5
                });
                var input = (document.getElementById('pac-input'));
                var ho_no = (document.getElementById('h_no'));
                var street_no = (document.getElementById('street_no'));
                var locality = (document.getElementById('locality'));

                autocomplete = new google.maps.places.Autocomplete(input);
                autocomplete.bindTo('bounds', map);

                var infowindow = new google.maps.InfoWindow();
                var marker = new google.maps.Marker({
                    map: map,
                    anchorPoint: new google.maps.Point(0, -29),
                    draggable:true,
                });
                autocomplete.addListener('place_changed', fillInAddress);

                autocomplete.addListener('place_changed', function() {
                    infowindow.close();
                    marker.setVisible(false);
                    var place = autocomplete.getPlace();
                    if (!place.geometry) {
                        window.alert("Autocomplete's returned place contains no geometry");
                        return;
                    }

                    // If the place has a geometry, then present it on a map.
                    if (place.geometry.viewport) {
                        map.fitBounds(place.geometry.viewport);
                    } else {
                        map.setCenter(place.geometry.location);
                        map.setZoom(15);  // Why 17? Because it looks good.
                    }
                    marker.setIcon(/** @type {google.maps.Icon} */({
                        url: place.icon,
                        size: new google.maps.Size(71, 71),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(17, 34),
                        scaledSize: new google.maps.Size(35, 35)
                    }));
                    marker.setPosition(place.geometry.location);
                    marker.setVisible(true);

                    var address = '';
                    if (place.address_components) {
                        address = [
                            (place.address_components[0] && place.address_components[0].short_name || ''),
                            (place.address_components[1] && place.address_components[1].short_name || ''),
                            (place.address_components[2] && place.address_components[2].short_name || '')
                        ].join(' ');
                    }

                    infowindow.setContent('<div><strong>Please Move marker according to your address!</strong><br>' + address);
                    infowindow.open(map, marker);
                });

                google.maps.event.addListener(marker, 'dragend', function(marker){
                    var latLng = marker.latLng;
                    currentLatitude = latLng.lat();
                    currentLongitude = latLng.lng();
                    console.log(currentLatitude+' '+currentLongitude);
                });
            }

            function fillInAddress() {
                // Get the place details from the autocomplete object.
                var place1 = autocomplete.getPlace();
                document.getElementById("latitude").value = place1.geometry.location.lat();
                document.getElementById("longitude").value = place1.geometry.location.lng();
                document.getElementById("address-error").className = 'hidden';

                for (var component in componentForm) {
                    document.getElementById(component).value = '';
                    document.getElementById(component).disabled = false;
                }

                // Get each component of the address from the place details
                // and fill the corresponding field on the form.
                for (var i = 0; i < place1.address_components.length; i++) {
                    var addressType = place1.address_components[i].types[0];
                    if (componentForm[addressType]) {
                        var val = place1.address_components[i][componentForm[addressType]];
                        document.getElementById(addressType).value = val;
                    }
                }
            }

            $(document).ready(function () {
                $("#pac-input").keyup(function() {
                    $("#latitude").val("");
                });

                //validation rules
                $('#location-form').submit(function () {

                    // Get the Login Name value and trim it
                    var lat = $.trim($('#latitude').val());

                    // Check if empty of not
                    if (lat  === '') {
                        $('#address-error').empty();
                        $('#address-error').removeClass('hidden');
                        $('#address-error').append('Address not found, if do not see your address in result please add near by landing mark.');
                        return false;
                    }
                });
            });
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQ97y1KBDy6WEN_gilUACseXKMT5T6k-U&libraries=places&callback=initMap"
                async defer></script>
    </section>
    @include('partials.footer')

@endsection