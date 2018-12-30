@extends('layouts.master')
@section('nav')
    @include('partials.nav')
@endsection
@section('content')
    <div class="aliceblue">
        <div class="container">
            @include('property.partials.menu')
            <div class="row">
                <div class="col-sm-12 col-sm-offset-0 ">
                    <div class="row">
                        <form action="{{ route('property.new-listing-room-post', $property->id) }}" method="post" onkeypress="return event.keyCode != 13;">
                            {{ csrf_field() }}
                            <input type="hidden" value="" name="remove_rooms" class="rm-room">
                            <div class="col-md-12 wiz-content">
                                @include('errors.error')
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4>PG Name</h4>
                                        <input type="text" name="pg_name" value="{{ $pg->property_name }}" class="form-control" data-toggle="tooltip" data-placement="top" title="Please Enter Your PG Name" required>
                                    </div>
                                </div>
                                <hr>
                                <h4>PG details</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">

                                            <table id="bedtable" class="table  bhktable multiple-table">
                                                <thead>
                                                <tr class="danger">
                                                    <th>Number of rooms</th>
                                                    <th>Number of beds</th>
                                                    <th>Room Area <span class="pull-right">Area Unit</span></th>
                                                    <th>Cost per person</th>
                                                    <th>Bathroom</th>
                                                    <th>Amenities</th>
                                                    <th>Remove</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($pg->pgrooms as $r)
                                                    <tr>
                                                        <td class="numva"><input type="number" id="one" min="0" class="form-control" value="{{ $r->no_rooms }}" name="no_rooms[]"></td>
                                                        <td>
                                                            <select class="form-control" name="no_beds[]">
                                                                <option value="1" @if($r->no_beds == 1) selected="selected" @endif>1 Bed seater</option>
                                                                <option value="2" @if($r->no_beds == 2) selected="selected" @endif>2 Bed seater</option>
                                                                <option value="3" @if($r->no_beds == 3) selected="selected" @endif>3 Bed seater</option>
                                                                <option value="4" @if($r->no_beds == 4) selected="selected" @endif>4 Bed seater</option>
                                                                <option value="5" @if($r->no_beds == 5) selected="selected" @endif>5 Bed seater</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-7 areano">
                                                                    <input type="number" name="area[]" min="0" value="{{ $r->area }}" class="form-control area1" placeholder="area" aria-describedby="basic-addon2">
                                                                </div>
                                                                <div class="col-md-5 areaunit">
                                                                    <select class="form-control" name="unit[]">
                                                                        <option value="ft" @if($r->area_unit == 'ft') selected="selected" @endif >ft<sup>2</sup></option>
                                                                        <option value="m" @if($r->area_unit == 'm') selected="selected" @endif >m<sup>2</sup></option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <span class="input-group-addon" id="basic-addon1">&#8377;</span>
                                                                <input type="number" name="rent[]" class="form-control rent1" min="0" value="{{ $r->rent }}" placeholder="Rent" aria-describedby="basic-addon1">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <input type="checkbox" name="ensuite[]" value="1" > En-suite bathroom
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal1">
                                                                Choose Amenities
                                                            </button>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-danger removebtn btn-sm" data-toggle="modal" data-target="#myModal1">
                                                                <input type="hidden" class name="pgroom_id[]" value="{{ $r->id }}">
                                                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <button type="button" class="btn btn-success addunit">Add Unit</button>
                                    </div>
                                </div>
                                <?php

                                $avail_date = $pg->available_from;
                                if($avail_date != '0000-00-00') {
                                    $avail_date = date('d F, Y', strtotime($pg->available_from));
                                } else {
                                    $avail_date = "Please click here to select Available from date";
                                }

                                ?>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5>Available from</h5>
                                                <input type="text" name="available_from" value="{{ $avail_date }}" placeholder="Please click here to select Available from date" class="form-control avail" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-6">
                                        <h5>Minimum term</h5>
                                        <select class="form-control" name="min_term">
                                            <option @if($pg->min_term == 1) selected="selected" @endif value="1">1 month</option>
                                            <option @if($pg->min_term == 2) selected="selected" @endif value="2">2 months</option>
                                            <option @if($pg->min_term == 3) selected="selected" @endif value="3">3 months</option>
                                            <option @if($pg->min_term == 4) selected="selected" @endif value="4">4 months</option>
                                            <option @if($pg->min_term == 5) selected="selected" @endif value="5">5 months</option>
                                            <option @if($pg->min_term == 6) selected="selected" @endif value="6">6 months</option>
                                            <option @if($pg->min_term == 7) selected="selected" @endif value="7">7 months</option>
                                            <option @if($pg->min_term == 8) selected="selected" @endif value="8">8 months</option>
                                            <option @if($pg->min_term == 9) selected="selected" @endif value="9">9 months</option>
                                            <option @if($pg->min_term == 10) selected="selected" @endif value="10">10 months</option>
                                            <option @if($pg->min_term == 11) selected="selected" @endif value="11">11 months</option>
                                            <option @if($pg->min_term == 12) selected="selected" @endif value="12">12 months</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 col-xs-6">
                                        <h5>Deposit</h5>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">&#8377;</span>
                                            <input type="number" name="deposit" min="0" value="{{ $pg->deposit }}" class="form-control" placeholder="Price" aria-describedby="basic-addon1" required>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-3 col-xs-4 ensuite">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox1" name="food" value="1" @if($pg->food == 1) checked @endif> Food
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-xs-4 ensuite">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox1" name="laundry" value="1" @if($pg->laundry == 1) checked @endif> Laundry
                                            </label>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <a href="{{ route('property.new-listing-location', $property->id) }}">
                                <button class="btn btn-lg btn-success">Previous</button>
                            </a>

                            <button type="submit" class="btn btn-lg btn-danger btn-right">Save & Continue</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

        $(document).ready(function () {
            $('.avail').pickadate({
                min: true,
            });

            $('.addunit').on('click', function () {
                $('.multiple-table > tbody:last-child').append(
                    '<tr>'
                    +'<td class="numva"><input type="number" id="one" min="0" class="form-control" value="" name="no_rooms[]" required></td>'
                    +'<td>'
                    +'<select class="form-control" name="no_beds[]" required>'
                    +'<option value="">No of beds</option>'
                    +'<option value="1">1 Bed Seater</option>'
                    +'<option value="2">2 Bed Seater</option>'
                    +'<option value="3">3 Bed Seater</option>'
                    +'<option value="4">4 Bed Seater</option>'
                    +'<option value="5">5 Bed Seater</option>'
                    +'</select>'
                    +'</td>'
                    +'<td>'
                    +'<div class="row">'
                    +'<div class="col-md-7 areano">'
                    +'<input type="number" name="area[]" min="0" value="" class="form-control area1" placeholder="area" aria-describedby="basic-addon2" required>'
                    +'</div>'
                    +'<div class="col-md-5 areaunit">'
                    +'<select class="form-control" name="unit[]" required>'
                    +'<option value="ft">ft<sup>2</sup></option>'
                    +'<option value="m">m<sup>2</sup></option>'
                    +'</select>'
                    +'</div>'
                    +'</div>'
                    +'</td>'
                    +'<td>'
                    +'<div class="input-group">'
                    +'<span class="input-group-addon" id="basic-addon1">&#8377;</span>'
                    +'<input type="number" name="rent[]" class="form-control rent1" min="0" value="" placeholder="Rent" aria-describedby="basic-addon1" required>'
                    +'</div>'
                    +'</td>'
                    +'<td>'
                    +'<input type="checkbox" name="ensuite[]" value="1" > En-suite bathroom'
                    +'</td>'
                    +'<td>'
                    +'<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal1">'
                    +'Choose Amenities'
                    +'</button>'
                    +'</td>'
                    +'<td>'
                    +'<button type="button" class="btn btn-danger removebtn btn-sm" data-toggle="modal" data-target="#myModal1">'
                    +'<input type="hidden" class name="pgroom_id[]" value="0">'
                    +'<i class="fa fa-times-circle" aria-hidden="true"></i>'
                    +'</button>'
                    +'</td>'
                    +'</tr>'
                );
            });
        });

        $(document).on('click', '.removebtn', function () {
            $('.rm-room').val($('.rm-room').val()+','+$(this).children().val());
            $(this).parent().parent().remove();
        });

    </script>


    @include('partials.footer')
@endsection