@extends('layouts.master')
@section('nav')
    @include('partials.landingnav')
@endsection

@section('title') FindMeHome | Find rooms where ever you go, anytime, at any cost @endsection

@section('content')
	<section>
		<div class="lp-section-row">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="lp-home-categoires margin-top-subtract-55 padding-left-0">
							<li>
								<a href="/search" class="lp-border-radius-5">
									<span>
									<!-- Food icon by Icons8 -->
									<i class="fa fa-search landicon" aria-hidden="true"></i><br>
										Enter your city
									</span>
								</a>
							</li>
							<li>
								<a href="/search" class="lp-border-radius-5">
									<span>
										<!-- Bar icon by Icons8 -->
										<i class="fa fa-hand-o-up landicon" aria-hidden="true"></i><br>
										Choose room
									</span>
								</a>
							</li>
							<li>
								<a href="/search" class="lp-border-radius-5">
									<span>
										<!-- Movie icon by Icons8 -->
										<i class="fa fa-phone landicon" aria-hidden="true"></i><br>
										Contact owner
									</span>
								</a>
							</li>
							<li>
								<a href="/search" class="lp-border-radius-5">
									<span>
										<!-- Shopping Bag icon by Icons8 -->
										<i class="fa fa-bed landicon" aria-hidden="true"></i><br>
										Move-in
									</span>
								</a>
							</li>
							
						</ul>
					</div>
				</div>
			</div>
		</div><!-- ../section-row -->

		<div class="lp-section-row ">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="lp-section-title-container text-center ">
							<h1>Do you have a room to rent</h1>
							<a href="/new"><button class="btn btn-danger btn-lg">List your property for free!</button></a>
						</div><!-- ../section-title-->
						<div class="lp-section-content-container text-center listp">
							<div class="row">
								<div class="col-md-12">
									<div class="lp-sub-title">List your Apartments, houses, rooms and condos for free. Receive booking requests from creditworthy Roomers. Choose your tenants.</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- ../section-row -->

		<div class="lp-section-row aliceblue">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="lp-section-title-container text-center ">
							<h1>FindMeHome cities</h1>
							<div class="lp-sub-title">See room available in your city</div>
						</div><!-- ../section-title-->

						@if($country == 'in')
							<div class="lp-section-content-container">
								<div class="row">
									<div class="col-md-3 col-sm-3 col-xs-12">
										<div class="city-girds lp-border-radius-8">
											<div class="city-thumb">
												<img src="/assets/images/cities/ludhiana.jpg" alt="manchester" />
											</div>
											<div class="city-title text-center">
												<h3 class="lp-h3">
													<a href="/search?address=ludhiana&type=any">Ludhiana</a>
												</h3>
												{{--<label class="lp-listing-quantity">08 Listings</label>--}}
											</div>
											<a href="/search?address=ludhiana&type=any" class="overlay-link"></a>
										</div>
									</div>

									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="city-girds lp-border-radius-8">
											<div class="city-thumb">
												<img src="/assets/images/cities/jalandhar.jpg" alt="newcastle" />
											</div>
											<div class="city-title text-center">
												<h3 class="lp-h3">
													<a href="/search?address=jalandhar&type=any">Jalandhar</a>
												</h3>
												{{--<label class="lp-listing-quantity">28 Listings</label>--}}
											</div>
											<a href="/search?address=jalandhar&type=any" class="overlay-link"></a>
										</div>
									</div>
									<div class="col-md-3 col-sm-3 col-xs-12">
										<div class="city-girds lp-border-radius-8">
											<div class="city-thumb">
												<img src="/assets/images/cities/delhi.jpg" alt="manchester" />
											</div>
											<div class="city-title text-center">
												<h3 class="lp-h3">
													<a href="/search?address=delhi&type=any">Delhi</a>
												</h3>
												{{--<label class="lp-listing-quantity">08 Listings</label>--}}
											</div>
											<a href="/search?address=delhi&type=any" class="overlay-link"></a>
										</div>
									</div>
								</div>
							</div><!-- ../section-content-container-->
						@elseif($country == 'ca')
							<div class="lp-section-content-container">
								<div class="row">
									<div class="col-md-3 col-sm-3 col-xs-12">
										<div class="city-girds lp-border-radius-8">
											<div class="city-thumb">
												<img src="/assets/images/cities/canada/toronto.jpg" alt="toronto" />
											</div>
											<div class="city-title text-center">
												<h3 class="lp-h3">
													<a href="#">Toronto</a>
												</h3>
												{{--<label class="lp-listing-quantity">28 Listings</label>--}}
											</div>
											<a href="#" class="overlay-link"></a>
										</div>
									</div>
									<div class="col-md-3 col-sm-3 col-xs-12">
										<div class="city-girds lp-border-radius-8">
											<div class="city-thumb">
												<img src="/assets/images/cities/canada/scarborough.jpg" alt="scarborough" />
											</div>
											<div class="city-title text-center">
												<h3 class="lp-h3">
													<a href="#">Scarborough</a>
												</h3>
												{{--<label class="lp-listing-quantity">08 Listings</label>--}}
											</div>
											<a href="#" class="overlay-link"></a>
										</div>
									</div>
									<div class="col-md-3 col-sm-3 col-xs-12">
										<div class="city-girds lp-border-radius-8">
											<div class="city-thumb">
												<img src="/assets/images/cities/canada/north-york.jpg" alt="toronto" />
											</div>
											<div class="city-title text-center">
												<h3 class="lp-h3">
													<a href="#">North York</a>
												</h3>
												{{--<label class="lp-listing-quantity">28 Listings</label>--}}
											</div>
											<a href="#" class="overlay-link"></a>
										</div>
									</div>
									<div class="col-md-3 col-sm-3 col-xs-12">
										<div class="city-girds lp-border-radius-8">
											<div class="city-thumb">
												<img src="/assets/images/cities/canada/etobicoke.jpg" alt="toronto" />
											</div>
											<div class="city-title text-center">
												<h3 class="lp-h3">
													<a href="#">Etobicoke</a>
												</h3>
												{{--<label class="lp-listing-quantity">28 Listings</label>--}}
											</div>
											<a href="#" class="overlay-link"></a>
										</div>
									</div>

								</div>
							</div><!-- ../section-content-container-->
						@endif
					</div>
				</div>
			</div>
		</div><!-- ../section-row -->

		
		<div class="lp-section-row testimonial lp-section-content-container" >
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						{{--<div class="video-thumb">
								<img src="/assets/images/video-img.jpg" class="lp-border-radius-5" alt="video-img" />
							<a href="https://vimeo.com/45830194" class="overlay-video-thumb popup-vimeo">
								<i class="fa fa-play-circle-o"></i>
							</a>
						</div><!-- ../video-thumb -->--}}
						{{--<iframe width="100%" height="350" src="https://www.youtube.com/embed/1cZtgnZnEuA" frameborder="0" allowfullscreen></iframe>--}}
						<img src="/assets/images/flyer.png" class="img-responsive" alt="">
					</div>
					<div class="col-md-6">
						<div class="testimonial-inner-box">
							<h3 class="margin-top-0 landing_h3">Two problems one solution</h3>
							<div class="testimonial-description lp-border-radius-5 landing_message">
								<p>
									To make your life easier we would like to invite you to the Findmehome community. Of course, it is free. Post an ad of your rooms in minutes. Describe your rooms effectively with the help of the various provided filters.
									<a href="/register">Create your account</a> today.
								</p>
								<p>All we wish is to make life easier for people who want to share their space and for people who are new to the state and want a place to stay. We connect an owner to the tenant and vice versa.</p>
								<p>
									<a class="btn btn-danger" href="/register">
										Register today
									</a> so we can serve you better.</p>
								<p>Regards</p>
								<p>Findmehome</p>
							</div><!-- ../testimonial-description -->
							{{--<div class="testimonial-user-info user-info">
								<div class="testimonial-user-thumb user-thumb">
									<img src="/assets/images/user-thumb-60x60.png" alt="user-thumb" />
								</div>
								<div class="testimonial-user-txt user-text">
									<label class="testimonial-user-name user-name">Varun</label><br>
									<label class="testimonial-user-position user-position">Toronto, ON, Canada</label>
								</div>
							</div><!-- ../testimonial-user-info -->--}}
						</div><!-- ../testimonial-inner-box -->
					</div>
				</div>
			</div>
		</div><!-- ../section-row -->
	</section>
	
	@include('partials.footer')
@endsection