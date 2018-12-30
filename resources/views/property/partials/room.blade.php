@extends('layouts.master')
@section('nav')
    @include('partials.nav')
@endsection

@section('title') House | FindMeHome @endsection


@section('content')
    <section class="aliceblue">
        <div class="container">
            @include('property.partials.menu')

           <div class="row">
                <div class="col-sm-12 col-sm-offset-0">
                    <div class="row">
                        <form action="{{ route('property.new-listing-rooms-post', $property->id) }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" value="" name="remove_rooms" class="rm-room">
                            @include('errors.error')
                            <div class="col-md-12 rooms">
                                <div class="col-md-12 wiz-content border-1 btnaddroom">
                                    <span class="addroomtext">Add Room </span><button type="button" class="btn btn-default btnadd"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                </div>

                                @if(count($rooms) < 1)

                                    <div class="col-md-6 col-xs-12 wiz-content border-1 room-box">
                                        <button class="removeroombtn btn btn-xs btn-default" type="button"><input type="hidden" name="roomid[]" value="0"><i class="fa fa-times-circle" aria-hidden="true"></i></button>
                                        <select name="type[]" id="" class="form-control" required>
                                            <option value="">Room Type*</option>
                                            <option value="private">Private Room</option>
                                            <option value="multiple">Multiple Rooms</option>
                                            <option value="shared">Shared Room</option>
                                            </select>

                                        <div class="row">
                                            <div class="col-md-4 col-xs-6">
                                                <h5 class="color-white">No of Bed Rooms</h5>
                                                <select name="bedroom[]" id="" class="form-control" required>
                                                    <option value="">Bed Rooms*</option>
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
                                                    <option value="1">1 bathroom</option>
                                                    <option value="2">2 bathrooms</option>
                                                    <option value="3">3 bathrooms</option>
                                                    <option value="4">4 bathrooms</option>
                                                    <option value="5">5 bathrooms</option>
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
                                            <div class="col-md-4 col-xs-6">
                                                <h5 class="color-white">Monthly Cost</h5>
                                                <div class="input-group">
                                                    <span class="input-group-addon" id="basic-addon1">&#8377;</span>
                                                    <input type="number" name="rent[]" class="form-control rent4" min="0" value="" placeholder="Rent" required >
                                                    </div>
                                                </div>
                                            <div class="col-md-4 col-xs-6">
                                                <h5 class="color-white">Deposit</h5>
                                                <div class="input-group">
                                                    <span class="input-group-addon" id="basic-addon1">&#8377;</span>
                                                    <input type="number" name="deposit[]" class="form-control rent4" min="0" value="" placeholder="Deposit" required >
                                                    </div>
                                                </div>
                                            <div class="col-md-4">
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

                                        <div class="row">
                                            <div class="col-md-4">
                                                <h5 class="color-white">Available from</h5>
                                                <input type="text" name="available_from[]" value="" placeholder="Select Available from date" class="form-control avail" data-toggle="tooltip" data-placement="bottom" title="Available From Date">
                                                </div>
                                            <div class="col-md-8">
                                                <h5 class="color-white">Amenities</h5>
                                                <div class="col-md-4 col-xs-4 whitebac">
                                                    <label class="checkbox-inline">
                                                        <input type="hidden" name="ac[]" value="0">
                                                        <input class="check11" type="checkbox" name="ac[]" id="inlineCheckbox1" value="1" > AC <img class="icon icons8-Air-Conditioner aiicon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAACm0lEQVRoQ+2Y7XEUMQyG31QAVAB0ABUQKoBUAHQQKiCpgKQCoAKSCgIVkA6ACkIqgHku1uEY3/hjvY49g//czay80rP6sOQ9/V37kt5J4neGdSbpVNIXjN1zFh85iBkAQhuPJR0Bggcu3NO3kiD9MTjRI0mvvY//HBBc80wSECeDA4TmWSSdA/LbPX0g6ddkIHjmu+WIgVi+TMZy4wjfI6OB5H7gIUEIFSs0IYj/zI+a4UBeSvos6aMrPFde7r53VerAVdWhQfyzjKJz31nr/9+cGUESD+cR7CN88AjHgb++Oo/EzrdhQT5E2iTOujc7DurhQPzQupZ0z7nE/z9FaFmyf5J0KMlPdjqOV5KmSHbLkenLb9hRTH0g1rRHwyV7DQR7/oPUfrm19v3jkbUUdXmv38Z3UbiSkmtAmNFfSIqdmivpbfbaW6OuXT7QZT6eaNylO2bM5ffApkK7gGj2qTq+iM5430CeSPrWUXlLVU8lXfpzOnMAjRk5Q3M28mKSpMmkweR+a3vTaA3bpWufgSL5R7uoY/Bi7AWC9p5I2tgY3pwgAITNAjGv2B6KBEMQi6FncwcbrCUy1jTGbAACW7c6Y1dAUFPWMOJh5C22h4qBLIuvQsUL1xKZGMhPZzz23YqWJXdZlGvzHAoMyodpJZPM1yUgeIwwZJFwu0KrhcyqIMmX9xRY4pGediZ11YLkVCOUt5bbCVQLklONUNparjlITjVCaWu55iA5FctCK1W1SuSagySTr7dAbY70tjOprxQktwqZ4rXlt4ClILlVyBSsLV8NkluFTMHa8tUgudXKD62cqlUrXw2STLq7EijNkbuyM6k3BVJadUKF3fanQEqrTgjSbX8KpLTqhCDd9qdASqtULLRKqlb1/j+7HtACuS7jUgAAAABJRU5ErkJggg==" width="18" height="18">
                                                        </label>
                                                    </div>

                                                <div class="col-md-4 col-xs-4 whitebac">
                                                    <label class="checkbox-inline">
                                                        <input type="hidden" name="cooler[]" value="0">
                                                        <input class="check11" type="checkbox" name="cooler[]" id="inlineCheckbox1" value="1" > Cooler <img class="icon icons8-Fan-Head aiicon" width="18" height="18" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAFGklEQVRoQ92ajbFMQRCF+0WACBABIkAEiAARIAJEgAgQASJABIgAESAC6lNztvr1zk/P3KtUvana2n1v7+3u06f/Zu6e2BlZJ2cEh+0J5LyZXTezq2Z2w8wulZf31Tcz4/XBzD6b2Ucz+7mHM/cActfMbpfXik1vzYzX65Wbdc8WII/N7F7wOh7G27zwNF73C7ZgDsZ4waAWTD03sxcrgFaAYMBLBwDjXxWvzoYJoGDzoZldKQAAdL84I41pFsizohQFX8pnvL/HwkEwIkB8fpQVnAWC596XRP5lZk+K0p4ecofQw0AWgGFulAuwg/xzJTRvZgpCBghxTSjxDgsYF2PfAwL0GwcgggXQnYFx6AI07KCLUOvpHJZfzwQg8O4oDwBB3MMc3sUgFg4gXPA0VQowvYVuQAtMl5kRI58cExkQGAt7gOD6WtXCOMAABEAzYK61Lu4BwXsPSjhlQKADw26VUBATUbfAvkv2Hs8MpRmWj1YLCIaT3C3Pthzzu3xxoROCGPajXDeKCOkhZ8QkIXZUKVuCvpY+QfmDmez6V0DQDxOUf/rM5WhQDQilj65NcuOJmYWn6NZVrxVBYptGqtKc1UHOkfxHDq4BERs9Y1qKlVfNWC4Mk3u9a1ry5YQjViIQJeKKt1AuRXiuVWFUCVcchQ6xQm85FJQIJFN1RmFAn6G8Esd4zi9GexiniJD0K6ta9TwQX016VWekHC8xntQKhRKWMQWDVlbVTg+EbkxXXg0rGSU5tfBSWGWaYQ+kispBjgeiavW0DG0r3tI9tfDaI6wk/8hWDyRTOrPgFF7kCABY+rwlrCLrh+jxQFR2qTbdSTOBRuFVu3RrWCGT/kaYHsLXA1FXzo4N0UiSkGaFEhKZdzwGKBYVkWaJchjjnaY7mqZbfjtl7xYgGBpPTaJSX/18tfHXxVOVbDRsAkK8M77ouCcaDgMYAiP0Eg/EJzuMyBFRhoBRdGIf8tcuA8E4hjY1su/ufErnVFKkZNdukP9r1xiTXedger9YhBBy9KLWdqAJBPQIqSW7vIkO9hGUv14IcD3fw4pfdHQM7nma75HPvgYw2BOvV7IfBtts+dXoMlM6teX1QDJbXF3f03k0QWca4srownaXUNTGDOO0McpOvT293YbYGlFm9w8a6jDeh6nk8P9Tk2unL7WadHdEaXlgBogHUTN29H3EVAMyHBrVtOLhgRKLxKOctpbv5r0tsiZg5Iy6PHt7DPfMDsd4BOuiOLlqM9M6xgQEeYHSTEFQecY5MFc7FtLxbNxya4LubqwAozLsd3BiRUkLII0WhB7Jx8qAiL2Gv7lfJyM4A9a0n6/lGT1Mw+hfebW5StRHVvA6noy9QYatjP+qPrVwpeIRIZ6tKhstIJ6VGOt4C+GA4jOswCAAV0/l8byes0gmxiPTD5Ry8BEbPSCqVAgixLKDXKcWbPqK0ObAEKBTB3Ro1dEOIFJH+5tMbd/sD9Knj0wlVtXqf4GJTwOaB4ajTdTU0f7OjEw90hgBwbbphy47AJp9uDR80CObPDMUAMrm0tPXBEiOU5GPzuzDpTQQ6VcB4G/yhvK8WnYjJiol3Vx5kJ2Smw1x5DQUUuO1kwMQANlwzR4k4HVmO3qEANAn6CtTDsrkSAsYynkJkMYX/WCAzlx79MZkoB8M+McKAMAhM89jDrZtASIh6vR4dmXBpDr5yv3LodVSpp9m+B/VeLa4T+dYOqzQTz2WAejGPRjZbMQeAs4MkD9KlIJCjFGeUAAAAABJRU5ErkJggg==">
                                                        </label>
                                                    </div>

                                                <div class="col-md-4 col-xs-4 whitebac">
                                                    <label class="checkbox-inline">
                                                        <input type="hidden" name="storage[]" value="0">
                                                        <input class="check11" type="checkbox" name="storage[]" id="inlineCheckbox1" value="1" > Storage <img class="aiicon icon icons8-Box" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAABK0lEQVRoQ+2a2w3CMBRD3YlgA2ADNmEEYCJWgAlgI9CV2ko8IiWyQ9TI+elPr2/sk8dHO6CTMXTiA90ZeS6czDAR6c7I0pbaBOCLiI002mMm0ij4ZFsTMZFKCSSXVqV+1WX7u9mnyGZU1TPkGnzN8/MmtxEu4OJqE0lFtgdwALAtzvS94ArgDCCeOUNKJExccroWvLPLNCM1cgewHpM8FUz216tRfwRwy6QrNaI+4Ur0pEYeAFYAIs1Y38wIGqHThEg3eyQIxGkVSW4YHCOJ0GlyapFzp8qle4SaCVlsI2SA8nITkUdKCpoIGaC83ETkkZKCJkIGKC83EXmkpKCJkAHKy01EHikpaCJkgPLybCLyzpUE568Jqc8KlfrKZZNG5J3+Jbi0XzaSubwA3a5oM76yk2cAAAAASUVORK5CYII=" width="18" height="18">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                @endif

                                @foreach($rooms as $room)
                                <div class="col-md-6 wiz-content border-1 room-box">
                                    <button class="removeroombtn btn btn-xs btn-default" type="button"><input type="hidden" name="roomid[]" value="{{ $room->id }}"><i class="fa fa-times-circle" aria-hidden="true"></i></button>
                                    <select name="type[]" id="" class="form-control" required>
                                        <option value="">Room Type*</option>
                                        <option @if($room->room_type == 'private') selected="selected" @endif value="private">Private Room</option>
                                        <option @if($room->room_type == 'multiple') selected="selected" @endif value="multiple">Multiple Rooms</option>
                                        <option @if($room->room_type == 'shared') selected="selected" @endif value="shared">Shared Room</option>
                                    </select>

                                    <div class="row">
                                        <div class="col-md-4 col-xs-6">
                                            <h5 class="color-white">No of Bed Rooms</h5>
                                            <select name="bedroom[]" id="" class="form-control" required>
                                                <option value="">Bed Rooms*</option>
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
                                                <option @if($room->no_bathrooms == 1) selected="selected" @endif value="1">1 bathroom</option>
                                                <option @if($room->no_bathrooms == 2) selected="selected" @endif value="2">2 bathrooms</option>
                                                <option @if($room->no_bathrooms == 3) selected="selected" @endif value="3">3 bathrooms</option>
                                                <option @if($room->no_bathrooms == 4) selected="selected" @endif value="4">4 bathrooms</option>
                                                <option @if($room->no_bathrooms == 5) selected="selected" @endif value="5">5 bathrooms</option>
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
                                        <div class="col-md-4 col-xs-6">
                                            <h5 class="color-white">Monthly Cost</h5>
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon1">&#8377;</span>
                                                <input type="number" name="rent[]" class="form-control rent4" min="0" value="{{ $room->rent }}" placeholder="Rent" required >
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-6">
                                            <h5 class="color-white">Deposit</h5>
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon1">&#8377;</span>
                                                <input type="number" name="deposit[]" class="form-control rent4" min="0" value="{{ $room->deposit }}" placeholder="Deposit" required >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
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
                                   <?php

                                    $avail_date = $room->available_from;
                                    if($avail_date != '0000-00-00') {
                                            $avail_date = date('d F, Y', strtotime($room->available_from));
                                        } else {
                                            $avail_date = "Please click here to select Available from date";
                                        }

                                    ?>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h5 class="color-white">Available from</h5>
                                            <input type="text" name="available_from[]" value="{{ $avail_date }}" placeholder="Select Available from date" class="form-control avail" required>
                                        </div>
                                        <div class="col-md-8">
                                            <h5 class="color-white">Amenities</h5>
                                            <div class="col-md-4 col-xs-4 whitebac">
                                                <label class="checkbox-inline">
                                                    <input type="hidden" name="ac[]" value="0" @if($room->ac == 1) disabled @endif>
                                                    <input class="check11" type="checkbox" name="ac[]" id="inlineCheckbox1" value="1" @if($room->ac == 1) checked @endif > AC <img class="icon icons8-Air-Conditioner aiicon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAACm0lEQVRoQ+2Y7XEUMQyG31QAVAB0ABUQKoBUAHQQKiCpgKQCoAKSCgIVkA6ACkIqgHku1uEY3/hjvY49g//czay80rP6sOQ9/V37kt5J4neGdSbpVNIXjN1zFh85iBkAQhuPJR0Bggcu3NO3kiD9MTjRI0mvvY//HBBc80wSECeDA4TmWSSdA/LbPX0g6ddkIHjmu+WIgVi+TMZy4wjfI6OB5H7gIUEIFSs0IYj/zI+a4UBeSvos6aMrPFde7r53VerAVdWhQfyzjKJz31nr/9+cGUESD+cR7CN88AjHgb++Oo/EzrdhQT5E2iTOujc7DurhQPzQupZ0z7nE/z9FaFmyf5J0KMlPdjqOV5KmSHbLkenLb9hRTH0g1rRHwyV7DQR7/oPUfrm19v3jkbUUdXmv38Z3UbiSkmtAmNFfSIqdmivpbfbaW6OuXT7QZT6eaNylO2bM5ffApkK7gGj2qTq+iM5430CeSPrWUXlLVU8lXfpzOnMAjRk5Q3M28mKSpMmkweR+a3vTaA3bpWufgSL5R7uoY/Bi7AWC9p5I2tgY3pwgAITNAjGv2B6KBEMQi6FncwcbrCUy1jTGbAACW7c6Y1dAUFPWMOJh5C22h4qBLIuvQsUL1xKZGMhPZzz23YqWJXdZlGvzHAoMyodpJZPM1yUgeIwwZJFwu0KrhcyqIMmX9xRY4pGediZ11YLkVCOUt5bbCVQLklONUNparjlITjVCaWu55iA5FctCK1W1SuSagySTr7dAbY70tjOprxQktwqZ4rXlt4ClILlVyBSsLV8NkluFTMHa8tUgudXKD62cqlUrXw2STLq7EijNkbuyM6k3BVJadUKF3fanQEqrTgjSbX8KpLTqhCDd9qdASqtULLRKqlb1/j+7HtACuS7jUgAAAABJRU5ErkJggg==" width="18" height="18">
                                                </label>
                                            </div>

                                            <div class="col-md-4 col-xs-4 whitebac">
                                                <label class="checkbox-inline">
                                                    <input type="hidden" name="cooler[]" value="0" @if($room->cooler == 1) disabled @endif>
                                                    <input class="check11" type="checkbox" name="cooler[]" id="inlineCheckbox1" value="1" @if($room->cooler == 1) checked @endif > Cooler <img class="icon icons8-Fan-Head aiicon" width="18" height="18" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAFGklEQVRoQ92ajbFMQRCF+0WACBABIkAEiAARIAJEgAgQASJABIgAESAC6lNztvr1zk/P3KtUvana2n1v7+3u06f/Zu6e2BlZJ2cEh+0J5LyZXTezq2Z2w8wulZf31Tcz4/XBzD6b2Ucz+7mHM/cActfMbpfXik1vzYzX65Wbdc8WII/N7F7wOh7G27zwNF73C7ZgDsZ4waAWTD03sxcrgFaAYMBLBwDjXxWvzoYJoGDzoZldKQAAdL84I41pFsizohQFX8pnvL/HwkEwIkB8fpQVnAWC596XRP5lZk+K0p4ecofQw0AWgGFulAuwg/xzJTRvZgpCBghxTSjxDgsYF2PfAwL0GwcgggXQnYFx6AI07KCLUOvpHJZfzwQg8O4oDwBB3MMc3sUgFg4gXPA0VQowvYVuQAtMl5kRI58cExkQGAt7gOD6WtXCOMAABEAzYK61Lu4BwXsPSjhlQKADw26VUBATUbfAvkv2Hs8MpRmWj1YLCIaT3C3Pthzzu3xxoROCGPajXDeKCOkhZ8QkIXZUKVuCvpY+QfmDmez6V0DQDxOUf/rM5WhQDQilj65NcuOJmYWn6NZVrxVBYptGqtKc1UHOkfxHDq4BERs9Y1qKlVfNWC4Mk3u9a1ry5YQjViIQJeKKt1AuRXiuVWFUCVcchQ6xQm85FJQIJFN1RmFAn6G8Esd4zi9GexiniJD0K6ta9TwQX016VWekHC8xntQKhRKWMQWDVlbVTg+EbkxXXg0rGSU5tfBSWGWaYQ+kispBjgeiavW0DG0r3tI9tfDaI6wk/8hWDyRTOrPgFF7kCABY+rwlrCLrh+jxQFR2qTbdSTOBRuFVu3RrWCGT/kaYHsLXA1FXzo4N0UiSkGaFEhKZdzwGKBYVkWaJchjjnaY7mqZbfjtl7xYgGBpPTaJSX/18tfHXxVOVbDRsAkK8M77ouCcaDgMYAiP0Eg/EJzuMyBFRhoBRdGIf8tcuA8E4hjY1su/ufErnVFKkZNdukP9r1xiTXedger9YhBBy9KLWdqAJBPQIqSW7vIkO9hGUv14IcD3fw4pfdHQM7nma75HPvgYw2BOvV7IfBtts+dXoMlM6teX1QDJbXF3f03k0QWca4srownaXUNTGDOO0McpOvT293YbYGlFm9w8a6jDeh6nk8P9Tk2unL7WadHdEaXlgBogHUTN29H3EVAMyHBrVtOLhgRKLxKOctpbv5r0tsiZg5Iy6PHt7DPfMDsd4BOuiOLlqM9M6xgQEeYHSTEFQecY5MFc7FtLxbNxya4LubqwAozLsd3BiRUkLII0WhB7Jx8qAiL2Gv7lfJyM4A9a0n6/lGT1Mw+hfebW5StRHVvA6noy9QYatjP+qPrVwpeIRIZ6tKhstIJ6VGOt4C+GA4jOswCAAV0/l8byes0gmxiPTD5Ry8BEbPSCqVAgixLKDXKcWbPqK0ObAEKBTB3Ro1dEOIFJH+5tMbd/sD9Knj0wlVtXqf4GJTwOaB4ajTdTU0f7OjEw90hgBwbbphy47AJp9uDR80CObPDMUAMrm0tPXBEiOU5GPzuzDpTQQ6VcB4G/yhvK8WnYjJiol3Vx5kJ2Smw1x5DQUUuO1kwMQANlwzR4k4HVmO3qEANAn6CtTDsrkSAsYynkJkMYX/WCAzlx79MZkoB8M+McKAMAhM89jDrZtASIh6vR4dmXBpDr5yv3LodVSpp9m+B/VeLa4T+dYOqzQTz2WAejGPRjZbMQeAs4MkD9KlIJCjFGeUAAAAABJRU5ErkJggg==">
                                                </label>
                                            </div>

                                            <div class="col-md-4 col-xs-4 whitebac">
                                                <label class="checkbox-inline">
                                                    <input type="hidden" name="storage[]" value="0" @if($room->storage == 1) disabled @endif>
                                                    <input class="check11" type="checkbox" name="storage[]" id="inlineCheckbox1" value="1" @if($room->storage == 1) checked @endif > Storage <img class="aiicon icon icons8-Box" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAABK0lEQVRoQ+2a2w3CMBRD3YlgA2ADNmEEYCJWgAlgI9CV2ko8IiWyQ9TI+elPr2/sk8dHO6CTMXTiA90ZeS6czDAR6c7I0pbaBOCLiI002mMm0ij4ZFsTMZFKCSSXVqV+1WX7u9mnyGZU1TPkGnzN8/MmtxEu4OJqE0lFtgdwALAtzvS94ArgDCCeOUNKJExccroWvLPLNCM1cgewHpM8FUz216tRfwRwy6QrNaI+4Ur0pEYeAFYAIs1Y38wIGqHThEg3eyQIxGkVSW4YHCOJ0GlyapFzp8qle4SaCVlsI2SA8nITkUdKCpoIGaC83ETkkZKCJkIGKC83EXmkpKCJkAHKy01EHikpaCJkgPLybCLyzpUE568Jqc8KlfrKZZNG5J3+Jbi0XzaSubwA3a5oM76yk2cAAAAASUVORK5CYII=" width="18" height="18">
                                                </label>
                                            </div>
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
                    +'<select name="type[]" id="" class="form-control" required>'
                        +'<option value="">Room Type*</option>'
                        +'<option value="private">Private Room</option>'
                        +'<option value="multiple">Multiple Rooms</option>'
                        +'<option value="shared">Shared Room</option>'
                    +'</select>'

                    +'<div class="row">'
                        +'<div class="col-md-4 col-xs-6">'
                            +'<h5 class="color-white">No of Bed Rooms</h5>'
                            +'<select name="bedroom[]" id="" class="form-control" required>'
                                +'<option value="">Bed Rooms*</option>'
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
                                +'<option value="1">1 bathroom</option>'
                                +'<option value="2">2 bathrooms</option>'
                                +'<option value="3">3 bathrooms</option>'
                                +'<option value="4">4 bathrooms</option>'
                                +'<option value="5">5 bathrooms</option>'
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
                        +'<div class="col-md-4 col-xs-6">'
                            +'<h5 class="color-white">Monthly Cost</h5>'
                            +'<div class="input-group">'
                                +'<span class="input-group-addon" id="basic-addon1">&#8377;</span>'
                                +'<input type="number" name="rent[]" class="form-control rent4" min="0" value="" placeholder="Rent" required >'
                            +'</div>'
                        +'</div>'
                        +'<div class="col-md-4 col-xs-6">'
                            +'<h5 class="color-white">Deposit</h5>'
                            +'<div class="input-group">'
                                +'<span class="input-group-addon" id="basic-addon1">&#8377;</span>'
                                +'<input type="number" name="deposit[]" class="form-control rent4" min="0" value="" placeholder="Deposit" required >'
                            +'</div>'
                        +'</div>'
                        +'<div class="col-md-4">'
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

                    +'<div class="row">'
                        +'<div class="col-md-4">'
                            +'<h5 class="color-white">Available from</h5>'
                            +'<input type="text" name="available_from[]" value="" placeholder="Select Available from date" class="form-control avail" required>'
                        +'</div>'
                        +'<div class="col-md-8">'
                            +'<h5 class="color-white">Amenities</h5>'
                            +'<div class="col-md-4 col-xs-4 whitebac">'
                                +'<label class="checkbox-inline">'
                                    +'<input type="hidden" name="ac[]" value="0">'
                                    +'<input class="check11" type="checkbox" name="ac[]" id="inlineCheckbox1" value="1" > AC <img class="icon icons8-Air-Conditioner aiicon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAACm0lEQVRoQ+2Y7XEUMQyG31QAVAB0ABUQKoBUAHQQKiCpgKQCoAKSCgIVkA6ACkIqgHku1uEY3/hjvY49g//czay80rP6sOQ9/V37kt5J4neGdSbpVNIXjN1zFh85iBkAQhuPJR0Bggcu3NO3kiD9MTjRI0mvvY//HBBc80wSECeDA4TmWSSdA/LbPX0g6ddkIHjmu+WIgVi+TMZy4wjfI6OB5H7gIUEIFSs0IYj/zI+a4UBeSvos6aMrPFde7r53VerAVdWhQfyzjKJz31nr/9+cGUESD+cR7CN88AjHgb++Oo/EzrdhQT5E2iTOujc7DurhQPzQupZ0z7nE/z9FaFmyf5J0KMlPdjqOV5KmSHbLkenLb9hRTH0g1rRHwyV7DQR7/oPUfrm19v3jkbUUdXmv38Z3UbiSkmtAmNFfSIqdmivpbfbaW6OuXT7QZT6eaNylO2bM5ffApkK7gGj2qTq+iM5430CeSPrWUXlLVU8lXfpzOnMAjRk5Q3M28mKSpMmkweR+a3vTaA3bpWufgSL5R7uoY/Bi7AWC9p5I2tgY3pwgAITNAjGv2B6KBEMQi6FncwcbrCUy1jTGbAACW7c6Y1dAUFPWMOJh5C22h4qBLIuvQsUL1xKZGMhPZzz23YqWJXdZlGvzHAoMyodpJZPM1yUgeIwwZJFwu0KrhcyqIMmX9xRY4pGediZ11YLkVCOUt5bbCVQLklONUNparjlITjVCaWu55iA5FctCK1W1SuSagySTr7dAbY70tjOprxQktwqZ4rXlt4ClILlVyBSsLV8NkluFTMHa8tUgudXKD62cqlUrXw2STLq7EijNkbuyM6k3BVJadUKF3fanQEqrTgjSbX8KpLTqhCDd9qdASqtULLRKqlb1/j+7HtACuS7jUgAAAABJRU5ErkJggg==" width="18" height="18">'
                                +'</label>'
                            +'</div>'

                            +'<div class="col-md-4 col-xs-4 whitebac">'
                                +'<label class="checkbox-inline">'
                                    +'<input type="hidden" name="cooler[]" value="0">'
                                    +'<input class="check11" type="checkbox" name="cooler[]" id="inlineCheckbox1" value="1" > Cooler <img class="icon icons8-Fan-Head aiicon" width="18" height="18" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAFGklEQVRoQ92ajbFMQRCF+0WACBABIkAEiAARIAJEgAgQASJABIgAESAC6lNztvr1zk/P3KtUvana2n1v7+3u06f/Zu6e2BlZJ2cEh+0J5LyZXTezq2Z2w8wulZf31Tcz4/XBzD6b2Ucz+7mHM/cActfMbpfXik1vzYzX65Wbdc8WII/N7F7wOh7G27zwNF73C7ZgDsZ4waAWTD03sxcrgFaAYMBLBwDjXxWvzoYJoGDzoZldKQAAdL84I41pFsizohQFX8pnvL/HwkEwIkB8fpQVnAWC596XRP5lZk+K0p4ecofQw0AWgGFulAuwg/xzJTRvZgpCBghxTSjxDgsYF2PfAwL0GwcgggXQnYFx6AI07KCLUOvpHJZfzwQg8O4oDwBB3MMc3sUgFg4gXPA0VQowvYVuQAtMl5kRI58cExkQGAt7gOD6WtXCOMAABEAzYK61Lu4BwXsPSjhlQKADw26VUBATUbfAvkv2Hs8MpRmWj1YLCIaT3C3Pthzzu3xxoROCGPajXDeKCOkhZ8QkIXZUKVuCvpY+QfmDmez6V0DQDxOUf/rM5WhQDQilj65NcuOJmYWn6NZVrxVBYptGqtKc1UHOkfxHDq4BERs9Y1qKlVfNWC4Mk3u9a1ry5YQjViIQJeKKt1AuRXiuVWFUCVcchQ6xQm85FJQIJFN1RmFAn6G8Esd4zi9GexiniJD0K6ta9TwQX016VWekHC8xntQKhRKWMQWDVlbVTg+EbkxXXg0rGSU5tfBSWGWaYQ+kispBjgeiavW0DG0r3tI9tfDaI6wk/8hWDyRTOrPgFF7kCABY+rwlrCLrh+jxQFR2qTbdSTOBRuFVu3RrWCGT/kaYHsLXA1FXzo4N0UiSkGaFEhKZdzwGKBYVkWaJchjjnaY7mqZbfjtl7xYgGBpPTaJSX/18tfHXxVOVbDRsAkK8M77ouCcaDgMYAiP0Eg/EJzuMyBFRhoBRdGIf8tcuA8E4hjY1su/ufErnVFKkZNdukP9r1xiTXedger9YhBBy9KLWdqAJBPQIqSW7vIkO9hGUv14IcD3fw4pfdHQM7nma75HPvgYw2BOvV7IfBtts+dXoMlM6teX1QDJbXF3f03k0QWca4srownaXUNTGDOO0McpOvT293YbYGlFm9w8a6jDeh6nk8P9Tk2unL7WadHdEaXlgBogHUTN29H3EVAMyHBrVtOLhgRKLxKOctpbv5r0tsiZg5Iy6PHt7DPfMDsd4BOuiOLlqM9M6xgQEeYHSTEFQecY5MFc7FtLxbNxya4LubqwAozLsd3BiRUkLII0WhB7Jx8qAiL2Gv7lfJyM4A9a0n6/lGT1Mw+hfebW5StRHVvA6noy9QYatjP+qPrVwpeIRIZ6tKhstIJ6VGOt4C+GA4jOswCAAV0/l8byes0gmxiPTD5Ry8BEbPSCqVAgixLKDXKcWbPqK0ObAEKBTB3Ro1dEOIFJH+5tMbd/sD9Knj0wlVtXqf4GJTwOaB4ajTdTU0f7OjEw90hgBwbbphy47AJp9uDR80CObPDMUAMrm0tPXBEiOU5GPzuzDpTQQ6VcB4G/yhvK8WnYjJiol3Vx5kJ2Smw1x5DQUUuO1kwMQANlwzR4k4HVmO3qEANAn6CtTDsrkSAsYynkJkMYX/WCAzlx79MZkoB8M+McKAMAhM89jDrZtASIh6vR4dmXBpDr5yv3LodVSpp9m+B/VeLa4T+dYOqzQTz2WAejGPRjZbMQeAs4MkD9KlIJCjFGeUAAAAABJRU5ErkJggg==">'
                                +'</label>'
                            +'</div>'

                            +'<div class="col-md-4 col-xs-4 whitebac">'
                                +'<label class="checkbox-inline">'
                                    +'<input type="hidden" name="storage[]" value="0">'
                                    +'<input class="check11" type="checkbox" name="storage[]" id="inlineCheckbox1" value="1" > Storage <img class="aiicon icon icons8-Box" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAABK0lEQVRoQ+2a2w3CMBRD3YlgA2ADNmEEYCJWgAlgI9CV2ko8IiWyQ9TI+elPr2/sk8dHO6CTMXTiA90ZeS6czDAR6c7I0pbaBOCLiI002mMm0ij4ZFsTMZFKCSSXVqV+1WX7u9mnyGZU1TPkGnzN8/MmtxEu4OJqE0lFtgdwALAtzvS94ArgDCCeOUNKJExccroWvLPLNCM1cgewHpM8FUz216tRfwRwy6QrNaI+4Ur0pEYeAFYAIs1Y38wIGqHThEg3eyQIxGkVSW4YHCOJ0GlyapFzp8qle4SaCVlsI2SA8nITkUdKCpoIGaC83ETkkZKCJkIGKC83EXmkpKCJkAHKy01EHikpaCJkgPLybCLyzpUE568Jqc8KlfrKZZNG5J3+Jbi0XzaSubwA3a5oM76yk2cAAAAASUVORK5CYII=" width="18" height="18">'
                                +'</label>'
                            +'</div>'
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