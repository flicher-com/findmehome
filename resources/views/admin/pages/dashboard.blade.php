@extends('admin.layouts.master')

@section('content')
	@include('admin.partials.nav')

<div class="container-fluid content">
	<div class="row">
		@include('admin.partials.sidebar')
		<!-- start: Content -->
			<div class="col-md-10 col-sm-11 main ">

			<div class="row">

				<div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="smallstat">
						<div class="boxchart-overlay blue">
							<div class="boxchart">5,6,7,2,0,4,2,4,8,2,3,3,2</div>
						</div>
						<span class="value">4 589</span>	
						<span class="title">Clients</span>
							
					</div>
				</div><!--/col-->

				<div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="smallstat">
						<div class="linechart-overlay red">
							<div class="linechart">1,2,6,4,0,8,2,4,5,3,1,7,5</div>
						</div>
						<span class="value">789</span>	
						<span class="title">Deals</span>						
					</div>
				</div><!--/col-->

				<div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="smallstat">
						<i class="fa fa-usd green"></i>
						<span class="value">$1 999,99</span>
						<span class="title">Income</span>	
					</div>
				</div><!--/col-->

				<div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="smallstat">
						<div class="piechart-overlay blue">
							<div class="piechart" data-percent="55"><span>55</span>%</div>
						</div>
						<span class="value">$19 999,99</span>	
						<span class="title">Account</span>		
					</div>
				</div><!--/col-->

			</div><!--/row-->

			<div class="row">
				
				<div class="col-md-9">
					
					<div class="panel panel-default">
						
						<div class="panel-body padding-horizontal">
							
							<div class="row">

								<div class="col-sm-8">
									
									<h3>Traffic</h3>
									<p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</small></p>
									</br/>
									
									<div id="flot-main" style="height:256px"></div>

								</div><!--/col-->

								<div class="col-sm-4">

									<h3>Details</h3>
									<p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></p>
									</br/>

									<h6>Visits (40% - 29.703 Users)</h6>
									<div class="progress thin">
									  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
									    <span class="sr-only">40% Complete (success)</span>
									  </div>
									</div>

									<h6>Unique (20% - 24.093 Unique Users)</h6>
									<div class="progress thin">
									  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
									    <span class="sr-only">20% Complete</span>
									  </div>
									</div>

									<h6>Pageviews (60% - 78.706 Views)</h6>
									<div class="progress thin">
									  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
									    <span class="sr-only">60% Complete (warning)</span>
									  </div>
									</div>

									<h6>New Users (80% - 22.123 Users)</h6>
									<div class="progress thin">
									  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
									    <span class="sr-only">80% Complete</span>
									  </div>
									</div>

									<h6>Bounce Rate (40.15%)</h6>
									<div class="progress thin">
									  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
									    <span class="sr-only">40% Complete (success)</span>
									  </div>
									</div>

								</div><!--/col-->

							</div><!--/row-->
							
						</div>
						
					</div>	
					
				</div><!--/col-->
				
				<div class="col-md-3">
					<div class="panel panel-default">
						
						<div class="panel-body padding-horizontal">
							<h3>Browsers</h3>
							<p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></p>
							</br/>
							<div class="graph-container">
								<div id="hero-donut" class="graph"></div>
							</div>	
						</div>
					</div>	
				</div><!--/col-->	
			
			</div><!--/row-->
			
			<div class="row">
				
				<div class="col-lg-6 col-md-12">
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2><i class="fa fa-check"></i>Top Countries</h2>
							<div class="panel-actions">
								<a href="index.html#" class="btn-setting"><i class="fa fa-wrench"></i></a>
								<a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
								<a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<div class="panel-body">
							
							<div id="map" style="height:424px;"></div>	
							
						</div>
					</div>
					
				</div><!--/col-->
				
				<div class="col-lg-6 col-md-12">
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2><i class="fa fa-check"></i>Demographic</h2>
							<div class="panel-actions">
								<a href="index.html#" class="btn-setting"><i class="fa fa-wrench"></i></a>
								<a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
								<a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<div class="panel-body">
							
							<div class="row">

								<div class="col-md-6 text-info text-right">
									
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																			<i class="fa fa-male" style="width:12px;"></i>
																		
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
																		
								</div><!--/col-->
								
								<div class="col-md-6 text-warning">
									
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																			<i class="fa fa-female" style="width:12px;"></i>
																		
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																			<i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
																		
								</div><!--/col-->

							</div><!--/row-->	
							
						</div>
					</div>
					
				</div><!--/col-->
				
				<div class="col-lg-3 col-md-6">
					
					<div class="panel panel-default">
						
						<div class="panel-body text-center" style="height:230px">
							<h2>Revenue</h2>
							<div style="width:300px;left:50%;position:absolute;margin-left:-150px;">
								<canvas id="gauge1"></canvas>
							</div>
						</div>	
						<div class="panel-footer">
							<strong>$11.234,00</strong>
							<span class="pull-right"><i class="fa fa-arrow-circle-o-up text-success"></i> 15%</span>
						</div>	
						
					</div>	
										
				</div><!--/.col-->
				
				<div class="col-lg-3 col-md-6">
					
					<div class="panel panel-default">
						
						<div class="panel-body text-center" style="height:230px">
							<h2>Profit</h2>
							<div style="width:300px;left:50%;position:absolute;margin-left:-150px;">
								<canvas id="gauge2"></canvas>
							</div>	
						</div>	
						<div class="panel-footer">
							<strong>$3.733,00</strong>
							<span class="pull-right"><i class="fa fa-arrow-circle-o-down text-danger"></i> 53%</span>
						</div>	
						
					</div>	
										
				</div><!--/.col-->
					
			</div><!--/row-->	

			<div class="row">
				
				<div class="col-md-3">
					
					<div class="panel panel-default">

						<div class="panel-body weather widget">
							
							<div class="today text-center">
								
								<h2><strong><i class="fa fa-map-marker"></i> Los Angeles, CA</strong></h2>
								<i class="climacon sun"></i>
								
								
								<div class="row">
									
									<div class="col-xs-5 text-right date">
										<div>Monday</div>
										<small>June, 25</small>
									</div><!--/.col-->
									
									<div class="col-xs-7 text-left temp">
										31/22°C
									</div><!--/.col-->	
									
								</div><!--/.row-->		
								
							</div>
							
							<div class="forecast row text-center">
								
								<div class="col-xs-4">
									<i class="climacon lightning sun"></i>
									<span class="label label-default">MON</span>
									<div class="small">28/17°C</div>
								</div><!--/.col-->
								
								<div class="col-xs-4">
									<i class="climacon fog sun"></i>
									<span class="label label-default">TUE</span>
									<div class="small">24/11°C</div>
								</div><!--/.col-->
								
								<div class="col-xs-4">
									<i class="climacon hail sun"></i>
									<span class="label label-default">WED</span>
									<div class="small">25/14°C</div>
								</div><!--/.col-->
								
							</div>												
							
						</div>
					</div>		
				
				</div><!--/.col-->		
				
				<div class="col-md-9">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2><i class="fa fa-bar-chart-o"></i>Traffic</h2>
							<div class="panel-actions">
								<a href="index.html#" class="btn-setting"><i class="fa fa-wrench"></i></a>
								<a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
							</div>
							<ul class="nav nav-tabs" id="mainCharts">
							  	<li id="chart24h"><a href="index.html#24h">24h</a></li>
							  	<li id="chartWeek"><a href="index.html#week">week</a></li>
							  	<li id="chartMonth" class="active"><a href="index.html#month">month</a></li>
							</ul>
						</div>
						<div class="panel-body no-padding-bottom">

							<div class="tab-content">
							  	<div class="tab-pane" id="24h">
									<div id="chart-24h" style="height:264px;width:100%;"></div>
									<ul class="stats">
										<li>
											<span>17.781</span>
											<h5>Pageviews</h5>
										</li>
										<li>
											<span>9.879</span>
											<h5>Unique Users</h5>
										</li>
										<li>
											<span>00:02:58</span>
											<h5>Avg. Visit Duration</h5>
										</li>
										<li>
											<span>59,83%</span>
											<h5>Bounce Rate</h5>
										</li>
									</ul>
							  	</div>
							  	<div class="tab-pane" id="week">
									<div id="chart-week" style="height:264px;width:100%;"></div>
									<ul class="stats">
										<li>
											<div class="bgchart" id="statsbg1" style="height:93px;width:100%;"></div>
											<span>17.781</span>
											<h5>Pageviews</h5>
										</li>
										<li>
											<div class="bgchart" id="statsbg2" style="height:93px;width:100%;"></div>
											<span>9.879</span>
											<h5>Unique Users</h5>
										</li>
										<li>
											<div class="bgchart" id="statsbg3" style="height:93px;width:100%;"></div>
											<span>00:02:58</span>
											<h5>Avg. Visit Duration</h5>
										</li>
										<li>
											<div class="bgchart" id="statsbg4" style="height:93px;width:100%;"></div>
											<span>59,83%</span>
											<h5>Bounce Rate</h5>
										</li>
									</ul>
							  	</div>
							  	<div class="tab-pane active" id="month">
							  		<div id="chart-month" style="height:264px;width:100%;"></div>
									<ul class="stats">
										<li>
											<span>17.781</span>
											<h5>Pageviews</h5>
										</li>
										<li>
											<span>9.879</span>
											<h5>Unique Users</h5>
										</li>
										<li>
											<span>00:02:58</span>
											<h5>Avg. Visit Duration</h5>
										</li>
										<li>
											<span>59,83%</span>
											<h5>Bounce Rate</h5>
										</li>
									</ul>
							  	</div>
							</div>
								
						</div>
							
					</div>
							
				</div><!--/col-->
				
			</div><!--/row-->
			
			<div class="row">

				<div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="panel panel-default info-box">
						<div class="backgroundColor blue">
						<div class="clearfix">
							<span class="title">SALE</span>
							<span class="value">$1.890,65</span>
						</div>
						<div class="clearfix">
							<span class="date">Today 6:43 AM</span>
							<span class="change">+$432,50 (15,78%)</span>
						</div>	
						<div class="chart-info-box" style="height:50px;margin-top: 20px;"></div>
						</div>
						
						<div class="quarters">
							
							<div class="quarter q1">
								<div>+$780,98 <span>Weekly Change</span></div>
							</div>
							<div class="quarter q2">
								<div class="verticalChart">

									<div class="singleBar">
										<div class="bar">
											<div class="value">
												<span>37%</span>
											</div>
										</div>
										<div class="title">M</div>
									</div>
									<div class="singleBar">
										<div class="bar">
											<div class="value">
												<span>16%</span>
											</div>
										</div>
										<div class="title">T</div>
									</div>
									<div class="singleBar">
										<div class="bar">
											<div class="value">
												<span>12%</span>
											</div>
										</div>
										<div class="title">W</div>
									</div>
									<div class="singleBar">
										<div class="bar">
											<div class="value">
												<span>9%</span>
											</div>
										</div>
										<div class="title">T</div>
									</div>
									<div class="singleBar">
										<div class="bar">
											<div class="value">
												<span>7%</span>
											</div>
										</div>
										<div class="title">F</div>
									</div>
									<div class="singleBar">
										<div class="bar">
											<div class="value">
												<span>6%</span>
											</div>
										</div>
										<div class="title">S</div>
									</div>
									<div class="singleBar">
										<div class="bar">
											<div class="value">
												<span>5%</span>
											</div>
										</div>
										<div class="title">S</div>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="quarter q3">
								9.127
								<span>Deals</span>
							</div>
							<div class="quarter q4">
								$189.783,87
								<span>Total Income</span>
							</div>
							
						</div>	
						
					</div>
				</div><!--/col-->

				<div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="panel panel-default info-box">
						<div class="backgroundColor orange">
						<div class="clearfix">
							<span class="title">SALE</span>
							<span class="value">$1.890,65</span>
						</div>
						<div class="clearfix">
							<span class="date">Today 6:43 AM</span>
							<span class="change">+$432,50 (15,78%)</span>
						</div>	
						<div class="chart-info-box2" style="height:50px;margin-top: 20px;"></div>
						</div>
						
						<div class="quarters">
							
							<div class="quarter q1">
								<div>+$780,98 <span>Weekly Change</span></div>
							</div>
							<div class="quarter q2">
								<div class="verticalChart">

									<div class="singleBar">
										<div class="bar">
											<div class="value">
												<span>37%</span>
											</div>
										</div>
										<div class="title">M</div>
									</div>
									<div class="singleBar">
										<div class="bar">
											<div class="value">
												<span>16%</span>
											</div>
										</div>
										<div class="title">T</div>
									</div>
									<div class="singleBar">
										<div class="bar">
											<div class="value">
												<span>12%</span>
											</div>
										</div>
										<div class="title">W</div>
									</div>
									<div class="singleBar">
										<div class="bar">
											<div class="value">
												<span>9%</span>
											</div>
										</div>
										<div class="title">T</div>
									</div>
									<div class="singleBar">
										<div class="bar">
											<div class="value">
												<span>7%</span>
											</div>
										</div>
										<div class="title">F</div>
									</div>
									<div class="singleBar">
										<div class="bar">
											<div class="value">
												<span>6%</span>
											</div>
										</div>
										<div class="title">S</div>
									</div>
									<div class="singleBar">
										<div class="bar">
											<div class="value">
												<span>5%</span>
											</div>
										</div>
										<div class="title">S</div>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="quarter q3">
								9.127
								<span>Deals</span>
							</div>
							<div class="quarter q4">
								$189.783,87
								<span>Total Income</span>
							</div>
							
						</div>	
						
					</div>
				</div><!--/col-->

				<div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="panel panel-default info-box">
						<div class="backgroundColor red">
						<div class="clearfix">
							<span class="title">SALE</span>
							<span class="value">$1.890,65</span>
						</div>
						<div class="clearfix">
							<span class="date">Today 6:43 AM</span>
							<span class="change">+$432,50 (15,78%)</span>
						</div>	
						<div class="chart-info-box2" style="height:50px;margin-top: 20px;"></div>
						</div>
						
						<div class="quarters">
							
							<div class="quarter q1">
								<div>+$780,98 <span>Weekly Change</span></div>
							</div>
							<div class="quarter q2">
								<div class="verticalChart">

									<div class="singleBar">
										<div class="bar">
											<div class="value">
												<span>37%</span>
											</div>
										</div>
										<div class="title">M</div>
									</div>
									<div class="singleBar">
										<div class="bar">
											<div class="value">
												<span>16%</span>
											</div>
										</div>
										<div class="title">T</div>
									</div>
									<div class="singleBar">
										<div class="bar">
											<div class="value">
												<span>12%</span>
											</div>
										</div>
										<div class="title">W</div>
									</div>
									<div class="singleBar">
										<div class="bar">
											<div class="value">
												<span>9%</span>
											</div>
										</div>
										<div class="title">T</div>
									</div>
									<div class="singleBar">
										<div class="bar">
											<div class="value">
												<span>7%</span>
											</div>
										</div>
										<div class="title">F</div>
									</div>
									<div class="singleBar">
										<div class="bar">
											<div class="value">
												<span>6%</span>
											</div>
										</div>
										<div class="title">S</div>
									</div>
									<div class="singleBar">
										<div class="bar">
											<div class="value">
												<span>5%</span>
											</div>
										</div>
										<div class="title">S</div>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="quarter q3">
								9.127
								<span>Deals</span>
							</div>
							<div class="quarter q4">
								$189.783,87
								<span>Total Income</span>
							</div>
							
						</div>	
						
					</div>
				</div><!--/col-->

				<div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="panel panel-default info-box">
						<div class="backgroundColor pink">
						<div class="clearfix">
							<span class="title">SALE</span>
							<span class="value">$1.890,65</span>
						</div>
						<div class="clearfix">
							<span class="date">Today 6:43 AM</span>
							<span class="change">+$432,50 (15,78%)</span>
						</div>	
						<div class="chart-info-box" style="height:50px;margin-top: 20px;"></div>
						</div>
						
						<div class="quarters">
							
							<div class="quarter q1">
								<div>+$780,98 <span>Weekly Change</span></div>
							</div>
							<div class="quarter q2">
								<div class="verticalChart">

									<div class="singleBar">
										<div class="bar">
											<div class="value">
												<span>37%</span>
											</div>
										</div>
										<div class="title">M</div>
									</div>
									<div class="singleBar">
										<div class="bar">
											<div class="value">
												<span>16%</span>
											</div>
										</div>
										<div class="title">T</div>
									</div>
									<div class="singleBar">
										<div class="bar">
											<div class="value">
												<span>12%</span>
											</div>
										</div>
										<div class="title">W</div>
									</div>
									<div class="singleBar">
										<div class="bar">
											<div class="value">
												<span>9%</span>
											</div>
										</div>
										<div class="title">T</div>
									</div>
									<div class="singleBar">
										<div class="bar">
											<div class="value">
												<span>7%</span>
											</div>
										</div>
										<div class="title">F</div>
									</div>
									<div class="singleBar">
										<div class="bar">
											<div class="value">
												<span>6%</span>
											</div>
										</div>
										<div class="title">S</div>
									</div>
									<div class="singleBar">
										<div class="bar">
											<div class="value">
												<span>5%</span>
											</div>
										</div>
										<div class="title">S</div>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="quarter q3">
								9.127
								<span>Deals</span>
							</div>
							<div class="quarter q4">
								$189.783,87
								<span>Total Income</span>
							</div>
							
						</div>	
						
					</div>
				</div><!--/col-->

			</div><!--/row-->
			
			<div class="row">
				
				<div class="col-lg-6">
					<div class="panel panel-default calendar">	
						<div class="calendar-small"></div>
					</div>
				</div><!--/col-->
				
				<div class="col-lg-6">
					
					<div class="row">
						
						<div class="col-md-12">
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h2><i class="fa fa-check"></i>Tasks in Progress</h2>
									<div class="panel-actions">
										<a href="index.html#" class="btn-setting"><i class="fa fa-wrench"></i></a>
										<a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
										<a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
									</div>
								</div>
								<div class="panel-body">
									<table class="table bootstrap-datatable datatable small-font">
										<thead>
											  <tr>
												  <th>Task</th>
												  <th>Assigned to</th>
												  <th>Progress</th>
												  <th class="center">Status</th>
											  </tr>
										  </thead>   
										  <tbody>
											<tr>
												<td>SEO Optimisation</td>
												<td>Charly Brown</td>
												<td>
													<div class="progress thin">
													  	<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%">
													    	<span class="sr-only">73% Complete (success)</span>
													  	</div>
													</div>
												</td>
												<td class="text-center text-info">
													Active
												</td>
											</tr>
											<tr>
												<td>App Development</td>
												<td>John Smith</td>
												<td>
													<div class="progress thin">
													  	<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
													    	<span class="sr-only">95% Complete (success)</span>
													  	</div>
													</div>
												</td>
												<td class="text-center text-success">
													Active
												</td>
											</tr>
											<tr>
												<td>Hire Developers</td>
												<td>Megan Holms</td>
												<td>
													<div class="progress thin">
													  	<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100" style="width: 27%">
													    	<span class="sr-only">27% Complete (success)</span>
													  	</div>
													</div>
												</td>
												<td class="text-center text-warning">
													Pending
												</td>
											</tr>
											<tr>
												<td>Growth Hacking</td>
												<td>Alan Wane</td>
												<td>
													<div class="progress thin">
													  	<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="11" aria-valuemin="0" aria-valuemax="100" style="width: 11%">
													    	<span class="sr-only">11% Complete (success)</span>
													  	</div>
													</div>
												</td>
												<td class="text-center text-primary">
													Active
												</td>
											</tr>
											<tr>
												<td>A/B Tests</td>
												<td>Irina Cole</td>
												<td>
													<div class="progress thin">
													  	<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%">
													    	<span class="sr-only">73% Complete (success)</span>
													  	</div>
													</div>
												</td>
												<td class="text-center text-danger">
													Canceled
												</td>
											</tr>											
										</tbody>
									</table>	 	
								</div>
							</div>
							
						</div><!--/col-->
						
						<div class="col-md-12">
							
							<div class="panel panel-default blue">
								<div class="panel-heading">
									<h2><i class="fa fa-bar-chart-o"></i>Weekly Stat</h2>
									<div class="panel-actions">
										<a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
										<a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
									</div>
								</div>
								<div class="panel-body">
									<div class="chart-type1" style="height:170px"></div>	
								</div>	
							</div><!--/span-->
							
						</div><!--/col-->
							
					</div><!--/row-->	

				</div><!--/col-->
					
			</div><!--/row-->
			
			<div class="row">		
				
				<div class="col-lg-4 col-md-4">

					<div class="panel panel-default">
						<div class="panel-heading">
							<h2><i class="fa fa-check"></i>To Do List</h2>
							<div class="panel-actions">
								<a href="index.html#" class="btn-setting"><i class="fa fa-wrench"></i></a>
								<a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
								<a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<div class="panel-body">
							<div class="todo">
								<ul class="todo-list">
									<li>
										<span class="todo-actions">
											<a href="index.html#"><i class="fa fa-check"></i></a>
										</span>
										<span class="desc">Windows Phone 8 App</span> 
										<span class="label label-danger">today</span>
										<a class="remove" href="index.html#"><i class="fa fa-times"></i></a>					
									</li>
									<li>
										<span class="todo-actions">
											<a href="index.html#"><i class="fa fa-check"></i></a>
										</span>
										<span class="desc">New frontend layout</span>
										<span class="label label-danger">today</span>
										<a class="remove" href="index.html#"><i class="fa fa-times"></i></a>	
									</li>
									<li>
										<span class="todo-actions">
											<a href="index.html#"><i class="fa fa-check"></i></a>
										</span>
										<span class="desc">Hire developers</span>
										<span class="label label-warning">tommorow</span>
										<a class="remove" href="index.html#"><i class="fa fa-times"></i></a>	
									</li>
									<li>
										<span class="todo-actions">
											<a href="index.html#"><i class="fa fa-check"></i></a>
										</span>
										<span class="desc">Windows Phone 8 App</span>
										<span class="label label-warning">tommorow</span>
										<a class="remove" href="index.html#"><i class="fa fa-times"></i></a>	
									</li>
									<li>
										<span class="todo-actions">
											<a href="index.html#"><i class="fa fa-check"></i></a>
										</span>
										<span class="desc">New frontend layout</span>
										<span class="label label-success">this week</span>
										<a class="remove" href="index.html#"><i class="fa fa-times"></i></a>	
									</li>
									<li>
										<span class="todo-actions">
											<a href="index.html#"><i class="fa fa-check"></i></a>
										</span>
										<span class="desc">Hire developers</span>
										<span class="label label-success">this week</span>
										<a class="remove" href="index.html#"><i class="fa fa-times"></i></a>	
									</li>
									<li>
										<span class="todo-actions">
											<a href="index.html#"><i class="fa fa-check"></i></a>
										</span>
										<span class="desc">New frontend layout</span>
										<span class="label label-info">this month</span>
										<a class="remove" href="index.html#"><i class="fa fa-times"></i></a>	
									</li>
									<li>
										<span class="todo-actions">
											<a href="index.html#"><i class="fa fa-check"></i></a>
										</span>
										<span class="desc">Hire developers</span>
										<span class="label label-info">this month</span>
										<a class="remove" href="index.html#"><i class="fa fa-times"></i></a>	
									</li>
								</ul>
							</div>	
						</div>
					</div>

				</div><!--/col-->
				
				<div class="col-lg-8 col-md-8">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2><i class="fa fa-list"></i>Recent</h2>
							<div class="panel-actions">
								<a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
								<a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
							</div>
							<ul class="nav nav-tabs" id="recent">
							  	<li class="active"><a href="index.html#tickets">Tickets</a></li>
							  	<li><a href="index.html#users">Users</a></li>
							  	<li><a href="index.html#comments">Comments</a></li>
							</ul>
						</div>
						<div class="panel-body no-padding">
							
							<div class="tab-content">
							  	<div class="tab-pane active" id="tickets">
									<table class="table bootstrap-datatable datatable small-font">
										<thead>
											<tr>
												<th>Status</th>
												<th>Date</th>
												<th>Description</th>
												<th>User</th>
												<th>Number</th>
											</tr>
										</thead>   
										<tbody>
											<tr>
												<td><span class="label label-success">Complete</span></td>
												<td>Jul 25, 2012 11:09</td>
												<td>Server problem</td>
												<td>Ashley Tan</td>
												<td><b>[#199278]</b></td>
											</tr>
											<tr>
												<td><span class="label label-warning">Suspended</span></td>
												<td>Jul 25, 2012 11:09</td>
												<td>Mobile App Problem</td>
												<td>Ann Kovalsky</td>
												<td><b>[#199277]</b></td>
											</tr>
											<tr>
												<td><span class="label label-info">In progress</span></td>
												<td>Jul 25, 2012 11:09</td>
												<td>Paypal Issue</td>
												<td>Chris Dan</td>
												<td><b>[#199276]</b></td>
											</tr>
											<tr>
												<td><span class="label label-danger">Rejected</span></td>
												<td>Jul 25, 2012 11:09</td>
												<td>IE7 Problem</td>
												<td>John Grand</td>
												<td><b>[#199275]</b></td>
											</tr>
											<tr>
												<td><span class="label label-success">Complete</span></td>
												<td>Jul 25, 2012 11:09</td>
												<td>Mobile App Problem</td>
												<td>Agnes Young</td>
												<td><b>[#199274]</b></td>
											</tr>
											<tr>
												<td><span class="label label-warning">Suspended</span></td>
												<td>Jul 25, 2012 11:09</td>
												<td>Mobile App Problem</td>
												<td>Patricia Doyle</td>
												<td><b>[#199273]</b></td>
											</tr>
											<tr>
												<td><span class="label label-info">In progress</span></td>
												<td>Jul 25, 2012 11:09</td>
												<td>Mobile App Problem</td>
												<td>Melanie Brown</td>
												<td><b>[#199272]</b></td>
											</tr>
																					
										</tbody>
									</table>
							  	</div>
							  	<div class="tab-pane" id="users">
									<ul class="users-list">
										<li>
											<a href="index.html#">
												<img class="avatar" alt="Lucas" src="assets/img/avatar.jpg">
											</a>
											<div class="name">Łukasz Holeczek 
												<div class="dropdown pull-right">
													<a class="fa fa-cogs" data-toggle="dropdown" href="index.html#"></a>
													<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<li><a href="index.html#"><i class="fa fa-check"></i> Accept</a></li>
														<li><a href="index.html#"><i class="fa fa-times"></i>Reject</a></li>
														<li><a href="index.html#"><i class="fa fa-minus-square-o"></i>Block</a></li>
														<li><a href="index.html#"><i class="fa fa-trash-o"></i>Delete</a></li>
													</ul>
												</div>
											</div>
											<span class="place"><i class="fa fa-map-marker"></i>Mikolow, POLAND</span>
											<span class="job"><i class="fa fa-briefcase"></i>Founder, BootstrapMaster.com</span>                                 
										</li>
										<li>
											<a href="index.html#">
												<img class="avatar" alt="Bill" src="assets/img/avatar9.jpg">
											</a>
											<div class="name">Bill Cole
												<div class="dropdown pull-right">
													<a class="fa fa-cogs" data-toggle="dropdown" href="index.html#"></a>
													<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<li><a href="index.html#"><i class="fa fa-check"></i> Accept</a></li>
														<li><a href="index.html#"><i class="fa fa-times"></i>Reject</a></li>
														<li><a href="index.html#"><i class="fa fa-minus-square-o"></i>Block</a></li>
														<li><a href="index.html#"><i class="fa fa-trash-o"></i>Delete</a></li>
													</ul>
												</div>
											</div>
											<span class="place"><i class="fa fa-map-marker"></i>London, ENGLAND</span>
											<span class="job"><i class="fa fa-briefcase"></i>CEO, Rainbow INC</span>                                 
										</li>
										<li>
											<a href="index.html#">
												<img class="avatar" alt="Jane" src="assets/img/avatar5.jpg">
											</a>
											<div class="name">Jane Sanchez
												<div class="dropdown pull-right">
													<a class="fa fa-cogs" data-toggle="dropdown" href="index.html#"></a>
													<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<li><a href="index.html#"><i class="fa fa-check"></i> Accept</a></li>
														<li><a href="index.html#"><i class="fa fa-times"></i>Reject</a></li>
														<li><a href="index.html#"><i class="fa fa-minus-square-o"></i>Block</a></li>
														<li><a href="index.html#"><i class="fa fa-trash-o"></i>Delete</a></li>
													</ul>
												</div>
											</div>
											<span class="place"><i class="fa fa-map-marker"></i>Berlin, GERMANY</span>
											<span class="job"><i class="fa fa-briefcase"></i>Head of Stars Group</span>                               
										</li>
										<li>
											<a href="index.html#">
												<img class="avatar" alt="Kate" src="assets/img/avatar6.jpg">
											</a>
											<div class="name">Kate Presley
												<div class="dropdown pull-right">
													<a class="fa fa-cogs" data-toggle="dropdown" href="index.html#"></a>
													<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<li><a href="index.html#"><i class="fa fa-check"></i> Accept</a></li>
														<li><a href="index.html#"><i class="fa fa-times"></i>Reject</a></li>
														<li><a href="index.html#"><i class="fa fa-minus-square-o"></i>Block</a></li>
														<li><a href="index.html#"><i class="fa fa-trash-o"></i>Delete</a></li>
													</ul>
												</div>
											</div>
											<span class="place"><i class="fa fa-map-marker"></i>Madrid, SPAIN</span>
											<span class="job"><i class="fa fa-briefcase"></i>Creative Director, IdeaLab LTD</span>                                  
										</li>
										<li>
											<a href="index.html#">
												<img class="avatar" alt="Lucas" src="assets/img/avatar7.jpg">
											</a>
											<div class="name">Anna Holmes 
												<div class="dropdown pull-right">
													<a class="fa fa-cogs" data-toggle="dropdown" href="index.html#"></a>
													<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<li><a href="index.html#"><i class="fa fa-check"></i> Accept</a></li>
														<li><a href="index.html#"><i class="fa fa-times"></i>Reject</a></li>
														<li><a href="index.html#"><i class="fa fa-minus-square-o"></i>Block</a></li>
														<li><a href="index.html#"><i class="fa fa-trash-o"></i>Delete</a></li>
													</ul>
												</div>
											</div>
											<span class="place"><i class="fa fa-map-marker"></i>Paris, FRANCE</span>
											<span class="job"><i class="fa fa-briefcase"></i>Co-Founder, ArtStudio</span>                                 
										</li>
									</ul>
							  	</div>
							  	<div class="tab-pane" id="comments">
							  		<ul class="comments-list">
										<li>
											<a href="index.html#">
												<img class="avatar" alt="Lucas" src="assets/img/avatar.jpg">
											</a>
											<div>
												<strong>Łukasz Holeczek</strong> - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
											</div>
											<div class="date">4 minutes ago</div>
										</li>
										<li>
											<a href="index.html#">
												<img class="avatar" alt="Bill" src="assets/img/avatar9.jpg">
											</a>
											<div>
												<strong>Bill Cole</strong> - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
											</div>
											<div class="date">22 hours ago</div>	                                
										</li>
										<li>
											<a href="index.html#">
												<img class="avatar" alt="Jane" src="assets/img/avatar5.jpg">
											</a>
											<div>
												<strong>Jane Sanchez</strong> - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
											</div>
											<div class="date">2 days ago</div>		                                  
										</li>
										<li>
											<a href="index.html#">
												<img class="avatar" alt="Kate" src="assets/img/avatar6.jpg">
											</a>
											<div>
												<strong>Kate Presley</strong> - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
											</div>
											<div class="date">10 days ago</div>	                                  
										</li>
									</ul>
								</div>
							</div>
							
						</div>
					</div>	
				</div><!--/col-->
				
			</div><!--/row-->		

			<div class="row">

				<div class="col-lg-12 discussions">

					<ul>

						<li>
							<div class="author">
								<img src="assets/img/avatar.jpg" alt="avatar">
							</div>

							<div class="name">Łukasz Holeczek</div>
							<div class="date">Today, 1:08 PM</div>
							<div class="delete"><i class="fa fa-times"></i></div>

							<div class="message">
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
							</div>	

							<ul>

								<li>
									<div class="author">
										<img src="assets/img/avatar3.jpg" alt="avatar">
									</div>
									<div class="name">Ann Kovalsky</div>
									<div class="date">Today, 1:08 PM</div>
									<div class="delete"><i class="fa fa-times"></i></div>

									<div class="message">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
									</div>

								</li>

								<li>
									<div class="author">
										<img src="assets/img/avatar6.jpg" alt="avatar">
									</div>
									<div class="name">Megan Abbott</div>
									<div class="date">Today, 1:08 PM</div>
									<div class="delete"><i class="fa fa-times"></i></div>

									<div class="message">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
									</div>	
								</li>

								<li>
									<div class="author">
										<img src="assets/img/avatar.jpg" alt="avatar">
									</div>
									<textarea class="diss-form form-control" placeholder="Write comment"></textarea>
								</li>

							</ul>	

						</li>
						
						<li>
							<div class="author">
								<img src="assets/img/avatar.jpg" alt="avatar">
							</div>

							<div class="name">Łukasz Holeczek</div>
							<div class="date">Today, 1:08 PM</div>
							<div class="delete"><i class="fa fa-times"></i></div>

							<div class="message row">
								<div class="col-sm-3 col-xs-6">
									<img src="assets/img/gallery/photo2.jpg" class="img-responsive img-thumbnail">
								</div>
								<div class="col-sm-3 col-xs-6">
									<img src="assets/img/gallery/photo3.jpg" class="img-responsive img-thumbnail">
								</div>
								<div class="col-sm-3 col-xs-6">
									<img src="assets/img/gallery/photo4.jpg" class="img-responsive img-thumbnail">
								</div>
								<div class="col-sm-3 col-xs-6">
									<img src="assets/img/gallery/photo5.jpg" class="img-responsive img-thumbnail">
								</div>	
							</div>	

							<ul>

								<li>
									<div class="author">
										<img src="assets/img/avatar.jpg" alt="avatar">
									</div>
									<textarea class="diss-form form-control" placeholder="Write comment"></textarea>
								</li>

							</ul>	

						</li>

						<li>
							<div class="author">
								<img src="assets/img/avatar9.jpg" alt="avatar">
							</div>

							<div class="name">Tom Allen</div>
							<div class="date">Today, 1:08 PM</div>
							<div class="delete"><i class="fa fa-times"></i></div>

							<div class="message">
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
							</div>	

							<ul>

								<li>
									<div class="author">
										<img src="assets/img/avatar2.jpg" alt="avatar">
									</div>
									<div class="name">Katie Moss</div>
									<div class="date">Today, 1:08 PM</div>
									<div class="delete"><i class="fa fa-times"></i></div>

									<div class="message">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
									</div>

								</li>

								<li>
									<div class="author">
										<img src="assets/img/avatar4.jpg" alt="avatar">
									</div>
									<div class="name">Anna Holn</div>
									<div class="date">Today, 1:08 PM</div>
									<div class="delete"><i class="fa fa-times"></i></div>

									<div class="message">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
									</div>	
								</li>

								<li>
									<div class="author">
										<img src="assets/img/avatar9.jpg" alt="avatar">
									</div>
									<textarea class="diss-form form-control" placeholder="Write comment"></textarea>
								</li>

							</ul>	

						</li>

					</ul>	

				</div><!--/col-->

			</div><!--/row-->	
				
     
					
			</div>
			<!-- end: Content -->
	</div>
</div>

@endsection