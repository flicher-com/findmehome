@extends('layouts.master')
@section('nav')
    @include('partials.nav')
@endsection
@section('content')
    <div class="aliceblue">
        <div class="container">
            @include('property.partials.menu')

            <div class="row">
                <div class="col-sm-12 col-sm-offset-0 wiz-content">
                    @include('errors.error')
                    <form action="{{ route('property.multiple.room.edit.post', $room->id) }}" method="post">
                        {{ csrf_field() }}

                        <?php

                            $name = explode(';', $room->room_name);
                            $area = explode(';', $room->area);

                        ?>

                        <div class="row">
                            <div class="col-md-6">
                                <table class="table table-condensed multiple-table">
                                    <thead>
                                    <tr class="danger">
                                        <th>Room Name</th>
                                        <th>Area</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @for($i=0; $i < count($name); $i++)
                                    <tr class="tr-class" id="row{{$i+1}}">
                                        <td>
                                            <input type="text" class="form-control" name="name[]" value="{{ $name[$i] }}" placeholder="Bed Room" required>
                                        </td>
                                        <td class="area-room">
                                            <div class="input-group">
                                                <input type="number" name="area[]" min="0" value="{{ $area[$i] }}" class="form-control area4" placeholder="area" required>
                                                <span class="input-group-addon" id="basic-addon2">m<sup>2</sup></span>
                                            </div>
                                        </td>
                                        <td class="remove-btn">
                                            <button type="button" id="{{$i+1}}" class="btn btn-sm btn-danger btn-remove"><i class="fa fa-times" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    @endfor
                                    </tbody>
                                </table>
                                <button type="button" class="btn btn-sm btn-addroom">Add Another room</button>

                            </div>
                        </div>
                        <hr>

                        <?php

                        $avail_date = $room->available_from;
                        if($avail_date != '0000-00-00') {
                            $avail_date = date('d F, Y', strtotime($room->available_from));
                        } else {
                            $avail_date = "Please click here to select Available from date";
                        }

                        ?>

                        <h4>Availability</h4>
                        <div class="row">
                            <div class="col-md-4">
                                <h5>Available from<span class="req">*</span></h5>
                                <input type="text" name="available_from" value="{{$avail_date}}" placeholder="Please click here to select Available from date" class="form-control avail" required>

                            </div>
                            <div class="col-md-4">
                                <h5>Minimum term</h5>
                                <select class="form-control" name="min_term">
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

                        <hr>
                        <h4>Total Rent & Deposit</h4>
                        <div class="row">
                            <div class="col-md-4">
                                <h5>Rent<span class="req">*</span></h5>
                                <input type="number" name="rent" value="{{ $room->rent }}" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <h5>Deposit<span class="req">*</span></h5>
                                <input type="number" name="deposit" value="{{ $room->deposit }}" class="form-control" required>
                            </div>
                        </div>

                        <hr>

                        <h4>Cancellation Policy<span class="req">*</span></h4>
                        <div class="row padd">
                            <div class="col-md-4 status">
                                <label class="radio-inline">
                                    <input type="radio" name="cancel_policy" id="inlineRadio1" value="flexible" @if($room->cancel_policy == 'flexible') checked @endif> Flexible
                                </label>
                            </div>
                            <div class="col-md-4 status">
                                <label class="radio-inline">
                                    <input type="radio" name="cancel_policy" id="inlineRadio1" value="moderate" @if($room->cancel_policy == 'moderate') checked @endif> Moderate
                                </label>
                            </div>
                            <div class="col-md-4 status">
                                <label class="radio-inline">
                                    <input type="radio" name="cancel_policy" id="inlineRadio1" value="strict" @if($room->cancel_policy == 'strict') checked @endif> Strict
                                </label>
                            </div>
                        </div>
                        <hr>

                        <h4>Complimentary Information</h4>
                        <div class="row padd">
                            <div class="col-md-4 status">
                                <label class="checkbox-inline">
                                    <input type="hidden" name="ensuite" value="0">
                                    <input type="checkbox" name="ensuite" @if($room->ensuite == 1) checked @endif value="1"> Ensuite
                                </label>
                            </div>
                        </div>
                        <div class="row btnmar">
                            <div class="col-sm-12 col-sm-offset-0">
                                <button class="btn btn-lg btn-success">Cancel</button>
                                <button class="btn btn-lg btn-danger" type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.avail').pickadate({
                min: true,
            });
            var countrooms = {{$i}};

            $('.btn-addroom').on('click',  function () {
                countrooms++;

                $('.multiple-table > tbody:last-child').append(
                    '<tr class="tr-class" id="row'+countrooms+'">'
                    +'<td><input type="text" class="form-control" name="name[]" placeholder="Living Room" required></td>'
                    +'<td class="area-room">'
                    +'<div class="input-group">'
                    +'<input type="number" name="area[]" min="0" value="" class="form-control area4" placeholder="area" required>'
                    +'<span class="input-group-addon" id="basic-addon2">m<sup>2</sup></span>'
                    +'</div>'
                    +'</td>'
                    +'<td><button type="button" id="'+countrooms+'" class="btn btn-sm btn-remove btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button>'
                    +'</tr>'
                );
            });
            $('.btn-remove').on('click', function () {
                var button_id = $(this).attr("id");
                $('#row'+button_id+'').remove();
                //$(this).parent().parent().remove();
            });
        });
    </script>
@endsection