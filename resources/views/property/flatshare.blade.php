@extends('layouts.master')
@section('nav')
    @include('partials.nav')
@endsection

@section('title') Restrictions | FindMeHome @endsection

@section('content')
    <section class="aliceblue">
        <div class="container">
            @include('property.partials.menu')

            <div class="row">
                <div class="col-sm-12 col-sm-offset-0">
                    <div class="row">
                        <form action="{{ route('property.new-listing-flatshare-post', $property->id) }}" method="post" onkeypress="return event.keyCode != 13;">
                            {{ csrf_field() }}
                            <div class="col-md-12 wiz-content">
                                @include('errors.error')
                                <div class="row">
                                    <div class="col-md-2">
                                        <h4>Restrictions</h4>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-default btn-xs dontmind">
                                            Don't Mind
                                        </button>
                                    </div>
                                </div>
                                <div class="row amenties">
                                    <div class="col-md-12">
                                        <div class="col-md-3 col-xs-6 whitebac">
                                            <label class="checkbox-inline">
                                                <input type="hidden" name="flatshare[no_smokers]" value="0">
                                                <input type="checkbox" name="flatshare[no_smokers]"  @if($flatshare->no_smokers == 1) checked @endif value="1"> No smokers 
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-xs-6 whitebac">
                                            <label class="checkbox-inline">
                                                <input type="hidden" name="flatshare[no_alcholic]" value="0">
                                                <input type="checkbox" name="flatshare[no_alcholic]" value="1" @if($flatshare->no_alcholic == 1) checked @endif> No Alcholic
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-xs-6 whitebac">
                                            <label class="checkbox-inline">
                                                <input type="hidden" name="flatshare[vegans]" value="0">
                                                <input type="checkbox" name="flatshare[vegans]" value="1" @if($flatshare->vegans == 1) checked @endif> Vegans only
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-xs-6 whitebac">
                                            <label class="checkbox-inline">
                                                <input type="hidden" name="flatshare[no_commercial]" value="0">
                                                <input type="checkbox" name="flatshare[no_commercial]" value="1" @if($flatshare->no_commercial == 1) checked @endif> No Commercial Use
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-xs-6 whitebac">
                                            <label class="checkbox-inline">
                                                <input type="hidden" name="flatshare[no_pets]" value="0">
                                                <input type="checkbox" name="flatshare[no_pets]" value="1" @if($flatshare->no_pets == 1) checked @endif> No pets 
                                            </label>
                                        </div>
                                        
                                    </div>
                                </div>

                                <hr>
                                <div class="row">
                                    <div class="col-md-2">
                                        <h4>Available for</h4>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-default btn-xs anyperson">
                                            Any
                                        </button>
                                    </div>
                                </div>
                                <div class="row amenties">
                                    <div class="col-md-12">
                                        <div class="col-md-3 col-xs-6 whitebac">
                                            <label class="checkbox-inline">
                                                <input type="hidden" name="ideal[men]" value="0">
                                                <input type="checkbox" class="anybtn" name="ideal[men]" id="inlineCheckbox1" value="1" @if($ideal->men == 1 || $ideal->first_time == 1) checked @endif> Men only
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-xs-6 whitebac">
                                            <label class="checkbox-inline">
                                                <input type="hidden" name="ideal[women]" value="0">
                                                <input type="checkbox" class="anybtn" name="ideal[women]"  @if($ideal->women == 1 || $ideal->first_time == 1) checked @endif value="1"> Women only
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-xs-6 whitebac">
                                            <label class="checkbox-inline">
                                                <input type="hidden" name="ideal[student]" value="0">
                                                <input type="checkbox" class="anybtn" name="ideal[student]" value="1" @if($ideal->student == 1 || $ideal->first_time == 1) checked @endif> Students only
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-xs-6 whitebac">
                                            <label class="checkbox-inline">
                                                <input type="hidden" name="ideal[seniors]" value="0">
                                                <input type="checkbox" class="anybtn" name="ideal[seniors]" value="1" @if($ideal->seniors == 1 || $ideal->first_time == 1) checked @endif> Seniors only
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-xs-6 whitebac">
                                            <label class="checkbox-inline">
                                                <input type="hidden" name="ideal[professionals]" value="0">
                                                <input type="checkbox" class="anybtn" name="ideal[professionals]" value="1" @if($ideal->professionals == 1 || $ideal->first_time == 1) checked @endif> Professionals only
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-xs-6 whitebac">
                                            <label class="checkbox-inline">
                                                <input type="hidden" name="ideal[couples]" value="0">
                                                <input type="checkbox" class="anybtn" name="ideal[couples]" value="1" @if($ideal->couples == 1 || $ideal->first_time == 1) checked @endif> Couples only
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-xs-6 whitebac">
                                            <label class="checkbox-inline">
                                                <input type="hidden" name="ideal[bachelors]" value="0">
                                                <input type="checkbox" class="anybtn" name="ideal[bachelors]" value="1" @if($ideal->bachelors == 1 || $ideal->first_time == 1) checked @endif> Bachelors only
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5>Ideal age</h5>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <span>Min age</span>
                                    <span class="rightmax">Max age</span>

                                    <input name="age" id="range_48" />

                                    <div class="demo-big__extra">
                                        <b id="result_48"></b>
                                    </div>

                                    <script>
                                        $(document).ready(function () {
                                            var $range = $("#range_48"),
                                                    $result = $("#result_48");


                                            $range.ionRangeSlider({
                                                type: "double",
                                                min: 0,
                                                max: 120,
                                                from: {{ $ideal->min_age }},
                                                to: {{ $ideal->max_age }},
                                                step: 2
                                            });

                                            $range.on("change", track);
                                        });
                                    </script>
                                </div>

                            </div>

                            <a href="{{ route('property.new-listing-description', $property->id) }}">
                                <button type="button" class="btn btn-lg btn-success">Previous</button>
                            </a>
                            <button class="btn btn-lg btn-danger btn-right">Save & Continue</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>

        $('.anyperson').on('click', function () {
            $('.anybtn').attr('checked', 'checked');
        });

    </script>
    @include('partials.footer')

@endsection