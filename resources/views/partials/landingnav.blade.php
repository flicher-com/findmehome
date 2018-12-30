<!--==================================Header Open=================================-->
<header class="lp-header-bg">
	<div class="lp-header-overlay"></div> <!-- ../header-overlay -->

	<!-- Login Popup -->
    <div class="md-modal md-effect-3" id="modal-3">
        <div class="login-form-popup lp-border-radius-8">
            <div class="siginincontainer">
                <h1 class="text-center">Sign in</h1>
                <form class="form-horizontal margin-top-30"  method="post" action="{{ url('/login') }}">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="siusername">Username or Email Address *</label>
                        <input type="text" class="form-control" id="siusername" name="email" value="{{ old('email') }}"/>
                    </div>
                    <div class="form-group">
                        <label for="sipassword">Password *</label>
                        <input type="password" class="form-control" id="sipassword" name="password" />
                    </div>
                    <div class="form-group">
                        <div class="checkbox pad-bottom-10">
                            <input id="check1" type="checkbox" name="remember">
                            <label for="check1">Keep me signed in</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Sign in" class="lp-secondary-btn width-full btn-first-hover" />
                    </div>
                </form>
                <div class="pop-form-bottom">
                    <div class="bottom-links">
                        <a  class="signUpClick">Not a member? Sign up</a>
                        <a  class="forgetPasswordClick pull-right" >Forgot Password</a>
                    </div>
                    <p class="margin-top-15">Connect with your Social Network</p>
                    <ul class="social-login list-style-none">
						<li>
							<a href="{{ route('social.redirect', ['provider' => 'google']) }}">
								<button class="google flaticon-googleplus" ><i class="fa fa-google-plus"></i><span>Google</span></button>
							</a>
						</li>

						<li>
							<a href="{{ route('social.redirect', ['provider' => 'facebook']) }}">
								<button class="facebook flaticon-facebook" ><i class="fa fa-facebook"></i><span>Facebook</span></button>
							</a>
						</li>
						<li>
							<a href="{{ route('social.redirect', ['provider' => 'twitter']) }}">
								<button class="twitter flaticon-twitter" ><i class="fa fa-twitter"></i><span>Twitter</span></button>
							</a>
						</li>
                    </ul>
                </div>
                <a class="md-close"><i class="fa fa-close"></i></a>
            </div>
            <div class="siginupcontainer">
                    <h1 class="text-center">Sign Up</h1>
                    <form class="form-horizontal"  method="post" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="sufname">First Name *</label>
                            <input type="text" class="form-control" id="sufname" name="first_name" />
                        </div>
                        <div class="form-group">
                            <label for="sulname">Last Name *</label>
                            <input type="text" class="form-control" id="sulname" name="last_name" />
                        </div>
                        <div class="form-group">
                            <label for="supassword">Email Address *</label>
                            <input type="email" class="form-control" id="supassword" name="email" value="{{ old('email') }}" />
                        </div>
                        <div class="form-group">
                            <label for="supassword">Password *</label>
                            <input type="password" class="form-control" id="supassword" name="password" />
                        </div>

                        <div class="form-group">
                            <label for="sucpassword">Confirm Password *</label>
                            <input type="password" class="form-control" id="sucpassword" name="password_confirmation" />
                        </div>                                    
                        <div class="form-group">
                            <input type="submit" value="Register" class="lp-secondary-btn width-full btn-first-hover" />
                        </div>
                    </form>
                    <div class="pop-form-bottom">
                        <div class="bottom-links">
                            <a class="signInClick" >Already have an account? Sign in</a>
                            <a class="forgetPasswordClick pull-right" >Forgot Password</a>
                        </div>
                        <p class="margin-top-15">Connect with your Social Network</p>
                        <ul class="social-login list-style-none">
							<li>
								<a href="{{ route('social.redirect', ['provider' => 'google']) }}">
									<button class="google flaticon-googleplus" ><i class="fa fa-google-plus"></i><span>Google</span></button>
								</a>
							</li>

							<li>
								<a href="{{ route('social.redirect', ['provider' => 'facebook']) }}">
									<button class="facebook flaticon-facebook" ><i class="fa fa-facebook"></i><span>Facebook</span></button>
								</a>
							</li>
							<li>
								<a href="{{ route('social.redirect', ['provider' => 'twitter']) }}">
									<button class="twitter flaticon-twitter" ><i class="fa fa-twitter"></i><span>Twitter</span></button>
								</a>
							</li>
                        </ul>
                    </div>
                    <a class="md-close"><i class="fa fa-close"></i></a>
                </div>
			<div class="forgetpasswordcontainer">
				<h1 class="text-center">Forgotten Password</h1>
				<form class="form-horizontal margin-top-30" action="{{ route('auth.password-post') }}"  method="post">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="fpassword">Email Address *</label>
						<input type="email" name="email" class="form-control" id="fpassword" required />
					</div>
					<div class="form-group">
						<input type="submit" value="Get New Password" class="lp-secondary-btn width-full btn-first-hover" />
					</div>
				</form>
				<div class="pop-form-bottom">
					<div class="bottom-links">
						<a class="cancelClick" >Cancel</a>
					</div>
				</div>
				<a class="md-close"><i class="fa fa-close"></i></a>
			</div>
        </div>
    </div>
    <!-- ../Login Popup -->
	
	<!-- Popup Open -->
	<div class="md-modal md-effect-3" id="modal-2">
		<div class="container">
			<div class="md-content ">
				<div class="row popup-inner-left-padding ">
					<div class="col-md-6 lp-insert-data">
					</div>
					<div class="col-md-6">
						<div id="quickmap" class="quickmap"></div>
						<a class="md-close widget-map-click"><i class="fa fa-close"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Popup Close -->
	<div class="md-overlay"></div> <!-- Overlay for Popup -->
	<div class="lp-menu-bar">
		<div class="container-fluid">
				<div class="row">
					<div class="col-md-4 col-xs-6 lp-logo-container">
						<div class="lp-logo">
							<a href="/">
								<img src="/assets/images/logo.png" alt="" /> <span class="logotext">Findmehome</span>
							</a>
						</div>
					</div>
					<div class="col-xs-6 mobile-nav-icon">
						<a href="#menu" class="nav-icon">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
					</div>
					
						<div id="menu">
							<ul>
								@include('partials.mobile_sidebar_menu')
								{{--<li><a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="listing.html">Listing </a></li>
                                        <li><a href="listing-sidebar.html">Listing - Sidebar </a></li>
                                    </ul>
                                </li>--}}
							</ul>
						</div>
					<div class="col-md-8 col-xs-12 lp-menu-container">

						<div class="lp-menu pull-right menu">
							<ul>
								<li>
									<a href="/new">Add Listing</a>
								</li>
								<li>
									<a href="#">
										@if($country == 'ca')<img class="img-circle nav-dp" src="/assets/images/country-flags/canada.png" alt=""> Canada @elseif($country == 'in')<img class="img-circle nav-dp" src="/assets/images/country-flags/india.png" alt=""> India @endif <i class="icons8-angle-down drop-down-icon"></i>
									</a>
									<ul class="sub-menu">
										@if($country == 'ca')
											<li><a href="{{ route('country.change', 'in') }}">India</a></li>
										@elseif($country == 'in')
											<li><a href="{{ route('country.change', 'ca') }}">Canada</a></li>
										@endif
									</ul>
								</li>
								@if(Auth::check())
									<li>
										<a href="#">
											@if(substr(Auth::user()->avatar, 0, 4) == 'http')
												<img class="img-circle nav-dp" src="{{ Auth::user()->avatar }}" alt=""> {{ Auth::user()->first_name }} <i class="icons8-angle-down drop-down-icon"></i>
											@else
												<img class="img-circle nav-dp" src="/{{ Auth::user()->avatar }}" alt=""> {{ Auth::user()->first_name }} <i class="icons8-angle-down drop-down-icon"></i>
											@endif
										</a>
										<ul class="sub-menu">
											<li><a href="{{ route('user.profile', Auth::user()->id) }}">Profile </a></li>
                                            <li><a href="{{ route('user.verifications', Auth::user()->id) }}">Verifications </a></li>
											<li><a href="{{ route('user.listing', Auth::user()->id) }}">Listing </a></li>
											<li><a href="{{ route('user.account', Auth::user()->id) }}">Account </a></li>
											<li><a href="{{ route('property.new-listing')}}">List your property </a></li>
											<li><a href="/logout">Logout</a></li>
										</ul>
									</li>
								@else
									<li><a class=" md-trigger" data-modal="modal-3"><i class="fa fa-user usericon" aria-hidden="true"></i> Login/Signup</a></li>
								@endif
							</ul>
						</div>
					</div>
				</div>
			</div>
	</div><!-- ../menu-bar -->
	<?php

    if($country == 'ca') {
        $currency = '&#36;';
    } elseif($country == 'in') {
        $currency = '&#8377;';
    }

	?>

	<div class="lp-home-banner-contianer">
		<div class="lp-home-banner-contianer-inner">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 text-center">
						@include('errors.error')
						<h1>Let us guide you home</h1>
						<p class="lp-banner-browse-txt">Find rooms where ever you go, anytime, at any cost.</p>
					</div>
					<div class="col-md-10 col-xs-12 col-md-offset-1 col-sm-offset-0">
						<div class="lp-search-bar" style="opacity: 1;">
							<form method="get" action="/search" >
								<div class="row">
									<div class="col-md-3">
										<strong>Where?</strong>
										<input type="text" id="autocomplete" placeholder="Select a city" name="address" class="form-control" required />
									</div>
									<div class="col-md-2">
										<strong>Property Type</strong>
										<select class="form-control" name="type">
											<option value="any">Any</option>
											<option value="apartment">Apartment</option>
											<option value="house">House</option>
											@if($country == 'ca')
												<option value="town-house">Town House</option>
												<option value="multi-unit-house">Multi Unit House</option>
												<option value="main-floor">Main Floor</option>
												<option value="basement">Basement</option>
												<option value="private-room">Private room</option>
												<option value="shared-room">Shared room</option>
												<option value="duplex">Duplex</option>
												<option value="studio">Studio</option>
												<option value="loft">Loft</option>
												<option value="condo">Condo</option>
											@endif
											@if($country == 'in')
												<option value="pg">PG</option>
											@endif
											<option value="commercial-property">Commercial Property</option>
										</select>
									</div>
									<div class="col-md-3">
										<strong>Min price</strong>
										<div class="input-group">
											<div class="input-group-addon">{{ $currency }}</div>
											<input type="text" name="min" class="form-control" id="exampleInputAmount" placeholder="Amount">
										</div>
									</div>
									<div class="col-md-3">
										<strong>Max price</strong>
										<div class="input-group">
											<div class="input-group-addon">{{ $currency }}</div>
											<input type="text" name="max" class="form-control" id="exampleInputAmount" placeholder="Amount">
										</div>
									</div>
									<div class="col-md-1">
										<button class="btn btn-lg btn-danger search-landing" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
									</div>
								</div>
								<div class="clearfix"></div> <!-- ../clearfix -->
							</form>
						</div><!-- ../search-bar -->
						<div class="text-center lp-search-description">
							<p>Simple four easy Steps to find best room and move in
							</p>
							<img src="/assets/images/banner/banner-arrow.png" alt="banner-arrow" class="banner-arrow">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function initAutocomplete() {
		        // Create the autocomplete object, restricting the search to geographical
		        // location types.
			var input = (document.getElementById('autocomplete'));
            var options = {
				types: ['(cities)'],
                componentRestrictions: {country: "{{ strtoupper($country) }}"}
            };

			autocomplete = new google.maps.places.Autocomplete(input, options);

		        // When the user selects an address from the dropdown, populate the address
		        // fields in the form.
		        //autocomplete.addListener('place_changed', fillInAddress);
		      }
	</script>
	<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQ97y1KBDy6WEN_gilUACseXKMT5T6k-U&libraries=places&callback=initAutocomplete">
    </script>
</header>
<!--==================================Header Close=================================-->