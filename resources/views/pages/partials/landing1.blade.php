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
                <form class="form-horizontal margin-top-30"  method="post">
                    <div class="form-group">
                        <label for="password">Email Address *</label>
                        <input type="email" class="form-control" id="email2" />
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
                            <img src="/assets/images/logo.png" alt="" /> {{--<span class="logotext">Findmehome</span>--}}
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
                        <li><a href="/search">Search a Place</a></li>
                        @if(Auth::guest())
                            <li><a href="/login">Login</a></li>
                            <li><a href="#">Register</a></li>
                        @else
                            <li><a href="{{ route('user.profile', Auth::user()->id) }}">Profile </a></li>
                            <li><a href="{{ route('user.verifications', Auth::user()->id) }}">Verifications </a></li>
                            <li><a href="{{ route('user.listing', Auth::user()->id) }}">Listing </a></li>
                            <li><a href="{{ route('user.account', Auth::user()->id) }}">Account </a></li>
                            <li><a href="{{ route('property.new-listing')}}">List your property </a></li>
                            <li><a href="/logout">Logout</a></li>
                        @endif
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
                    <!-- <div class="lp-menu pull-right menu">
                        <ul>
                            <li><a href="#">Categories <i class="icons8-angle-down drop-down-icon"></i></a>
                                <ul class="sub-menu">
                                    <li class="has-menu"><a href="listing.html">Food </a>
                                        <ul class="sub-menu">
                                            <li><a href="listing.html">Restaurents </a></li>
                                            <li><a href="listing.html">Cafe </a></li>
                                            <li><a href="listing.html">Bars</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="listing.html">Beauty & Spas </a></li>
                                    <li><a href="listing.html">Real Estate </a></li>
                                    <li><a href="listing.html">Automotive </a></li>
                                </ul>
                            </li>
                            <li><a href="#">Pages <i class="icons8-angle-down drop-down-icon"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="listing.html">Listing </a></li>
                                    <li><a href="listing-sidebar.html">Listing - Sidebar </a></li>
                                    <li><a href="listing-map.html">Listing - Map </a></li>
                                    <li><a href="author.html">Author </a></li>
                                    <li><a href="post-detail.html">Post Detail </a></li>
                                    <li><a href="post-submit.html">Post Submit </a></li>
                                    <li><a href="login.html">Join Us</a></li><li><a href="index-1.html">Home 2</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Blog <i class="icons8-angle-down drop-down-icon"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-archive.html">Blog </a></li>
                                    <li><a href="blog-detail.html">Blog Detail </a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Elements <i class="icons8-angle-down drop-down-icon"></i></a>
                                    <ul class="sub-menu">
                                    <li><a href="pricing.html">Pricing </a></li>
                                    <li><a href="404.html">404 Page </a></li>
                                    <li><a href="testimonials.html">Testimonials </a></li>
                                </ul>
                            </li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
    </div><!-- ../menu-bar -->
    <div class="lp-home-banner-contianer">
        <div class="lp-home-banner-contianer-inner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-center">
                        <h1>Let us guide you home</h1>
                        <p class="lp-banner-browse-txt">Find rooms where ever you go, anytime, at any cost.</p>
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <div class="lp-search-bar">
                            <form method="get" action="/search" >
                                <div class="row">
                                    <div class="col-md-11">
                                        <div class="row">
                                            <div class="col-md-3 padding-right-0">
                                                <strong>Where?</strong>
                                                <input type="text" id="autocomplete" placeholder="Select a city" name="address" class="form-control" />
                                            </div>
                                            <div class="col-md-2 padding-right-0">
                                                <strong>Transaction type</strong>
                                                <select class="form-control" name="transaction">
                                                    <option value="any">Any</option>
                                                    <option value="rent">For Rent</option>
                                                    <option value="roommate">Roommate</option>
                                                </select>
                                            </div>
                                            <div class="col-md-2 padding-right-0">
                                                <strong>House Type</strong>
                                                <select class="form-control" name="type">
                                                    <option value="any">Any</option>
                                                    <option value="apartment">Apartment</option>
                                                    <option value="house">House</option>
                                                    <option value="private-room">Private Room</option>
                                                    <option value="shared-room">Shared Room</option>
                                                    <option value="pg">PG</option>
                                                    <option value="guest-house">Guest House</option>
                                                    <option value="commercial-property">Commercial Property</option>
                                                </select>
                                            </div>
                                            <div class="col-md-1 padding-right-0">
                                                <strong>BHK</strong>
                                                <select class="form-control" name="bhk">
                                                    <option value="any">-</option>
                                                    <option value="1">1+</option>
                                                    <option value="2">2+</option>
                                                    <option value="3">3+</option>
                                                    <option value="4">4+</option>
                                                </select>
                                            </div>
                                            <div class="col-md-2 padding-right-0">
                                                <strong>Min price</strong>
                                                <div class="input-group">
                                                    <div class="input-group-addon">&#8377;</div>
                                                    <input type="text" name="min" class="form-control" id="exampleInputAmount" placeholder="Amount">
                                                </div>
                                            </div>
                                            <div class="col-md-2 padding-right-0">
                                                <strong>Max price</strong>
                                                <div class="input-group">
                                                    <div class="input-group-addon">&#8377;</div>
                                                    <input type="text" name="max" class="form-control" id="exampleInputAmount" placeholder="Amount">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <button class="btn btn-lg btn-danger search-landing" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search</button>
                                        {{--<input type="submit" value="Search" class="searchbtn" />
                                        <i class="icons8-search lp-search-icon"></i>--}}
                                    </div>
                                </div>
                                <div class="clearfix"></div> <!-- ../clearfix -->

                            </form>
                        </div><!-- ../search-bar -->
                        <div class="text-center lp-search-description">
                            <p>Simple four easy Steps to find best room and move in
                            </p>
                            <img src="/assets/images/banner/banner-arrow.png" alt="banner-arrow" class="banner-arrow" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- ../Home Search Container -->
    <script type="text/javascript">
        function initAutocomplete() {
            // Create the autocomplete object, restricting the search to geographical
            // location types.
            autocomplete = new google.maps.places.Autocomplete(
                /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
                {types: ['geocode']});

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