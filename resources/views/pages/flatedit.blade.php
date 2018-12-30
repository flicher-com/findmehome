@extends('layouts.master')
@section('nav')
    @include('partials.fixednav')
@endsection
@section('content')
	<div class="image-container set-full-height" style="background-image: url('/assets/img/wizard-city.jpg')">
    <!--   Creative Tim Branding   -->
    <a href="http://creative-tim.com">
         <div class="logo-container">
            <div class="logo">
                <img src="assets/img/new_logo.png">
            </div>
            <div class="brand">
                Creative Tim
            </div>
        </div>
    </a>
    
    <!--   Big container   -->
    <div class="container">
        <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
           
            <!--      Wizard container        -->   
            <div class="wizard-container"> 
                <div class="card wizard-card ct-wizard-green" id="wizard">
                <form action="" method="">
                <!--        You can switch "ct-wizard-azzure"  with one of the next bright colors: "ct-wizard-blue", "ct-wizard-green", "ct-wizard-orange", "ct-wizard-red"             -->
                
                    	<div class="wizard-header">
                        	<h3>
                        	   <b>LIST</b> YOUR PLACE <br>
                        	   <small>This information will let us know more about your place.</small>
                        	</h3>
                    	</div>
                    	<ul>
                            <li><a href="#location" data-toggle="tab">Location</a></li>
                            <li><a href="#type" data-toggle="tab">Rooms</a></li>
                            <li><a href="#facilities" data-toggle="tab">Description</a></li>
                            <li><a href="#description" data-toggle="tab">FlatMate</a></li>
                            <li><a href="#description" data-toggle="tab">Pictures</a></li>
                            <li><a href="#description" data-toggle="tab">Phone</a></li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane" id="location">
                              <div class="row">
                              		<div class="col-md-12">
                              			<h4 >Location</h4>
                              		</div>
                              </div>
                              <div class="row">
                              		<div class="col-md-12">
                              			<h6>Full Address</h6>
                              		</div>
                              </div>
                              <div class="row">
                              		<div class="col-md-12">
                              			<input type="text" class="form-control" name="">
                              		</div>
                              </div>
                              <div class="row">
                              		<div class="col-md-12">
                              			<div id='map' class="listpmap"></div>
                              		</div>
                              </div>
                            </div>
                            <div class="tab-pane" id="type">
                                <h4 class="info-text">No rooms available </h4>
                                <div class="row">
                                	<div class="col-sm-4 col-sm-offset-4">
			                			<button class="btn btn-primary btn-lg conpub">Add Room</button>
			                		</div>
                                </div>
                            </div>
                            <div class="tab-pane" id="facilities">
                                <div class="row">
                                	<div class="col-md-12">
                                		<h4>Description</h4>
                                		<h6>Property and Flatshare description</h6>
                                		<textarea class="form-control" rows="5"></textarea>
                                		<div class="row">
                                			<div class="col-md-6">
                                				<label>Property Type</label>
                                				<select class="form-control" name="flat[kind]" id="flat_kind"><option selected="selected" value="flat">Flat</option>
													<option value="house">House</option>
													<option value="boat">Boat</option>
													<option value="loft">Loft</option>
													<option value="other">Other</option>
												</select>
                                			</div>
                                			<div class="col-md-6">
                                				<label>Area</label>
                                				<input min="0" class="form-control" type="number" name="flat[area]" id="flat_area">
                                			</div>
                                		</div>
                                		<div class="row newan">
											<div class="col-md-12">
                                				<h4>Amenities</h4>
												<div class="col-md-4 whitebac ">
													<label class="checkbox-inline">
													  <input type="checkbox" id="inlineCheckbox1" value="option1"> Internet <i class="aicon fa fa-wifi" aria-hidden="true"></i>
													</label>
												</div>
												<div class="col-md-4 whitebac">
													<label class="checkbox-inline">
													  <input type="checkbox" id="inlineCheckbox1" value="option1"> AC <i class="aicon fa fa-wifi" aria-hidden="true"></i>
													</label>
												</div>
												<div class="col-md-4 whitebac">
													<label class="checkbox-inline">
													  <input type="checkbox" id="inlineCheckbox1" value="option1"> TV <i class="aicon fa fa-television" aria-hidden="true"></i>
													</label>
												</div>
												<div class="col-md-4 whitebac">
													<label class="checkbox-inline">
													  <input type="checkbox" id="inlineCheckbox1" value="option1"> Garden <i class="aicon fa fa-wifi" aria-hidden="true"></i>
													</label>
												</div>
												<div class="col-md-4 whitebac">
													<label class="checkbox-inline">
													  <input type="checkbox" id="inlineCheckbox1" value="option1"> Terrace/Balcony <i class="aicon fa fa-wifi" aria-hidden="true"></i>
													</label>
												</div>
												<div class="col-md-4 whitebac">
													<label class="checkbox-inline">
													  <input type="checkbox" id="inlineCheckbox1" value="option1"> Fridge <i class="aicon fa fa-wifi" aria-hidden="true"></i>
													</label>
												</div>
												<div class="col-md-4 whitebac">
													<label class="checkbox-inline">
													  <input type="checkbox" id="inlineCheckbox1" value="option1"> Oven <i class="aicon fa fa-wifi" aria-hidden="true"></i>
													</label>
												</div>
												<div class="col-md-4 whitebac">
													<label class="checkbox-inline">
													  <input type="checkbox" id="inlineCheckbox1" value="option1"> Microwave <i class="aicon fa fa-wifi" aria-hidden="true"></i>
													</label>
												</div>
												<div class="col-md-4 whitebac">
													<label class="checkbox-inline">
													  <input type="checkbox" id="inlineCheckbox1" value="option1"> Washing  <i class="aicon fa fa-wifi" aria-hidden="true"></i>
													</label>
												</div>
												<div class="col-md-4 whitebac">
													<label class="checkbox-inline">
													  <input type="checkbox" id="inlineCheckbox1" value="option1"> Dryer <i class="aicon fa fa-wifi" aria-hidden="true"></i>
													</label>
												</div>
												<div class="col-md-4 whitebac">
													<label class="checkbox-inline">
													  <input type="checkbox" id="inlineCheckbox1" value="option1"> Storage <i class="aicon fa fa-wifi" aria-hidden="true"></i>
													</label>
												</div>
												<div class="col-md-4 whitebac">
													<label class="checkbox-inline">
													  <input type="checkbox" id="inlineCheckbox1" value="option1"> Parking <i class="aicon fa fa-wifi" aria-hidden="true"></i>
													</label>
												</div>
												<div class="col-md-4 whitebac">
													<label class="checkbox-inline">
													  <input type="checkbox" id="inlineCheckbox1" value="option1"> Swimming Pool <i class="aicon fa fa-wifi" aria-hidden="true"></i>
													</label>
												</div>
												<div class="col-md-4 whitebac">
													<label class="checkbox-inline">
													  <input type="checkbox" id="inlineCheckbox1" value="option1"> 24hr Backup <i class="aicon fa fa-wifi" aria-hidden="true"></i>
													</label>
												</div>
												
											</div>
										</div>
                                	</div>
                                </div>

                            </div>
                            <div class="tab-pane" id="description">
                                <div class="row">
                                   <div class="col-md-8">
                                   		<div class="col-md-4 whitebac ">
											<label class="checkbox-inline">
											  <input type="checkbox" id="inlineCheckbox1" value="option1"> Internet <i class="aicon fa fa-wifi" aria-hidden="true"></i>
											</label>
										</div>
										<div class="col-md-4 whitebac">
											<label class="checkbox-inline">
											  <input type="checkbox" id="inlineCheckbox1" value="option1"> AC <i class="aicon fa fa-wifi" aria-hidden="true"></i>
											</label>
										</div>
										<div class="col-md-4 whitebac">
											<label class="checkbox-inline">
											  <input type="checkbox" id="inlineCheckbox1" value="option1"> TV <i class="aicon fa fa-television" aria-hidden="true"></i>
											</label>
										</div>
										<div class="col-md-4 whitebac">
											<label class="checkbox-inline">
											  <input type="checkbox" id="inlineCheckbox1" value="option1"> Garden <i class="aicon fa fa-wifi" aria-hidden="true"></i>
											</label>
										</div>
										<div class="col-md-4 whitebac">
											<label class="checkbox-inline">
											  <input type="checkbox" id="inlineCheckbox1" value="option1"> Terrace/Balcony <i class="aicon fa fa-wifi" aria-hidden="true"></i>
											</label>
										</div>
										<div class="col-md-4 whitebac">
											<label class="checkbox-inline">
											  <input type="checkbox" id="inlineCheckbox1" value="option1"> Fridge <i class="aicon fa fa-wifi" aria-hidden="true"></i>
											</label>
										</div>
										<div class="col-md-4 whitebac">
											<label class="checkbox-inline">
											  <input type="checkbox" id="inlineCheckbox1" value="option1"> Oven <i class="aicon fa fa-wifi" aria-hidden="true"></i>
											</label>
										</div>
										<div class="col-md-4 whitebac">
											<label class="checkbox-inline">
											  <input type="checkbox" id="inlineCheckbox1" value="option1"> Microwave <i class="aicon fa fa-wifi" aria-hidden="true"></i>
											</label>
										</div>
										<div class="col-md-4 whitebac">
											<label class="checkbox-inline">
											  <input type="checkbox" id="inlineCheckbox1" value="option1"> Washing  <i class="aicon fa fa-wifi" aria-hidden="true"></i>
											</label>
										</div>
										<div class="col-md-4 whitebac">
											<label class="checkbox-inline">
											  <input type="checkbox" id="inlineCheckbox1" value="option1"> Dryer <i class="aicon fa fa-wifi" aria-hidden="true"></i>
											</label>
										</div>
										<div class="col-md-4 whitebac">
											<label class="checkbox-inline">
											  <input type="checkbox" id="inlineCheckbox1" value="option1"> Storage <i class="aicon fa fa-wifi" aria-hidden="true"></i>
											</label>
										</div>
										<div class="col-md-4 whitebac">
											<label class="checkbox-inline">
											  <input type="checkbox" id="inlineCheckbox1" value="option1"> Parking <i class="aicon fa fa-wifi" aria-hidden="true"></i>
											</label>
										</div>
										<div class="col-md-4 whitebac">
											<label class="checkbox-inline">
											  <input type="checkbox" id="inlineCheckbox1" value="option1"> Swimming Pool <i class="aicon fa fa-wifi" aria-hidden="true"></i>
											</label>
										</div>
										<div class="col-md-4 whitebac">
											<label class="checkbox-inline">
											  <input type="checkbox" id="inlineCheckbox1" value="option1"> 24hr Backup <i class="aicon fa fa-wifi" aria-hidden="true"></i>
											</label>
										</div>

												
                                   </div>
                                   <div class="col-md-4">
                                   	
                                   </div>
                                </div>
                                <div class="row">
                                   <div class="col-md-8">
                                   		<div class="col-md-4 whitebac ">
											<label class="checkbox-inline">
											  <input type="checkbox" id="inlineCheckbox1" value="option1"> Internet <i class="aicon fa fa-wifi" aria-hidden="true"></i>
											</label>
										</div>
										<div class="col-md-4 whitebac">
											<label class="checkbox-inline">
											  <input type="checkbox" id="inlineCheckbox1" value="option1"> AC <i class="aicon fa fa-wifi" aria-hidden="true"></i>
											</label>
										</div>
										<div class="col-md-4 whitebac">
											<label class="checkbox-inline">
											  <input type="checkbox" id="inlineCheckbox1" value="option1"> TV <i class="aicon fa fa-television" aria-hidden="true"></i>
											</label>
										</div>
										<div class="col-md-4 whitebac">
											<label class="checkbox-inline">
											  <input type="checkbox" id="inlineCheckbox1" value="option1"> Garden <i class="aicon fa fa-wifi" aria-hidden="true"></i>
											</label>
										</div>
										<div class="col-md-4 whitebac">
											<label class="checkbox-inline">
											  <input type="checkbox" id="inlineCheckbox1" value="option1"> Terrace/Balcony <i class="aicon fa fa-wifi" aria-hidden="true"></i>
											</label>
										</div>
										<div class="col-md-4 whitebac">
											<label class="checkbox-inline">
											  <input type="checkbox" id="inlineCheckbox1" value="option1"> Fridge <i class="aicon fa fa-wifi" aria-hidden="true"></i>
											</label>
										</div>
										<div class="col-md-4 whitebac">
											<label class="checkbox-inline">
											  <input type="checkbox" id="inlineCheckbox1" value="option1"> Oven <i class="aicon fa fa-wifi" aria-hidden="true"></i>
											</label>
										</div>
										<div class="col-md-4 whitebac">
											<label class="checkbox-inline">
											  <input type="checkbox" id="inlineCheckbox1" value="option1"> Microwave <i class="aicon fa fa-wifi" aria-hidden="true"></i>
											</label>
										</div>
										<div class="col-md-4 whitebac">
											<label class="checkbox-inline">
											  <input type="checkbox" id="inlineCheckbox1" value="option1"> Washing  <i class="aicon fa fa-wifi" aria-hidden="true"></i>
											</label>
										</div>
										<div class="col-md-4 whitebac">
											<label class="checkbox-inline">
											  <input type="checkbox" id="inlineCheckbox1" value="option1"> Dryer <i class="aicon fa fa-wifi" aria-hidden="true"></i>
											</label>
										</div>
										<div class="col-md-4 whitebac">
											<label class="checkbox-inline">
											  <input type="checkbox" id="inlineCheckbox1" value="option1"> Storage <i class="aicon fa fa-wifi" aria-hidden="true"></i>
											</label>
										</div>
										<div class="col-md-4 whitebac">
											<label class="checkbox-inline">
											  <input type="checkbox" id="inlineCheckbox1" value="option1"> Parking <i class="aicon fa fa-wifi" aria-hidden="true"></i>
											</label>
										</div>
										<div class="col-md-4 whitebac">
											<label class="checkbox-inline">
											  <input type="checkbox" id="inlineCheckbox1" value="option1"> Swimming Pool <i class="aicon fa fa-wifi" aria-hidden="true"></i>
											</label>
										</div>
										<div class="col-md-4 whitebac">
											<label class="checkbox-inline">
											  <input type="checkbox" id="inlineCheckbox1" value="option1"> 24hr Backup <i class="aicon fa fa-wifi" aria-hidden="true"></i>
											</label>
										</div>

												
                                   </div>
                                   <div class="col-md-4">
                                   	
                                   </div>
                                </div>
                            </div>
                        </div>
                        <div class="wizard-footer">
                            	<div class="pull-right">
                                    <input type='button' class='btn btn-next btn-fill btn-success btn-wd btn-sm' name='next' value='Next' />
                                    <input type='button' class='btn btn-finish btn-fill btn-success btn-wd btn-sm' name='finish' value='Finish' />
        
                                </div>
                                <div class="pull-left">
                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                                </div>
                                <div class="clearfix"></div>
                        </div>	
                    </form>
                </div>
            </div> <!-- wizard container -->
        </div>
        </div> <!-- row -->
    </div> <!--  big container -->
   
    <div class="footer">
        <div class="container">
            
        </div>
    </div>
    
</div>
<script>
	      var map;
	      function initMap() {
	        map = new google.maps.Map(document.getElementById('map'), {
	          center: {lat: -34.397, lng: 150.644},
	          zoom: 8
	        });
	      }
	    </script>
	    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQ97y1KBDy6WEN_gilUACseXKMT5T6k-U&callback=initMap">
    </script>
@endsection