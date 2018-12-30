@extends('layouts.master')
@section('nav')
    @include('partials.nav')
@endsection

@section('title') Commercial Property | FindMeHome @endsection

@section('content')
    <div class="aliceblue">
        <div class="container">
            @include('property.partials.menu')
            <div class="row">
                <form action="{{ route('property.new-listing-commercial-post', $property->id) }}" method="post">
                    {{ csrf_field() }}
                    <div class="col-md-12 wiz-content">
                        @include('errors.error')
                        <div class="row">
                            <div class="col-md-4">
                                <h4>Property Type</h4>
                                <select class="form-control" name="type" required>
                                    <option value="">Select type of Commercial Property</option>
                                    <option @if($commercial->type == 'Shop') selected="selected" @endif value="shop">Shop</option>
                                    <option @if($commercial->type == 'office') selected="selected" @endif value="office">Office</option>
                                    <option @if($commercial->type == 'shared-office') selected="selected" @endif value="shared-office">Shared Office</option>
                                    <option @if($commercial->type == 'space-in-retail-mall') selected="selected" @endif value="space-in-retail-mall">Space in Retail Mall</option>
                                    <option @if($commercial->type == 'factory') selected="selected" @endif value="factory">Factory</option>
                                    <option @if($commercial->type == 'warehouse') selected="selected" @endif value="warehouse">Warehouse</option>
                                    <option @if($commercial->type == 'medical') selected="selected" @endif value="medical">Medical</option>
                                    <option @if($commercial->type == 'other') selected="selected" @endif value="other">Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-xs-12">
                                <h5>Total Plot Area</h5>
                                <div class="col-md-9 padding-left-0 col-xs-7 areano">
                                    <input required type="number" name="total_area" min="10" value="{{ $commercial->total_area  }}" class="form-control t_area" placeholder="area" aria-describedby="basic-addon2">
                                </div>
                                <div class="col-md-3 col-xs-5 padding-right-0 areaunit">
                                    <select class="form-control padding-right-0" name="total_unit" required>
                                        <option @if($commercial->total_area_unit == 'ft') selected="selected" @endif value="ft" >ft<sup>2</sup></option>
                                        <option @if($commercial->total_area_unit == 'm') selected="selected" @endif value="m" >m<sup>2</sup></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <h5>Build up Area</h5>
                                <div class="col-md-9 padding-left-0 col-xs-7 areano">
                                    <input required type="number" name="buildup_area" min="10" value="{{ $commercial->build_up_area  }}" class="form-control b_area" placeholder="area" aria-describedby="basic-addon2">
                                </div>
                                <div class="col-md-3 col-xs-5 padding-right-0 areaunit">
                                    <select class="form-control padding-right-0" name="buildup_unit" required>
                                        <option @if($commercial->build_up_area_unit == 'ft') selected="selected" @endif value="ft" >ft<sup>2</sup></option>
                                        <option @if($commercial->build_up_area_unit == 'm') selected="selected" @endif value="m" >m<sup>2</sup></option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-xs-12">
                                <h5>Year Build</h5>
                                <select id="" name="year_build" required class="form-control">
                                    <option value="">Select Year Build</option>
                                    <option @if($commercial->year_build == '2017') selected="selected" @endif value="2017">2017</option>
                                    <option @if($commercial->year_build == '2016') selected="selected" @endif value="2016">2016</option>
                                    <option @if($commercial->year_build == '2015') selected="selected" @endif value="2015">2015</option>
                                    <option @if($commercial->year_build == '2014') selected="selected" @endif value="2014">2014</option>
                                    <option @if($commercial->year_build == '2013') selected="selected" @endif value="2013">2013</option>
                                    <option @if($commercial->year_build == '2012') selected="selected" @endif value="2012">2012</option>
                                    <option @if($commercial->year_build == '2011') selected="selected" @endif value="2011">2011</option>
                                    <option @if($commercial->year_build == '2010') selected="selected" @endif value="2010">2010</option>
                                    <option @if($commercial->year_build == '2009') selected="selected" @endif value="2009">2009</option>
                                    <option @if($commercial->year_build == '2008') selected="selected" @endif value="2008">2008</option>
                                    <option @if($commercial->year_build == '2007') selected="selected" @endif value="2007">2007</option>
                                    <option @if($commercial->year_build == '2006') selected="selected" @endif value="2006">2006</option>
                                    <option @if($commercial->year_build == '2005') selected="selected" @endif value="2005">2005</option>
                                    <option @if($commercial->year_build == '2004') selected="selected" @endif value="2004">2004</option>
                                    <option @if($commercial->year_build == '2003') selected="selected" @endif value="2003">2003</option>
                                    <option @if($commercial->year_build == '2002') selected="selected" @endif value="2002">2002</option>
                                    <option @if($commercial->year_build == '2001') selected="selected" @endif value="2001">2001</option>
                                    <option @if($commercial->year_build == '2000') selected="selected" @endif value="2000">2000</option>
                                    <option @if($commercial->year_build == '1999') selected="selected" @endif value="1999">1999</option>
                                    <option @if($commercial->year_build == '1998') selected="selected" @endif value="1998">1998</option>
                                    <option @if($commercial->year_build == '1997') selected="selected" @endif value="1997">1997</option>
                                    <option @if($commercial->year_build == '1996') selected="selected" @endif value="1996">1996</option>
                                    <option @if($commercial->year_build == '1995') selected="selected" @endif value="1995">1995</option>
                                    <option @if($commercial->year_build == '1994') selected="selected" @endif value="1994">1994</option>
                                    <option @if($commercial->year_build == '1993') selected="selected" @endif value="1993">1993</option>
                                    <option @if($commercial->year_build == '1992') selected="selected" @endif value="1992">1992</option>
                                    <option @if($commercial->year_build == '1991') selected="selected" @endif value="1991">1991</option>
                                    <option @if($commercial->year_build == '1990') selected="selected" @endif value="1990">1990</option>
                                    <option @if($commercial->year_build == '1989') selected="selected" @endif value="1989">1989</option>
                                    <option @if($commercial->year_build == '1988') selected="selected" @endif value="1988">1988</option>
                                    <option @if($commercial->year_build == '1987') selected="selected" @endif value="1987">1987</option>
                                    <option @if($commercial->year_build == '1986') selected="selected" @endif value="1986">1986</option>
                                    <option @if($commercial->year_build == '1985') selected="selected" @endif value="1985">1985</option>
                                    <option @if($commercial->year_build == '1984') selected="selected" @endif value="1984">1984</option>
                                    <option @if($commercial->year_build == '1983') selected="selected" @endif value="1983">1983</option>
                                    <option @if($commercial->year_build == '1982') selected="selected" @endif value="1982">1982</option>
                                    <option @if($commercial->year_build == '1981') selected="selected" @endif value="1981">1981</option>
                                    <option @if($commercial->year_build == '1980') selected="selected" @endif value="1980">1980</option>
                                    <option @if($commercial->year_build == '1979') selected="selected" @endif value="1979">1979</option>
                                    <option @if($commercial->year_build == '1978') selected="selected" @endif value="1978">1978</option>
                                    <option @if($commercial->year_build == '1977') selected="selected" @endif value="1977">1977</option>
                                    <option @if($commercial->year_build == '1976') selected="selected" @endif value="1976">1976</option>
                                    <option @if($commercial->year_build == '1975') selected="selected" @endif value="1975">1975</option>
                                    <option @if($commercial->year_build == '1974') selected="selected" @endif value="1974">1974</option>
                                    <option @if($commercial->year_build == '1973') selected="selected" @endif value="1973">1973</option>
                                    <option @if($commercial->year_build == '1972') selected="selected" @endif value="1972">1972</option>
                                    <option @if($commercial->year_build == '1971') selected="selected" @endif value="1971">1971</option>
                                    <option @if($commercial->year_build == '1970') selected="selected" @endif value="1970">1970</option>
                                    <option @if($commercial->year_build == '1969') selected="selected" @endif value="1969">1969</option>
                                    <option @if($commercial->year_build == '1968') selected="selected" @endif value="1968">1968</option>
                                    <option @if($commercial->year_build == '1967') selected="selected" @endif value="1967">1967</option>
                                    <option @if($commercial->year_build == '1966') selected="selected" @endif value="1966">1966</option>
                                    <option @if($commercial->year_build == '1965') selected="selected" @endif value="1965">1965</option>
                                    <option @if($commercial->year_build == '1964') selected="selected" @endif value="1964">1964</option>
                                    <option @if($commercial->year_build == '1963') selected="selected" @endif value="1963">1963</option>
                                    <option @if($commercial->year_build == '1962') selected="selected" @endif value="1962">1962</option>
                                    <option @if($commercial->year_build == '1961') selected="selected" @endif value="1961">1961</option>
                                    <option @if($commercial->year_build == '1960') selected="selected" @endif value="1960">1960</option>
                                    <option @if($commercial->year_build == '1959') selected="selected" @endif value="1959">1959</option>
                                    <option @if($commercial->year_build == '1958') selected="selected" @endif value="1958">1958</option>
                                    <option @if($commercial->year_build == '1957') selected="selected" @endif value="1957">1957</option>
                                    <option @if($commercial->year_build == '1956') selected="selected" @endif value="1956">1956</option>
                                    <option @if($commercial->year_build == '1955') selected="selected" @endif value="1955">1955</option>
                                    <option @if($commercial->year_build == '1954') selected="selected" @endif value="1954">1954</option>
                                    <option @if($commercial->year_build == '1953') selected="selected" @endif value="1953">1953</option>
                                    <option @if($commercial->year_build == '1952') selected="selected" @endif value="1952">1952</option>
                                    <option @if($commercial->year_build == '1951') selected="selected" @endif value="1951">1951</option>
                                    <option @if($commercial->year_build == '1950') selected="selected" @endif value="1950">1950</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <h5>Year Renovated</h5>
                                <select id="" name="year_renovated" required class="form-control">
                                    <option value="">Select Year Renovated</option>
                                    <option @if($commercial->year_renovated == '2017') selected="selected" @endif value="2017">2017</option>
                                    <option @if($commercial->year_renovated == '2016') selected="selected" @endif value="2016">2016</option>
                                    <option @if($commercial->year_renovated == '2015') selected="selected" @endif value="2015">2015</option>
                                    <option @if($commercial->year_renovated == '2014') selected="selected" @endif value="2014">2014</option>
                                    <option @if($commercial->year_renovated == '2013') selected="selected" @endif value="2013">2013</option>
                                    <option @if($commercial->year_renovated == '2012') selected="selected" @endif value="2012">2012</option>
                                    <option @if($commercial->year_renovated == '2011') selected="selected" @endif value="2011">2011</option>
                                    <option @if($commercial->year_renovated == '2010') selected="selected" @endif value="2010">2010</option>
                                    <option @if($commercial->year_renovated == '2009') selected="selected" @endif value="2009">2009</option>
                                    <option @if($commercial->year_renovated == '2008') selected="selected" @endif value="2008">2008</option>
                                    <option @if($commercial->year_renovated == '2007') selected="selected" @endif value="2007">2007</option>
                                    <option @if($commercial->year_renovated == '2006') selected="selected" @endif value="2006">2006</option>
                                    <option @if($commercial->year_renovated == '2005') selected="selected" @endif value="2005">2005</option>
                                    <option @if($commercial->year_renovated == '2004') selected="selected" @endif value="2004">2004</option>
                                    <option @if($commercial->year_renovated == '2003') selected="selected" @endif value="2003">2003</option>
                                    <option @if($commercial->year_renovated == '2002') selected="selected" @endif value="2002">2002</option>
                                    <option @if($commercial->year_renovated == '2001') selected="selected" @endif value="2001">2001</option>
                                    <option @if($commercial->year_renovated == '2000') selected="selected" @endif value="2000">2000</option>
                                    <option @if($commercial->year_renovated == '1999') selected="selected" @endif value="1999">1999</option>
                                    <option @if($commercial->year_renovated == '1998') selected="selected" @endif value="1998">1998</option>
                                    <option @if($commercial->year_renovated == '1997') selected="selected" @endif value="1997">1997</option>
                                    <option @if($commercial->year_renovated == '1996') selected="selected" @endif value="1996">1996</option>
                                    <option @if($commercial->year_renovated == '1995') selected="selected" @endif value="1995">1995</option>
                                    <option @if($commercial->year_renovated == '1994') selected="selected" @endif value="1994">1994</option>
                                    <option @if($commercial->year_renovated == '1993') selected="selected" @endif value="1993">1993</option>
                                    <option @if($commercial->year_renovated == '1992') selected="selected" @endif value="1992">1992</option>
                                    <option @if($commercial->year_renovated == '1991') selected="selected" @endif value="1991">1991</option>
                                    <option @if($commercial->year_renovated == '1990') selected="selected" @endif value="1990">1990</option>
                                    <option @if($commercial->year_renovated == '1989') selected="selected" @endif value="1989">1989</option>
                                    <option @if($commercial->year_renovated == '1988') selected="selected" @endif value="1988">1988</option>
                                    <option @if($commercial->year_renovated == '1987') selected="selected" @endif value="1987">1987</option>
                                    <option @if($commercial->year_renovated == '1986') selected="selected" @endif value="1986">1986</option>
                                    <option @if($commercial->year_renovated == '1985') selected="selected" @endif value="1985">1985</option>
                                    <option @if($commercial->year_renovated == '1984') selected="selected" @endif value="1984">1984</option>
                                    <option @if($commercial->year_renovated == '1983') selected="selected" @endif value="1983">1983</option>
                                    <option @if($commercial->year_renovated == '1982') selected="selected" @endif value="1982">1982</option>
                                    <option @if($commercial->year_renovated == '1981') selected="selected" @endif value="1981">1981</option>
                                    <option @if($commercial->year_renovated == '1980') selected="selected" @endif value="1980">1980</option>
                                    <option @if($commercial->year_renovated == '1979') selected="selected" @endif value="1979">1979</option>
                                    <option @if($commercial->year_renovated == '1978') selected="selected" @endif value="1978">1978</option>
                                    <option @if($commercial->year_renovated == '1977') selected="selected" @endif value="1977">1977</option>
                                    <option @if($commercial->year_renovated == '1976') selected="selected" @endif value="1976">1976</option>
                                    <option @if($commercial->year_renovated == '1975') selected="selected" @endif value="1975">1975</option>
                                    <option @if($commercial->year_renovated == '1974') selected="selected" @endif value="1974">1974</option>
                                    <option @if($commercial->year_renovated == '1973') selected="selected" @endif value="1973">1973</option>
                                    <option @if($commercial->year_renovated == '1972') selected="selected" @endif value="1972">1972</option>
                                    <option @if($commercial->year_renovated == '1971') selected="selected" @endif value="1971">1971</option>
                                    <option @if($commercial->year_renovated == '1970') selected="selected" @endif value="1970">1970</option>
                                    <option @if($commercial->year_renovated == '1969') selected="selected" @endif value="1969">1969</option>
                                    <option @if($commercial->year_renovated == '1968') selected="selected" @endif value="1968">1968</option>
                                    <option @if($commercial->year_renovated == '1967') selected="selected" @endif value="1967">1967</option>
                                    <option @if($commercial->year_renovated == '1966') selected="selected" @endif value="1966">1966</option>
                                    <option @if($commercial->year_renovated == '1965') selected="selected" @endif value="1965">1965</option>
                                    <option @if($commercial->year_renovated == '1964') selected="selected" @endif value="1964">1964</option>
                                    <option @if($commercial->year_renovated == '1963') selected="selected" @endif value="1963">1963</option>
                                    <option @if($commercial->year_renovated == '1962') selected="selected" @endif value="1962">1962</option>
                                    <option @if($commercial->year_renovated == '1961') selected="selected" @endif value="1961">1961</option>
                                    <option @if($commercial->year_renovated == '1960') selected="selected" @endif value="1960">1960</option>
                                    <option @if($commercial->year_renovated == '1959') selected="selected" @endif value="1959">1959</option>
                                    <option @if($commercial->year_renovated == '1958') selected="selected" @endif value="1958">1958</option>
                                    <option @if($commercial->year_renovated == '1957') selected="selected" @endif value="1957">1957</option>
                                    <option @if($commercial->year_renovated == '1956') selected="selected" @endif value="1956">1956</option>
                                    <option @if($commercial->year_renovated == '1955') selected="selected" @endif value="1955">1955</option>
                                    <option @if($commercial->year_renovated == '1954') selected="selected" @endif value="1954">1954</option>
                                    <option @if($commercial->year_renovated == '1953') selected="selected" @endif value="1953">1953</option>
                                    <option @if($commercial->year_renovated == '1952') selected="selected" @endif value="1952">1952</option>
                                    <option @if($commercial->year_renovated == '1951') selected="selected" @endif value="1951">1951</option>
                                    <option @if($commercial->year_renovated == '1950') selected="selected" @endif value="1950">1950</option>
                                </select>
                            </div>
                        </div>

                        <?php
                        if($country == 'ca') {
                            $currency = '&#36;';
                        } elseif($country == 'in') {
                            $currency = '&#8377;';
                        }
                        ?>

                        <div class="row">
                            <div class="col-md-4 col-xs-12">
                                <h5>Rent per month</h5>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">{{ $currency }}</span>
                                    <input type="number" name="rent" class="form-control rent1" min="100" value="{{ $commercial->rent }}" placeholder="Rent" aria-describedby="basic-addon1" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <h5>Deposit</h5>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">{{ $currency }}</span>
                                    <input type="number" name="deposit" class="form-control rent1" min="100" value="{{ $commercial->deposit }}" placeholder="Deposit" aria-describedby="basic-addon1" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-xs-12">
                                <h5>Construction Status</h5>
                                <select class="form-control" name="construction_status" required>
                                    <option value="">Select Construction Status</option>
                                    <option @if($commercial->construction_status == 'Under Construction') selected="selected" @endif value="Under Construction">Under Construction</option>
                                    <option @if($commercial->construction_status == 'Ready to move') selected="selected" @endif value="Ready to move">Ready to move</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <h5>Minimun Term</h5>
                                <select class="form-control" name="min_term">
                                    <option @if($commercial->min_term == 1) selected="selected" @endif value="1">1 month</option>
                                    <option @if($commercial->min_term == 2) selected="selected" @endif value="2">2 months</option>
                                    <option @if($commercial->min_term == 3) selected="selected" @endif value="3">3 months</option>
                                    <option @if($commercial->min_term == 4) selected="selected" @endif value="4">4 months</option>
                                    <option @if($commercial->min_term == 5) selected="selected" @endif value="5">5 months</option>
                                    <option @if($commercial->min_term == 6) selected="selected" @endif value="6">6 months</option>
                                    <option @if($commercial->min_term == 7) selected="selected" @endif value="7">7 months</option>
                                    <option @if($commercial->min_term == 8) selected="selected" @endif value="8">8 months</option>
                                    <option @if($commercial->min_term == 9) selected="selected" @endif value="9">9 months</option>
                                    <option @if($commercial->min_term == 10) selected="selected" @endif value="10">10 months</option>
                                    <option @if($commercial->min_term == 11) selected="selected" @endif value="11">11 months</option>
                                    <option @if($commercial->min_term == 12) selected="selected" @endif value="12">12 months</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 col-xs-4">
                                <h5>Multiple Units?</h5>
                                <label class="checkbox-inline">
                                    <input @if($commercial->multi_properties != 0) checked @endif type="checkbox" id="multiple_units" value="option1"> Yes
                                </label>
                            </div>
                            <div class="col-md-2 col-xs-8 @if($commercial->multi_properties == 0) hidden @endif  mul_unit">
                                <h5>Number of Units</h5>
                                <input type="number" name="multi_units" value="{{ $commercial->multi_properties }}" class="form-control multi_unit">
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('property.new-listing-location', $property->id) }}">
                        <button class="btn btn-lg btn-success">Previous</button>
                    </a>

                    <button type="submit" class="btn btn-lg btn-danger btn-right btn-sub">Save & Continue</button>
                </form>
            </div>
        </div>
    </div>
    @include('partials.footer')

    <script>
        $('#multiple_units').change(function() {
            if($(this).is(":checked")) {
                $('.mul_unit').removeClass('hidden');
                $('.multi_unit').prop('min', 2);
            } else {
                $('.mul_unit').addClass('hidden');
                $('.multi_unit').prop('min', 0);
            }
        });
        $('.t_area').change(function () {
            $('.b_area').prop('max', $('.t_area').val());
        });
    </script>

@endsection