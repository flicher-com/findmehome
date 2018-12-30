@extends('layouts.master')
@section('nav')
	@include('partials.nav')
@endsection

@section('title') Add new Listing | FindMeHome @endsection

@section('content')
	<section class="aliceblue">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-sm-offset-0">
					<div class="row wizard d-steps-newlisting">
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
					{{--<div class="row mobile-steps-newlisting">
						<div class="col-xs-12">
							<h4>Steps</h4>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 2%">
									<span>0% Complete (success)</span>
								</div>
							</div>
						</div>
					</div>--}}
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
									<option value="house">House</option>
									@if($country == 'ca')
									<option value="town-house">Town House</option>
									<option value="multi-unit-house">Multi-Unit House</option>
									<option value="main-floor">Main Floor</option>
									<option value="basement">Basement</option>
									<option value="private-room">Private Room</option>
									<option value="shared-room">Shared Room</option>
									<option value="duplex">Duplex</option>
									<option value="apartment">Apartment</option>
									<option value="condo">Condo</option>
									<option value="studio">Studio</option>
									<option value="loft">Loft</option>
									@endif
									@if($country == 'in')
										<option value="pg">PG</option>
									@endif
									<option value="commercial-property">Commercial Property</option>
								</select>
							</div>

						</div>

						<div class="row">
							@if($country == 'ca')
								<input name="address1[street_number]" id="street_number" type="hidden">
							@endif
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
										@if($country == 'in')
										<div class="row">
											<div class="col-md-4">
												<label>Locality</label>
												<input required id="locality-input" name="locality" value="" class="controls form-control" type="text" placeholder="Model Town, Jalandhar" data-toggle="tooltip" data-placement="top" title="Please Enter your Locality">
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
										@endif
										<div class="row">
											<div class="col-md-12">
												<label for="">Full Address</label>
												<input required id="pac-input" name="address" value="" class="controls form-control" type="text" placeholder="@if($country == 'ca') 700 Lawrence Avenue West, North York, ON, Canada @elseif($country == 'in')123, New Jawahar Nagar Market, Jalandhar @endif" data-toggle="tooltip" data-placement="top" title="Please Enter your Whole address">
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<label for=""></label>
												<button type="button" id="btn-search-map" class="btn btn-danger btn-search-map">Search</button>
											</div>
										</div>
										<span id="address-error" class="hidden"></span>
									</div>
								</div>
								<div id="map"></div>
							</div>

							<div class="row m-save-btn-row new-save-btn hidden">
								<div class="col-md-12 col-xs-4 col-xs-offset-4 col-md-offset-0 m-save-btn">
									<input type="submit" value="Save & Continue" class="btn btn-lg btn-danger btn-right">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<script>

            var componentForm = {
				@if($country == 'ca')
                	street_number: 'short_name',
				@endif
                route: 'long_name',
                locality: 'long_name',
                administrative_area_level_1: 'short_name',
                country: 'long_name',
                postal_code: 'short_name'
            };

            var input, h_no, street_no, locality, map, geocoder, geocoder1;
            var gmarkers = [];


            function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                    @if($country == 'in')
                    	center: {lat: 25.4846359, lng: 73.5555112},
					@elseif($country == 'ca')
                    	center: {lat: 58.595813, lng: -112.1820909},
					@endif
                    zoom: 5,
                    //mapTypeId: 'roadmap'
                });
                locality = (document.getElementById('locality-input'));
                input = (document.getElementById('pac-input'));

                var options = {
                    componentRestrictions: {country: "{{ strtoupper($country) }}"}
                };
                var autocomplete = new google.maps.places.Autocomplete(locality, options);

                var autocomplete1 = new google.maps.places.Autocomplete(input, options);

                geocoder = new google.maps.Geocoder();
                geocoder1 = new google.maps.Geocoder();

                document.getElementById('btn-search-map').addEventListener('click', function() {
                    geocodeAddress(geocoder, geocoder1, map);
                    //geocodeLocality(geocoder1, map);
                });
            }


            $('.btn-search-map').click(function() {
                ho_no = (document.getElementById('h_no'));
                street_no = (document.getElementById('street_no'));
                locality = (document.getElementById('locality-input'));
                input = (document.getElementById('pac-input'));
			});

            function geocodeAddress(geocoder, geocoder1, resultsMap) {
                var address = document.getElementById('pac-input').value;
                geocoder.geocode({'address': address}, function(results, status) {
                    if (status === 'OK') {
                        // Remove all markers
                        for(i=0; i<gmarkers.length; i++){
                            gmarkers[i].setMap(null);
                        }

                        resultsMap.setCenter(results[0].geometry.location);
                        var infowindow = new google.maps.InfoWindow();

                        var marker = new google.maps.Marker({
                            map: resultsMap,
                            position: results[0].geometry.location,
                            draggable:true,
                        });
                        $('#latitude').val(marker.getPosition().lat());
                        $('#longitude').val(marker.getPosition().lng());

                        google.maps.event.addListener(marker, 'dragend', function (event) {
                            $('#latitude').val(this.getPosition().lat());
                            $('#longitude').val(this.getPosition().lng());
                        });

                        // Add marker to array
                        gmarkers.push(marker);

                        fillInAddress(results);
						@if($country == 'in')
                        	resultsMap.setZoom(15);
						@elseif($country == 'ca')
                        	resultsMap.setZoom(17);
						@endif

                        infowindow.setContent('<div><strong>Is this Your Address if Not Please Move marker according to your address!</strong><br>' + results[0].formatted_address);
                        infowindow.open(map, marker);

                        $('.new-save-btn').removeClass('hidden');
                    } else {
                        geocodeLocality(geocoder1, resultsMap);
                    }
                });
            }

            function geocodeLocality(geocoder, resultsMap) {
                var address = document.getElementById('locality-input').value;
                geocoder.geocode({'address': address}, function(results, status) {
                    if (status === 'OK') {
                        // Remove all markers
                        for(i=0; i<gmarkers.length; i++){
                            gmarkers[i].setMap(null);
                        }

                        resultsMap.setCenter(results[0].geometry.location);
                        var infowindow = new google.maps.InfoWindow();

                        var marker = new google.maps.Marker({
                            map: resultsMap,
                            position: results[0].geometry.location,
                            draggable:true,
                        });
                        $('#latitude').val(marker.getPosition().lat());
                        $('#longitude').val(marker.getPosition().lng());

                        google.maps.event.addListener(marker, 'dragend', function (event) {
                            $('#latitude').val(this.getPosition().lat());
                            $('#longitude').val(this.getPosition().lng());
                        });

                        // Add marker to array
                        gmarkers.push(marker);

                        fillInAddress(results);

                        resultsMap.setZoom(15);

                        infowindow.setContent('<div><strong>Sorry! We cound not able to find your address on maps. <br> Please Move marker according to your address!</strong><br>Map Help you find tenants more easily<br>' + results[0].formatted_address);
                        infowindow.open(map, marker);

                        $('.new-save-btn').removeClass('hidden');
                    } else {
                        alert('Geocode was not successful for the following reason: ' + status);
                    }
                });
            }

            function fillInAddress(results) {
				//console.log(results);
                for (var component in componentForm) {
                    document.getElementById(component).value = '';
                    document.getElementById(component).disabled = false;
                }

                for (var i = 0 ; i < results.length ; ++i)
                {
                    var super_var1 = results[i].address_components;
                    for (var j = 0 ; j < super_var1.length ; ++j)
                    {
                        var super_var2 = super_var1[j].types;
                        for (var k = 0 ; k < super_var2.length ; ++k)
                        {
							@if($country == 'ca')
								if (super_var2[k] == "street_number")
								{
									//put the city name in the form
									//main_form.city.value = super_var1[j].long_name;
									//console.log(super_var1[j].long_name);
									$('#street_number').val(super_var1[j].short_name);
								}
							@endif
                            //find locality
                            if (super_var2[k] == "sublocality")
                            {
                                //put the city name in the form
                                //main_form.city.value = super_var1[j].long_name;
								//console.log(super_var1[j].long_name);
								$('#route').val(super_var1[j].long_name);
                            }

                            //find city
                            if (super_var2[k] == "locality")
                            {
                                //put the city name in the form
                                //main_form.city.value = super_var1[j].long_name;
                                //console.log(super_var1[j].long_name);
                                $('#locality').val(super_var1[j].long_name);
                            }
                            //find county
                            if (super_var2[k] == "country")
                            {
                                //put the county name in the form
                                //main_form.county.value = super_var1[j].long_name;
                                //console.log(super_var1[j].long_name);
                                $('#country').val(super_var1[j].long_name);
                            }
                            //find State
                            if (super_var2[k] == "administrative_area_level_1")
                            {
                                //put the state abbreviation in the form
                                //main_form.state.value = super_var1[j].short_name;
                                //console.log(super_var1[j].long_name);
                                $('#administrative_area_level_1').val(super_var1[j].long_name);
                            }
                            //find Zip
                            if (super_var2[k] == "postal_code")
                            {
                                //put the state abbreviation in the form
                                //main_form.state.value = super_var1[j].short_name;
                                //console.log(super_var1[j].short_name);
                                $('#postal_code').val(super_var1[j].long_name);
                            }
                        }
                    }
				}
            }

		</script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQ97y1KBDy6WEN_gilUACseXKMT5T6k-U&libraries=places&callback=initMap"
					async defer></script>
	</section>
	@include('partials.footer')

@endsection