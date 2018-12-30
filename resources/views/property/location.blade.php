@extends('layouts.master')
@section('nav')
    @include('partials.nav')
@endsection

@section('title') Location | FindMeHome @endsection

@section('content')
    <section class="aliceblue">
        <div class="container">
        @include('property.partials.menu')
            <div class="row">
                <div class="col-sm-12 col-sm-offset-0">
                    <div class="row wiz-content">
                        <div class="col-md-6">
                            <h5>What is your status</h5>
                            <select class="form-control" name="status" required disabled="disabled">
                                <option value="owner" @if($property->status == 'owner') selected @endif>Owner</option>
                                <option value="agent" @if($property->status == 'agent') selected @endif>Agent</option>
                                <option value="roommate" @if($property->status == 'roommate') selected @endif>Roommate</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <h5>What kind of listing</h5>
                            <select class="form-control" name="kindoflisting" required disabled="disabled">
                                <option @if($property->type == 'house') selected @endif value="house">House</option>
                                <option @if($property->type == 'town-house') selected @endif value="town-house">Town House</option>
                                <option @if($property->type == 'multi-unit-house') selected @endif value="multi-unit-house">Multi-Unit House</option>
                                <option @if($property->type == 'main-floor') selected @endif value="main-floor">Main Floor</option>
                                <option @if($property->type == 'basement') selected @endif value="basement">Basement</option>
                                <option @if($property->type == 'private-room') selected @endif value="private-room">Private Room</option>
                                <option @if($property->type == 'shared-room') selected @endif value="shared-room">Shared Room</option>
                                <option @if($property->type == 'duplex') selected @endif value="duplex">Duplex</option>
                                <option @if($property->type == 'apartment') selected @endif value="apartment">Apartment</option>
                                <option @if($property->type == 'condo') selected @endif value="condo">Condo</option>
                                <option @if($property->type == 'studio') selected @endif value="studio">Studio</option>
                                <option @if($property->type == 'loft') selected @endif value="loft">Loft</option>
                                <option value="pg" @if($property->type == 'pg') selected @endif>PG</option>
                                <option value="commercial-property" @if($property->type == 'commercial-property') selected @endif>Commercial Property</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <input name="address1[street_number]" value="{{ $property->street_no }}" id="street_number" type="hidden">
                        <input name="address1[route]" value="{{ $property->locality }}" id="route"  type="hidden">
                        <input name="address1[locality]" value="{{ $property->city }}" id="locality" type="hidden">
                        <input name="address1[state]" value="{{ $property->state }}" id="administrative_area_level_1" type="hidden">
                        <input name="address1[postal_code]" value="{{ $property->zip }}" id="postal_code" type="hidden">
                        <input name="address1[country]" value="{{ $property->country }}" id="country" type="hidden">
                        <input name="address1[lat]" value="{{ $property->lat }}" id="latitude" type="hidden">
                        <input name="address1[long]" value="{{ $property->long }}" id="longitude" type="hidden">
                        <input type="hidden" name="type" id="changetype-address" checked="checked">
                        <div class="col-md-12 wiz-content">
                            @include('errors.error')
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Address</h4>
                                    @if(!empty($property->address))
                                        <input type="hidden" name="address" value="{{ $property->address }}">
                                    @endif
                                    <input required id="pac-input" name="address" value="{{ $property->address }}" @if(!empty($property->address)) disabled @endif class="controls form-control" type="text" placeholder="123, New Jawahar Nagar Market, Jalandhar" data-toggle="tooltip" data-placement="top" title="Please Enter your Whole address">
                                    <span id="address-error" class="hidden"></span>
                                </div>
                            </div>
                            @if(empty($property->address))
                                <div id="map"></div>
                            @else
                                <div id="map1"></div>
                            @endif
                        </div>


                        <div class="row m-save-btn-row">
                          <div class="col-md-12 col-xs-4 col-xs-offset-5 col-md-offset-0 m-save-btn">
                              <a href="{{ route('property.new-listing-room', $property->id) }}" class="btn btn-lg btn-danger btn-right ">Next</a>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            // This example requires the Places library. Include the libraries=places
            // parameter when you first load the API. For example:
            // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">


            var placeSearch, autocomplete;
            var componentForm = {
                street_number: 'short_name',
                route: 'long_name',
                locality: 'long_name',
                administrative_area_level_1: 'short_name',
                country: 'long_name',
                postal_code: 'short_name'
            };
            @if(empty($property->address))
            function initMap() {
                var map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: 25.4846359, lng: 73.5555112},
                    zoom: 5
                });
                var input = /** @type {!HTMLInputElement} */(
                        document.getElementById('pac-input'));

                var types = document.getElementById('type-selector');
                //map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
                //map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);

                autocomplete = new google.maps.places.Autocomplete(input);
                autocomplete.bindTo('bounds', map);

                var infowindow = new google.maps.InfoWindow();
                var marker = new google.maps.Marker({
                    map: map,
                    anchorPoint: new google.maps.Point(0, -29)
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

                    infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
                    infowindow.open(map, marker);
                });

                // Sets a listener on a radio button to change the filter type on Places
                // Autocomplete.
                /*function setupClickListener(id, types) {
                    var radioButton = document.getElementById(id);
                    radioButton.addEventListener('click', function() {
                        autocomplete.setTypes(types);
                    });
                }

                setupClickListener('changetype-all', []);
                setupClickListener('changetype-address', ['address']);
                setupClickListener('changetype-establishment', ['establishment']);
                setupClickListener('changetype-geocode', ['geocode']);*/
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
            @endif

            @if(!empty($property->address))
            function initMap1() {
                var myLatLng1 = {lat: {{ $property->lat }}, lng: {{ $property->long }}};

                var map2 = new google.maps.Map(document.getElementById('map1'), {
                    zoom: 17,
                    center: myLatLng1
                });

                var marker2 = new google.maps.Marker({
                    position: myLatLng1,
                    map: map2,
                    title: 'Hello World!'
                });
            }
            @endif

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
        @if(empty($property->address))

            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQ97y1KBDy6WEN_gilUACseXKMT5T6k-U&libraries=places&callback=initMap"
        async defer></script>
        @else
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQ97y1KBDy6WEN_gilUACseXKMT5T6k-U&callback=initMap1"
                    async defer></script>
        @endif
    </section>
    @include('partials.footer')

@endsection