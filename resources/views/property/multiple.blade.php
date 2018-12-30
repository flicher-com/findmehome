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
                    <form action="{{ route('property.multiple.room.post', $property->id) }}" method="post">
                        {{ csrf_field() }}
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
                                        <tr class="tr-class" id="row1">
                                            <td>
                                                <input type="text" class="form-control" name="name[]" placeholder="Bed Room" required>
                                            </td>
                                            <td class="area-room">
                                                <div class="input-group">
                                                    <input type="number" name="area[]" min="0" value="" class="form-control area4" placeholder="area" required>
                                                    <span class="input-group-addon" id="basic-addon2">m<sup>2</sup></span>
                                                </div>
                                            </td>
                                            <td class="remove-btn"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button type="button" class="btn btn-sm btn-addroom">Add Another room</button>

                            </div>
                        </div>
                        <hr>

                        <h4>Availability</h4>
                        <div class="row">
                            <div class="col-md-4">
                                <h5>Available from <span class="req">*</span></h5>
                                <input type="text" name="available_from" value="" placeholder="Please click here to select Available from date" class="form-control avail" required>
                            </div>
                            <div class="col-md-4">
                                <h5>Minimum term</h5>
                                <select class="form-control" name="min_term">
                                    <option selected="selected" value="1">1 month</option>
                                    <option value="2">2 months</option>
                                    <option value="3">3 months</option>
                                    <option value="4">4 months</option>
                                    <option value="5">5 months</option>
                                    <option value="6">6 months</option>
                                    <option value="7">7 months</option>
                                    <option value="8">8 months</option>
                                    <option value="9">9 months</option>
                                    <option value="10">10 months</option>
                                    <option value="11">11 months</option>
                                    <option value="12">12 months</option>
                                </select>
                            </div>
                        </div>

                        <hr>
                        <h4>Total Rent & Deposit</h4>
                        <div class="row">
                            <div class="col-md-4">
                                <h5>Rent<span class="req">*</span></h5>
                                <input type="number" name="rent" class="form-control" min="100" value="{{ old('rent') }}" required>
                            </div>
                            <div class="col-md-4">
                                <h5>Deposit<span class="req">*</span></h5>
                                <input type="number" name="deposit" class="form-control" min="0" value="{{ old('deposit') }}" required>
                            </div>
                        </div>

                        <hr>

                        <h4>Cancellation Policy <span class="req">*</span></h4>
                        <div class="row padd">
                            <div class="col-md-4 status">
                                <label class="radio-inline">
                                    <input type="radio" name="cancel_policy" id="inlineRadio1" value="flexible" {{ old('cancel_policy') }}> Flexible
                                </label>
                            </div>
                            <div class="col-md-4 status">
                                <label class="radio-inline">
                                    <input type="radio" name="cancel_policy" id="inlineRadio1" value="moderate"> Moderate
                                </label>
                            </div>
                            <div class="col-md-4 status">
                                <label class="radio-inline">
                                    <input type="radio" name="cancel_policy" id="inlineRadio1" value="strict"> Strict
                                </label>
                            </div>
                        </div>
                        <hr>

                        <h4>Complimentary Information</h4>
                        <div class="row padd">
                            <div class="col-md-4 status">
                                <label class="checkbox-inline">
                                    <input type="hidden" name="ensuite" value="0">
                                    <input type="checkbox" name="ensuite" value="1"> Ensuite
                                </label>
                            </div>
                        </div>
                        <div class="row btnmar">
                            <div class="col-sm-12 col-sm-offset-0">
                                <a href="{{ route('property.new-listing-room', $property->id) }}"><button class="btn btn-lg btn-success" type="button">Cancel</button></a>
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
            var countrooms = 1;

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
               $('.remove-btn').html(
                   '<button type="button" id="1" class="btn btn-sm btn-danger btn-remove"><i class="fa fa-times" aria-hidden="true"></i></button>'
               );

               $('.btn-remove').on('click', function () {
                   var button_id = $(this).attr("id");
                    $('#row'+button_id+'').remove();
                   //$(this).parent().parent().remove();
               });
            });
        });
    </script>
@endsection