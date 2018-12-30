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
                            <div class="col-md-12 wiz-content">
                                @include('errors.error')
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4>PG Name</h4>
                                        <input type="text" name="pg_name" value="{{ $pg->property_name }}" class="form-control" data-toggle="tooltip" data-placement="top" title="Please Enter Your PG Name" required>
                                    </div>
                                </div>
                                <hr>
                                <?php
                                if ($pg->onebed != '') {
                                    $one = explode(';', $pg->onebed);
                                    $oneamen = explode(',', $pg->onebed);
                                } else {
                                    $one = array('','','','','','');
                                    $oneamen = array('','','','');
                                }
                                if ($pg->twobed != '') {
                                    $two = explode(';', $pg->twobed);
                                    $twoamen = explode(',', $pg->twobed);
                                } else {
                                    $two = array('','','','','','');
                                    $twoamen = array('','','','');
                                }
                                if ($pg->threebed != '') {
                                    $three = explode(';', $pg->threebed);
                                    $threeamen = explode(',', $pg->threebed);
                                } else {
                                    $three = array('','','','','','');
                                    $threeamen = array('','','','');
                                }
                                if ($pg->fourbed != '') {
                                    $four = explode(';', $pg->fourbed);
                                    $fouramen = explode(',', $pg->fourbed);
                                } else {
                                    $four = array('','','','','','');
                                    $fouramen = array('','','','');
                                }
                                if ($pg->fivebed != '') {
                                    $five = explode(';', $pg->fivebed);
                                    $fiveamen = explode(',', $pg->fivebed);
                                } else {
                                    $five = array('','','','','','');
                                    $fiveamen = array('','','','');
                                }
                                ?>
                                <h4>PG details</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <table id="bedtable" class="table table-bordered table-responsive bhktable">
                                            <thead>
                                            <tr class="danger">
                                                <th>Number of rooms</th>
                                                <th>Number of beds</th>
                                                <th>Room Area <span class="pull-right">Area Unit</span></th>
                                                <th>Cost per person</th>
                                                <th>Bathroom</th>
                                                <th>Amenities</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="numva"><input type="number" id="one" min="0" class="form-control" value="{{$one[0]}}" name="bed1"></td>
                                                <td>
                                                    <select class="form-control" name="unit1">
                                                        <option value="">1 Bed seater</option>
                                                        <option value="">2 Bed seater</option>
                                                        <option value="">3 Bed seater</option>
                                                        <option value="">4 Bed seater</option>
                                                        <option value="">5 Bed seater</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-7 areano">
                                                            <input type="number" name="area1" min="0" value="{{$one[1]}}" class="form-control area1" placeholder="area" aria-describedby="basic-addon2">
                                                        </div>
                                                        <div class="col-md-5 areaunit">
                                                            <select class="form-control" name="unit1">
                                                                <option value="ft" @if($one[2] == 'ft') selected @endif>ft<sup>2</sup></option>
                                                                <option value="m" @if($one[2] == 'm') selected @endif>m<sup>2</sup></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1">&#8377;</span>
                                                        <input type="number" name="rent1" class="form-control rent1" min="0" value="{{$one[3]}}" placeholder="Rent" aria-describedby="basic-addon1">
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="ensuite1" value="1" @if($one[4] == 1) checked @endif> En-suite bathroom
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal1">
                                                        Choose Amenities
                                                    </button>
                                                </td>
                                            </tr>
                                            <div class="pgroomsadd"></div>
                                            </tbody>
                                        </table>
                                        <button type="button" class="btn btn-success">Add Unit</button>
                                    </div>

                                    {{--<div class="col-md-12">
                                        <h5>Number of rooms and beds</h5>

                                        <table id="bedtable" class="table table-bordered table-responsive bhktable">
                                            <thead>
                                                <tr class="danger">
                                                    <th>Number of rooms</th>
                                                    <th>Number of beds</th>
                                                    <th>Room Area <span class="pull-right">Area Unit</span></th>
                                                    <th>Cost per person</th>
                                                    <th>Bathroom</th>
                                                    <th>Amenities</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="numva"><input type="number" id="one" min="0" class="form-control" value="{{$one[0]}}" name="bed1"></td>
                                                    <td>with 1 Bed</td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-md-7 areano">
                                                                <input type="number" name="area1" min="0" value="{{$one[1]}}" class="form-control area1" placeholder="area" aria-describedby="basic-addon2">
                                                            </div>
                                                            <div class="col-md-5 areaunit">
                                                                <select class="form-control" name="unit1">
                                                                    <option value="m" @if($one[2] == 'm') selected @endif>m<sup>2</sup></option>
                                                                    <option value="ft" @if($one[2] == 'ft') selected @endif>ft<sup>2</sup></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group">
                                                            <span class="input-group-addon" id="basic-addon1">&#8377;</span>
                                                            <input type="number" name="rent1" class="form-control rent1" min="0" value="{{$one[3]}}" placeholder="Rent" aria-describedby="basic-addon1">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="ensuite1" value="1" @if($one[4] == 1) checked @endif> En-suite bathroom
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal1">
                                                            Choose Amenities
                                                        </button>
                                                    </td>
                                                </tr>
                                                 <tr>
                                                    <td class="numva"><input type="number" id="two" min="0" class="form-control" value="{{$two[0]}}" name="bed2"></td>
                                                    <td>with 2 Beds</td>
                                                     <td>
                                                         <div class="row">
                                                             <div class="col-md-7 areano">
                                                                 <input type="number" name="area2" min="0" value="{{$two[1]}}" class="form-control area2" placeholder="area" aria-describedby="basic-addon2">
                                                             </div>
                                                             <div class="col-md-5 areaunit">
                                                                 <select class="form-control" name="unit2">
                                                                     <option value="m" @if($two[2] == 'm') selected @endif>m<sup>2</sup></option>
                                                                     <option value="ft" @if($two[2] == 'ft') selected @endif>ft<sup>2</sup></option>
                                                                 </select>
                                                             </div>
                                                         </div>
                                                     </td>
                                                     <td>
                                                         <div class="input-group">
                                                             <span class="input-group-addon" id="basic-addon1">&#8377;</span>
                                                             <input type="number" name="rent2" class="form-control rent2" min="0" value="{{$two[3]}}" placeholder="Rent" aria-describedby="basic-addon1">
                                                         </div>
                                                     </td>
                                                     <td>
                                                         <input type="checkbox" name="ensuite2" value="1" @if($two[4] == 1) checked @endif> En-suite bathroom
                                                     </td>
                                                     <td>
                                                         <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal2">
                                                             Choose Amenities
                                                         </button>
                                                     </td>
                                                </tr>
                                                 <tr>
                                                    <td class="numva"><input type="number" id="three" min="0" class="form-control" value="{{$three[0]}}" name="bed3"></td>
                                                    <td>with 3 Beds</td>
                                                     <td>
                                                         <div class="row">
                                                             <div class="col-md-7 areano">
                                                                 <input type="number" name="area3" min="0" value="{{$three[1]}}" class="form-control area3" placeholder="area" aria-describedby="basic-addon2">
                                                             </div>
                                                             <div class="col-md-5 areaunit">
                                                                 <select class="form-control" name="unit3">
                                                                     <option value="m" @if($three[2] == 'm') selected @endif>m<sup>2</sup></option>
                                                                     <option value="ft" @if($three[2] == 'ft') selected @endif>ft<sup>2</sup></option>
                                                                 </select>
                                                             </div>
                                                         </div>
                                                     </td>
                                                     <td>
                                                         <div class="input-group">
                                                             <span class="input-group-addon" id="basic-addon1">&#8377;</span>
                                                             <input type="number" name="rent3" class="form-control rent3" min="0" value="{{$three[3]}}" placeholder="Rent" aria-describedby="basic-addon1" >
                                                         </div>
                                                     </td>
                                                     <td>
                                                         <input type="checkbox" name="ensuite3" value="1" @if($three[4] == 1) checked @endif> En-suite bathroom
                                                     </td>
                                                     <td>
                                                         <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal3">
                                                             Choose Amenities
                                                         </button>
                                                     </td>
                                                </tr>
                                                 <tr>
                                                    <td class="numva"><input type="number" id="four" min="0" class="form-control" value="{{$four[0]}}" name="bed4"></td>
                                                    <td>with 4 Beds</td>
                                                     <td>
                                                         <div class="row">
                                                             <div class="col-md-7 areano">
                                                                 <input type="number" name="area4" min="0" value="{{$four[1]}}" class="form-control area4" placeholder="area" aria-describedby="basic-addon2">
                                                             </div>
                                                             <div class="col-md-5 areaunit">
                                                                 <select class="form-control" name="unit4">
                                                                     <option value="m" @if($four[2] == 'm') selected @endif>m<sup>2</sup></option>
                                                                     <option value="ft" @if($four[2] == 'ft') selected @endif>ft<sup>2</sup></option>
                                                                 </select>
                                                             </div>
                                                         </div>
                                                     </td>
                                                     <td>
                                                         <div class="input-group">
                                                             <span class="input-group-addon" id="basic-addon1">&#8377;</span>
                                                             <input type="number" name="rent4" class="form-control rent4" min="0" value="{{$four[3]}}" placeholder="Rent" aria-describedby="basic-addon1" >
                                                         </div>
                                                     </td>
                                                     <td>
                                                         <input type="checkbox" name="ensuite4" value="1" @if($four[4] == 1) checked @endif> En-suite bathroom
                                                     </td>
                                                     <td>
                                                         <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal4">
                                                             Choose Amenities
                                                         </button>
                                                     </td>
                                                </tr>
                                                 <tr>
                                                    <td class="numva"><input type="number" id="five" min="0" class="form-control" value="{{$five[0]}}" name="bed5"></td>
                                                    <td>with 5 Beds</td>
                                                     <td>
                                                         <div class="row">
                                                             <div class="col-md-7 areano">
                                                                 <input type="number" name="area5" min="0" value="{{$five[1]}}" class="form-control area5" placeholder="area" aria-describedby="basic-addon2">
                                                             </div>
                                                             <div class="col-md-5 areaunit">
                                                                 <select class="form-control" name="unit5">
                                                                     <option value="m" @if($five[2] == 'm') selected @endif>m<sup>2</sup></option>
                                                                     <option value="ft" @if($five[2] == 'ft') selected @endif>ft<sup>2</sup></option>
                                                                 </select>
                                                             </div>
                                                         </div>
                                                     </td>
                                                     <td>
                                                         <div class="input-group">
                                                             <span class="input-group-addon" id="basic-addon1">&#8377;</span>
                                                             <input type="number" name="rent5" class="form-control rent5" min="0" value="{{$five[3]}}" placeholder="Rent" aria-describedby="basic-addon1" >
                                                         </div>
                                                     </td>
                                                     <td>
                                                         <input type="checkbox" name="ensuite5" value="1" @if($five[4] == 1) checked @endif> En-suite bathroom
                                                     </td>
                                                     <td>
                                                         <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal5">
                                                             Choose Amenities
                                                         </button>
                                                     </td>
                                                 </tr>
                                                <tr>
                                                    <td class="numva"><strong>Total</strong></td>
                                                    <td><span id="total">{{ $pg->total_rooms }}</span></td>
                                                    <input type="hidden" id="t_r" name="total_rooms" value="{{ $pg->total_rooms }}">
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>--}}

                                    <?php

                                    $avail_date = $pg->available_from;
                                    if($avail_date != '0000-00-00') {
                                        $avail_date = date('d F, Y', strtotime($pg->available_from));
                                    } else {
                                        $avail_date = "Please click here to select Available from date";
                                    }

                                    ?>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5>Available from</h5>
                                                <input type="text" name="available_from" value="{{$avail_date}}" placeholder="Please click here to select Available from date" class="form-control avail" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
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
                                    <div class="col-md-4">
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
                                        <div class="col-md-3 ensuite">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox1" name="food" value="1" @if($pg->food == 1) checked @endif> Food
                                            </label>
                                        </div>
                                        <div class="col-md-3 ensuite">
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
                            @for($i=1; $i<6; $i++)
                                <?php

                                $looparray = array();
                                $amenloop = array();
                                if($i == 1) {
                                    $looparray = $one;
                                    $amenloop = $oneamen;
                                }
                                if($i == 2) {
                                    $looparray = $two;
                                    $amenloop = $twoamen;
                                }
                                if($i == 3) {
                                    $looparray = $three;
                                    $amenloop = $threeamen;
                                }
                                if($i == 4) {
                                    $looparray = $four;
                                    $amenloop = $fouramen;
                                }
                                if($i == 5) {
                                    $looparray = $five;
                                    $amenloop = $fiveamen;
                                }
                                //print_r($amenloop);
                                //print_r($looparray);

                                ?>
                                <div class="modal fade" id="myModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">{{$i}} Bed room Amenities</h4>
                                            </div>
                                            <div class="modal-body">

                                                <div class="row amenties">
                                                    <div class="col-md-12">
                                                        <div class="col-md-4 whitebac">
                                                            <label class="checkbox-inline">
                                                                <input type="hidden" name="ac{{$i}}" value="0">
                                                                <input type="checkbox" name="ac{{$i}}" id="inlineCheckbox1" value="1" @if($amenloop[1] == 1) checked @endif> AC <img class="icon icons8-Air-Conditioner aiicon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAACm0lEQVRoQ+2Y7XEUMQyG31QAVAB0ABUQKoBUAHQQKiCpgKQCoAKSCgIVkA6ACkIqgHku1uEY3/hjvY49g//czay80rP6sOQ9/V37kt5J4neGdSbpVNIXjN1zFh85iBkAQhuPJR0Bggcu3NO3kiD9MTjRI0mvvY//HBBc80wSECeDA4TmWSSdA/LbPX0g6ddkIHjmu+WIgVi+TMZy4wjfI6OB5H7gIUEIFSs0IYj/zI+a4UBeSvos6aMrPFde7r53VerAVdWhQfyzjKJz31nr/9+cGUESD+cR7CN88AjHgb++Oo/EzrdhQT5E2iTOujc7DurhQPzQupZ0z7nE/z9FaFmyf5J0KMlPdjqOV5KmSHbLkenLb9hRTH0g1rRHwyV7DQR7/oPUfrm19v3jkbUUdXmv38Z3UbiSkmtAmNFfSIqdmivpbfbaW6OuXT7QZT6eaNylO2bM5ffApkK7gGj2qTq+iM5430CeSPrWUXlLVU8lXfpzOnMAjRk5Q3M28mKSpMmkweR+a3vTaA3bpWufgSL5R7uoY/Bi7AWC9p5I2tgY3pwgAITNAjGv2B6KBEMQi6FncwcbrCUy1jTGbAACW7c6Y1dAUFPWMOJh5C22h4qBLIuvQsUL1xKZGMhPZzz23YqWJXdZlGvzHAoMyodpJZPM1yUgeIwwZJFwu0KrhcyqIMmX9xRY4pGediZ11YLkVCOUt5bbCVQLklONUNparjlITjVCaWu55iA5FctCK1W1SuSagySTr7dAbY70tjOprxQktwqZ4rXlt4ClILlVyBSsLV8NkluFTMHa8tUgudXKD62cqlUrXw2STLq7EijNkbuyM6k3BVJadUKF3fanQEqrTgjSbX8KpLTqhCDd9qdASqtULLRKqlb1/j+7HtACuS7jUgAAAABJRU5ErkJggg==" width="18" height="18">
                                                            </label>
                                                        </div>

                                                        <div class="col-md-4 whitebac">
                                                            <label class="checkbox-inline">
                                                                <input type="hidden" name="cooler{{$i}}" value="0">
                                                                <input type="checkbox" name="cooler{{$i}}" id="inlineCheckbox1" value="1" @if($amenloop[2] == 1) checked @endif> Cooler <img class="icon icons8-Fan-Head aiicon" width="18" height="18" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAFGklEQVRoQ92ajbFMQRCF+0WACBABIkAEiAARIAJEgAgQASJABIgAESAC6lNztvr1zk/P3KtUvana2n1v7+3u06f/Zu6e2BlZJ2cEh+0J5LyZXTezq2Z2w8wulZf31Tcz4/XBzD6b2Ucz+7mHM/cActfMbpfXik1vzYzX65Wbdc8WII/N7F7wOh7G27zwNF73C7ZgDsZ4waAWTD03sxcrgFaAYMBLBwDjXxWvzoYJoGDzoZldKQAAdL84I41pFsizohQFX8pnvL/HwkEwIkB8fpQVnAWC596XRP5lZk+K0p4ecofQw0AWgGFulAuwg/xzJTRvZgpCBghxTSjxDgsYF2PfAwL0GwcgggXQnYFx6AI07KCLUOvpHJZfzwQg8O4oDwBB3MMc3sUgFg4gXPA0VQowvYVuQAtMl5kRI58cExkQGAt7gOD6WtXCOMAABEAzYK61Lu4BwXsPSjhlQKADw26VUBATUbfAvkv2Hs8MpRmWj1YLCIaT3C3Pthzzu3xxoROCGPajXDeKCOkhZ8QkIXZUKVuCvpY+QfmDmez6V0DQDxOUf/rM5WhQDQilj65NcuOJmYWn6NZVrxVBYptGqtKc1UHOkfxHDq4BERs9Y1qKlVfNWC4Mk3u9a1ry5YQjViIQJeKKt1AuRXiuVWFUCVcchQ6xQm85FJQIJFN1RmFAn6G8Esd4zi9GexiniJD0K6ta9TwQX016VWekHC8xntQKhRKWMQWDVlbVTg+EbkxXXg0rGSU5tfBSWGWaYQ+kispBjgeiavW0DG0r3tI9tfDaI6wk/8hWDyRTOrPgFF7kCABY+rwlrCLrh+jxQFR2qTbdSTOBRuFVu3RrWCGT/kaYHsLXA1FXzo4N0UiSkGaFEhKZdzwGKBYVkWaJchjjnaY7mqZbfjtl7xYgGBpPTaJSX/18tfHXxVOVbDRsAkK8M77ouCcaDgMYAiP0Eg/EJzuMyBFRhoBRdGIf8tcuA8E4hjY1su/ufErnVFKkZNdukP9r1xiTXedger9YhBBy9KLWdqAJBPQIqSW7vIkO9hGUv14IcD3fw4pfdHQM7nma75HPvgYw2BOvV7IfBtts+dXoMlM6teX1QDJbXF3f03k0QWca4srownaXUNTGDOO0McpOvT293YbYGlFm9w8a6jDeh6nk8P9Tk2unL7WadHdEaXlgBogHUTN29H3EVAMyHBrVtOLhgRKLxKOctpbv5r0tsiZg5Iy6PHt7DPfMDsd4BOuiOLlqM9M6xgQEeYHSTEFQecY5MFc7FtLxbNxya4LubqwAozLsd3BiRUkLII0WhB7Jx8qAiL2Gv7lfJyM4A9a0n6/lGT1Mw+hfebW5StRHVvA6noy9QYatjP+qPrVwpeIRIZ6tKhstIJ6VGOt4C+GA4jOswCAAV0/l8byes0gmxiPTD5Ry8BEbPSCqVAgixLKDXKcWbPqK0ObAEKBTB3Ro1dEOIFJH+5tMbd/sD9Knj0wlVtXqf4GJTwOaB4ajTdTU0f7OjEw90hgBwbbphy47AJp9uDR80CObPDMUAMrm0tPXBEiOU5GPzuzDpTQQ6VcB4G/yhvK8WnYjJiol3Vx5kJ2Smw1x5DQUUuO1kwMQANlwzR4k4HVmO3qEANAn6CtTDsrkSAsYynkJkMYX/WCAzlx79MZkoB8M+McKAMAhM89jDrZtASIh6vR4dmXBpDr5yv3LodVSpp9m+B/VeLa4T+dYOqzQTz2WAejGPRjZbMQeAs4MkD9KlIJCjFGeUAAAAABJRU5ErkJggg==">
                                                            </label>
                                                        </div>

                                                        <div class="col-md-4 whitebac">
                                                            <label class="checkbox-inline">
                                                                <input type="hidden" name="storage{{$i}}" value="0">
                                                                <input type="checkbox" name="storage{{$i}}" id="inlineCheckbox1" value="1" @if($amenloop[3] == 1) checked @endif> Storage <img class="aiicon icon icons8-Box" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAABK0lEQVRoQ+2a2w3CMBRD3YlgA2ADNmEEYCJWgAlgI9CV2ko8IiWyQ9TI+elPr2/sk8dHO6CTMXTiA90ZeS6czDAR6c7I0pbaBOCLiI002mMm0ij4ZFsTMZFKCSSXVqV+1WX7u9mnyGZU1TPkGnzN8/MmtxEu4OJqE0lFtgdwALAtzvS94ArgDCCeOUNKJExccroWvLPLNCM1cgewHpM8FUz216tRfwRwy6QrNaI+4Ur0pEYeAFYAIs1Y38wIGqHThEg3eyQIxGkVSW4YHCOJ0GlyapFzp8qle4SaCVlsI2SA8nITkUdKCpoIGaC83ETkkZKCJkIGKC83EXmkpKCJkAHKy01EHikpaCJkgPLybCLyzpUE568Jqc8KlfrKZZNG5J3+Jbi0XzaSubwA3a5oM76yk2cAAAAASUVORK5CYII=" width="18" height="18">
                                                            </label>
                                                        </div>

                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row amenties">
                                                    <div class="col-md-12">
                                                        <div class="col-md-4 whitebac">
                                                            <label class="checkbox-inline padding-left-5">
                                                                <input type="radio" class="fur{{$i}}" name="furnishing{{$i}}" @if($looparray[5] == 'non') checked @endif id="inlineCheckbox1" value="non" > Non Furnished
                                                            </label>
                                                        </div>

                                                        <div class="col-md-4 whitebac">
                                                            <label class="checkbox-inline padding-left-5">
                                                                <input type="radio" class="fur{{$i}}" name="furnishing{{$i}}" @if($looparray[5] == 'semi') checked @endif id="inlineCheckbox1" value="semi" > Semi Furnished
                                                            </label>
                                                        </div>

                                                        <div class="col-md-4 whitebac">
                                                            <label class="checkbox-inline padding-left-5">
                                                                <input type="radio" class="fur{{$i}}" name="furnishing{{$i}}" @if($looparray[5] == 'full') checked @endif id="inlineCheckbox1" value="full" > Furnished
                                                            </label>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Save Amenities</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

        $(document).ready(function () {
            $('td').change(function () {
                var one = $('#one').val();
                var two = $('#two').val();
                var three = $('#three').val();
                var four = $('#four').val();
                var five = $('#five').val();

                var total = parseInt(one) + parseInt(two) + parseInt(three) + parseInt(four) + parseInt(five);

                $('#total').empty();
                $('#total').append(total);
                $('#t_r').val(total);

                if(one > 0) {
                    $('.rent1').prop('required',true);
                    $('.area1').prop('required',true);
                }
                if(two > 0) {
                    $('.rent2').prop('required',true);
                    $('.area2').prop('required',true);
                }
                if(three > 0) {
                    $('.rent3').prop('required',true);
                    $('.area3').prop('required',true);
                }
                if(four > 0) {
                    $('.rent4').prop('required',true);
                    $('.area4').prop('required',true);
                }
                if(five > 0) {
                    $('.rent5').prop('required',true);
                    $('.area5').prop('required',true);
                }
            });
            $('.avail').pickadate({
                min: true,
            });
        });

    </script>
    <!-- Modal -->


    @include('partials.footer')
@endsection