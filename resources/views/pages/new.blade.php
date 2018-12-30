@extends('layouts.master')
@section('nav')
    @include('partials.fixednav')
@endsection
@section('content')
<section class="aliceblue">
    <div class="container">           
        <div class="row ">
	        <div class="col-sm-8 col-sm-offset-2 www">
	        	<div class="row">
	        		<div class="col-md-12">
	        			<h1>List your property</h1>
	        		</div>
	        	</div>

	       		<div class="row ww">
	       			<div class="col-md-12">
	       				<h5>What is your status</h5>
						<form action="{{ route('property.new-listing-post') }}" method="post">
							{{ csrf_field() }}
							<div class="col-md-4 status">
								<label class="radio-inline">
									<input type="radio" name="status" id="inlineRadio1" value="flatmate"> Flatmate
								</label>
							</div>
							<div class="col-md-4 status">
								<label class="radio-inline">
									<input type="radio" name="status" id="inlineRadio1" value="landlord"> Landlord
								</label>
							</div>
							<div class="col-md-4 status">
								<label class="radio-inline">
									<input type="radio" name="status" id="inlineRadio1" value="agent"> Agent
								</label>
							</div>
							<h5>What kind of listing</h5>
							<div class="col-md-4 status">
								<label class="radio-inline">
									<input type="radio" name="type" id="inlineRadio1" value="flat"> Flat/Apartment
								</label>
							</div>
							<div class="col-md-4 status">
								<label class="radio-inline">
									<input type="radio" name="type" id="inlineRadio1" value="house"> House
								</label>
							</div>
							<div class="col-md-4 status">
								<label class="radio-inline">
									<input type="radio" name="type" id="inlineRadio1" value="pg"> PG
								</label>
							</div>
							<div class="col-sm-8 col-sm-offset-4">
								<button class="btn btn-danger" type="submit">Continue with you publictaion</button>
							</div>
						</form>
	       			</div>
	       		</div>
	        </div>
            
        </div> <!-- row -->
				    
    </div> <!--  big container -->
     
</section>
@endsection