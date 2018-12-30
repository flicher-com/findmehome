@extends('layouts.master')
@section('nav')
    @include('partials.nav')
@endsection

@section('title') Property Details | FindMeHome @endsection


@section('content')
    <section class="aliceblue">
        <div class="container">
            @include('property.partials.menu')

            <div class="row">
                <div class="col-sm-12 col-sm-offset-0">
                    @include('errors.error')

                    <div class="row">
                        <form action="{{ route('property.new-listing-rooms-post', $property->id) }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" value="" name="remove_rooms" class="rm-room">
                            <div class="col-md-12 rooms">
                                <div class="col-md-12 wiz-content border-1 btnaddroom">
                                    <span class="addroomtext">Add Unit </span><button type="button" class="btn btn-default btnadd"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                </div>

                                @if(count($rooms) < 1)

                                    <div class="col-md-6 col-xs-12 wiz-content border-1 room-box">
                                        <button class="removeroombtn btn btn-xs btn-default" type="button"><input type="hidden" name="roomid[]" value="0"><i class="fa fa-times-circle" aria-hidden="true"></i></button>

                                        <div class="row">
                                            <div class="col-md-4 col-xs-6">
                                                <h5 class="color-white">No of Bed Rooms</h5>
                                                <select name="bedroom[]" id="" class="form-control" required>
                                                    <option value="">Bed Rooms*</option>
                                                    <option value="0">0 bedroom (Studio)</option>
                                                    <option value="1">1 bedroom</option>
                                                    <option value="2">2 bedrooms</option>
                                                    <option value="3">3 bedrooms</option>
                                                    <option value="4">4 bedrooms</option>
                                                    <option value="5">5 bedrooms</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 col-xs-6">
                                                <h5 class="color-white">No of Bathrooms</h5>
                                                <select name="bathroom[]" id="" class="form-control" required>
                                                    <option value="">Bath Rooms*</option>
                                                    <option value="1">1 </option>
                                                    <option value="1.5">1.5 </option>
                                                    <option value="2">2</option>
                                                    <option value="2.5">2.5</option>
                                                    <option value="3">3</option>
                                                    <option value="3.5">3.5</option>
                                                    <option value="4">4</option>
                                                    <option value="4.5">4.5</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 col-xs-12">
                                                <h5 class="color-white">Area</h5>
                                                <div class="row">
                                                    <div class="col-md-7 col-xs-8 areano">
                                                        <input type="number" name="area[]" min="0" value="" class="form-control area1" placeholder="area" aria-describedby="basic-addon2" required>
                                                    </div>
                                                    <div class="col-md-5 col-xs-4 areaunit padding-0">
                                                        <select class="form-control" name="unit[]" required>
                                                            <option value="ft" >ft<sup>2</sup></option>
                                                            <option value="m" >m<sup>2</sup></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-xs-6">
                                                <h5 class="color-white">Monthly Cost</h5>
                                                <div class="input-group">
                                                    <span class="input-group-addon" id="basic-addon1">&#36;</span>
                                                    <input type="number" name="rent[]" class="form-control rent4" min="0" value="" placeholder="Rent" required >
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xs-6">
                                                <h5 class="color-white">Deposit</h5>
                                                <div class="input-group">
                                                    <span class="input-group-addon" id="basic-addon1">&#36;</span>
                                                    <input type="number" name="deposit[]" class="form-control rent4" min="0" value="" placeholder="Deposit" required >
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5 class="color-white">Available from</h5>
                                                <input type="text" name="available_from[]" value="" placeholder="Select Available from date" class="form-control avail" data-toggle="tooltip" data-placement="bottom" title="Available From Date">
                                            </div>
                                            <div class="col-md-6">
                                                <h5 class="color-white">Minimum Term</h5>
                                                <select class="form-control" name="min_term[]" required>
                                                    <option @if($property->min_term == 1) selected="selected" @endif value="1">1 month</option>
                                                    <option @if($property->min_term == 2) selected="selected" @endif value="2">2 months</option>
                                                    <option @if($property->min_term == 3) selected="selected" @endif value="3">3 months</option>
                                                    <option @if($property->min_term == 4) selected="selected" @endif value="4">4 months</option>
                                                    <option @if($property->min_term == 5) selected="selected" @endif value="5">5 months</option>
                                                    <option @if($property->min_term == 6) selected="selected" @endif value="6">6 months</option>
                                                    <option @if($property->min_term == 7) selected="selected" @endif value="7">7 months</option>
                                                    <option @if($property->min_term == 8) selected="selected" @endif value="8">8 months</option>
                                                    <option @if($property->min_term == 9) selected="selected" @endif value="9">9 months</option>
                                                    <option @if($property->min_term == 10) selected="selected" @endif value="10">10 months</option>
                                                    <option @if($property->min_term == 11) selected="selected" @endif value="11">11 months</option>
                                                    <option @if($property->min_term == 12) selected="selected" @endif value="12">12 months</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                @endif

                                @foreach($rooms as $room)
                                    <div class="col-md-6 wiz-content border-1 room-box">
                                        <button class="removeroombtn btn btn-xs btn-default" type="button"><input type="hidden" name="roomid[]" value="{{ $room->id }}"><i class="fa fa-times-circle" aria-hidden="true"></i></button>

                                        <div class="row">
                                            <div class="col-md-4 col-xs-6">
                                                <h5 class="color-white">No of Bed Rooms</h5>
                                                <select name="bedroom[]" id="" class="form-control" required>
                                                    <option value="">Bed Rooms*</option>
                                                    <option @if($room->no_bedrooms == 0) selected="selected" @endif value="0">Studio</option>
                                                    <option @if($room->no_bedrooms == 1) selected="selected" @endif value="1">1 bedroom</option>
                                                    <option @if($room->no_bedrooms == 2) selected="selected" @endif value="2">2 bedrooms</option>
                                                    <option @if($room->no_bedrooms == 3) selected="selected" @endif value="3">3 bedrooms</option>
                                                    <option @if($room->no_bedrooms == 4) selected="selected" @endif value="4">4 bedrooms</option>
                                                    <option @if($room->no_bedrooms == 5) selected="selected" @endif value="5">5 bedrooms</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 col-xs-6">
                                                <h5 class="color-white">No of Bathrooms</h5>
                                                <select name="bathroom[]" id="" class="form-control" required>
                                                    <option value="">Bath Rooms*</option>
                                                    <option @if($room->no_bathrooms == 1) selected="selected" @endif value="1">1 </option>
                                                    <option @if($room->no_bathrooms == 1.5) selected="selected" @endif value="1.5">1.5 </option>
                                                    <option @if($room->no_bathrooms == 2) selected="selected" @endif value="2">2</option>
                                                    <option @if($room->no_bathrooms == 2.5) selected="selected" @endif value="2.5">2.5</option>
                                                    <option @if($room->no_bathrooms == 3) selected="selected" @endif value="3">3</option>
                                                    <option @if($room->no_bathrooms == 3.5) selected="selected" @endif value="3.5">3.5</option>
                                                    <option @if($room->no_bathrooms == 4) selected="selected" @endif value="4">4</option>
                                                    <option @if($room->no_bathrooms == 4.5) selected="selected" @endif value="4.5">4.5</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 col-xs-12">
                                                <h5 class="color-white">Area</h5>
                                                <div class="row">
                                                    <div class="col-md-7 col-xs-8 areano">
                                                        <input type="number" name="area[]" min="0" value="{{ $room->area }}" class="form-control area1" placeholder="area" aria-describedby="basic-addon2" required>
                                                    </div>
                                                    <div class="col-md-5 col-xs-4 areaunit padding-0">
                                                        <select class="form-control" name="unit[]" required>
                                                            <option @if($room->area_unit == 'm') selected="selected" @endif value="m" >m<sup>2</sup></option>
                                                            <option @if($room->area_unit == 'ft') selected="selected" @endif value="ft" >ft<sup>2</sup></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-xs-6">
                                                <h5 class="color-white">Monthly Cost</h5>
                                                <div class="input-group">
                                                    <span class="input-group-addon" id="basic-addon1">&#36;</span>
                                                    <input type="number" name="rent[]" class="form-control rent4" min="0" value="{{ $room->rent }}" placeholder="Rent" required >
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xs-6">
                                                <h5 class="color-white">Deposit</h5>
                                                <div class="input-group">
                                                    <span class="input-group-addon" id="basic-addon1">&#36;</span>
                                                    <input type="number" name="deposit[]" class="form-control rent4" min="0" value="{{ $room->deposit }}" placeholder="Deposit" required >
                                                </div>
                                            </div>


                                        </div>
                                        <?php

                                        $avail_date = $room->available_from;
                                        if($avail_date != '0000-00-00') {
                                            $avail_date = date('d F, Y', strtotime($room->available_from));
                                        } else {
                                            $avail_date = "Please click here to select Available from date";
                                        }

                                        ?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5 class="color-white">Available from</h5>
                                                <input type="text" name="available_from[]" value="{{ $avail_date }}" placeholder="Select Available from date" class="form-control avail" required>
                                            </div>
                                            <div class="col-md-6">
                                                <h5 class="color-white">Minimum Term</h5>
                                                <select class="form-control" name="min_term[]" required>
                                                    <option @if($room->min_term == 1) selected="selected" @endif value="1">1 month</option>
                                                    <option @if($room->min_term == 2) selected="selected" @endif value="2">2 months</option>
                                                    <option @if($room->min_term == 3) selected="selected" @endif value="3">3 months</option>
                                                    <option @if($room->min_term == 4) selected="selected" @endif value="4">4 months</option>
                                                    <option @if($room->min_term == 5) selected="selected" @endif value="5">5 months</option>
                                                    <option @if($room->min_term == 6) selected="selected" @endif value="6">6 months</option>
                                                    <option @if($room->min_term == 7) selected="selected" @endif value="7">7 months</option>
                                                    <option @if($room->min_term == 8) selected="selected" @endif value="8">8 months</option>
                                                    <option @if($room->min_term == 9) selected="selected" @endif value="9">9 months</option>
                                                    <option @if($room->min_term == 10) selected="selected" @endif value="10">10 months</option>
                                                    <option @if($room->min_term == 11) selected="selected" @endif value="11">11 months</option>
                                                    <option @if($room->min_term == 12) selected="selected" @endif value="12">12 months</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="addroomrow">

                                </div>

                            </div>

                            <a href="{{ route('property.new-listing-location', $property->id) }}">
                                <button type="button" class="btn btn-lg btn-success">Previous</button>
                            </a>
                            <button type="submit" class="btn btn-lg btn-danger btn-right btn-sub">Save & Continue</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function(){

            $(document).on('change', '.check11', function(){
                if ($(this).prop('checked') == true){
                    $(this).prev().prop('disabled', true);
                }
                if ($(this).prop('checked') == false){
                    $(this).prev().prop('disabled', false);
                }
            });

            $('.btn-sub').click(function () {
                if($('.avail').val == '') {
                    $(this).tooltip("show");
                }
            });

            $('.btnadd').on('click', function () {
                $('.addroomrow').append(
                    '<div class="col-md-6 col-xs-12 wiz-content border-1 room-box">'
                    +'<button class="removeroombtn btn btn-xs btn-default" type="button"><input type="hidden" name="roomid[]" value="0"><i class="fa fa-times-circle" aria-hidden="true"></i></button>'

                    +'<div class="row">'
                    +'<div class="col-md-4 col-xs-6">'
                    +'<h5 class="color-white">No of Bed Rooms</h5>'
                    +'<select name="bedroom[]" id="" class="form-control" required>'
                    +'<option value="">Bed Rooms*</option>'
                    +'<option value="0">0 bedroom (Studio)</option>'
                    +'<option value="1">1 bedroom</option>'
                    +'<option value="2">2 bedrooms</option>'
                    +'<option value="3">3 bedrooms</option>'
                    +'<option value="4">4 bedrooms</option>'
                    +'<option value="5">5 bedrooms</option>'
                    +'</select>'
                    +'</div>'
                    +'<div class="col-md-4 col-xs-6">'
                    +'<h5 class="color-white">No of Bathrooms</h5>'
                    +'<select name="bathroom[]" id="" class="form-control" required>'
                        +'<option value="">Bath Rooms*</option>'
                        +'<option value="1">1 </option>'
                        +'<option value="1.5">1.5 </option>'
                        +'<option value="2">2</option>'
                        +'<option value="2.5">2.5</option>'
                        +'<option value="3">3</option>'
                        +'<option value="3.5">3.5</option>'
                        +'<option value="4">4</option>'
                        +'<option value="4.5">4.5</option>'
                    +'</select>'
                    +'</div>'
                    +'<div class="col-md-4 col-xs-12">'
                    +'<h5 class="color-white">Area</h5>'
                    +'<div class="row">'
                    +'<div class="col-md-7 col-xs-8 areano">'
                    +'<input type="number" name="area[]" min="0" value="" class="form-control area1" placeholder="area" aria-describedby="basic-addon2" required>'
                    +'</div>'
                    +'<div class="col-md-5 col-xs-4 areaunit padding-0">'
                    +'<select class="form-control" name="unit[]" required>'
                    +'<option value="ft" >ft<sup>2</sup></option>'
                    +'<option value="m" >m<sup>2</sup></option>'
                    +'</select>'
                    +'</div>'
                    +'</div>'
                    +'</div>'
                    +'</div>'
                    +'<div class="row">'
                    +'<div class="col-md-6 col-xs-6">'
                    +'<h5 class="color-white">Monthly Cost</h5>'
                    +'<div class="input-group">'
                    +'<span class="input-group-addon" id="basic-addon1">&#36;</span>'
                    +'<input type="number" name="rent[]" class="form-control rent4" min="0" value="" placeholder="Rent" required >'
                    +'</div>'
                    +'</div>'
                    +'<div class="col-md-6 col-xs-6">'
                    +'<h5 class="color-white">Deposit</h5>'
                    +'<div class="input-group">'
                    +'<span class="input-group-addon" id="basic-addon1">&#36;</span>'
                    +'<input type="number" name="deposit[]" class="form-control rent4" min="0" value="" placeholder="Deposit" required >'
                    +'</div>'
                    +'</div>'

                    +'</div>'

                    +'<div class="row">'
                    +'<div class="col-md-6">'
                    +'<h5 class="color-white">Available from</h5>'
                    +'<input type="text" name="available_from[]" value="" placeholder="Select Available from date" class="form-control avail" required>'
                    +'</div>'
                    +'<div class="col-md-6">'
                    +'<h5 class="color-white">Minimum Term</h5>'
                    +'<select class="form-control" name="min_term[]" required>'
                    +'<option @if($property->min_term == 1) selected="selected" @endif value="1">1 month</option>'
                    +'<option @if($property->min_term == 2) selected="selected" @endif value="2">2 months</option>'
                    +'<option @if($property->min_term == 3) selected="selected" @endif value="3">3 months</option>'
                    +'<option @if($property->min_term == 4) selected="selected" @endif value="4">4 months</option>'
                    +'<option @if($property->min_term == 5) selected="selected" @endif value="5">5 months</option>'
                    +'<option @if($property->min_term == 6) selected="selected" @endif value="6">6 months</option>'
                    +'<option @if($property->min_term == 7) selected="selected" @endif value="7">7 months</option>'
                    +'<option @if($property->min_term == 8) selected="selected" @endif value="8">8 months</option>'
                    +'<option @if($property->min_term == 9) selected="selected" @endif value="9">9 months</option>'
                    +'<option @if($property->min_term == 10) selected="selected" @endif value="10">10 months</option>'
                    +'<option @if($property->min_term == 11) selected="selected" @endif value="11">11 months</option>'
                    +'<option @if($property->min_term == 12) selected="selected" @endif value="12">12 months</option>'
                    +'</select>'
                    +'</div>'
                    +'</div>'
                    +'</div>'
                );
                $('.avail').pickadate({
                    min: true,
                });
            });



            $('.avail').pickadate({
                min: true,
            });
            $(document).on('click', '.removeroombtn', function () {
                $('.rm-room').val($('.rm-room').val()+','+$(this).children().val());
                $(this).parent().remove();
            });

        });
    </script>

    @include('partials.footer')
@endsection