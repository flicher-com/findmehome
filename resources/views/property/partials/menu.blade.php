<?php
    $steps = explode(',' ,$property->step_completed);
?>

<div class="row">
    <div class="col-sm-12 col-sm-offset-0">
        <div class="row wizard d-steps-newlisting">
            <a href="{{ route('property.new-listing-location', $property->id) }}">
                <div class="col-md-2 col-xs-12">
                    <span>Step 1</span>
                    <h6>Location</h6>
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </div>
            </a>
            <a href="{{ route('property.new-listing-room', $property->id) }}">
                <div class="col-md-2 col-xs-12 @if(!in_array("1", $steps)) disable-content @endif">
                    <span>Step 2</span>
                    <h6>Rooms</h6>
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </div>
            </a>

            <a href="{{ route('property.new-listing-description', $property->id) }}">
                <div class="col-md-2 col-xs-12 @if(!in_array("2", $steps)) disable-content @endif">
                    <span>Step 3</span>
                    <h6>Description</h6>
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </div>
            </a>
            @if($property->type != 'commercial-property')
            <a href="{{ route('property.new-listing-flatshare', $property->id) }}">
                <div class="col-md-2 col-xs-12 @if(!in_array("3", $steps)) disable-content @endif">
                    <span>Step 4</span>
                    <h6>Flatshare</h6>
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </div>
            </a>
            @endif
            <a href="{{ route('property.new-listing-photos', $property->id) }}">
                <div class="col-md-2 col-xs-12 @if(!in_array("4", $steps)) disable-content @endif">
                    <span>Step @if($property->type != 'commercial-property') 5 @else 4 @endif</span>
                    <h6>Pictures</h6>
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </div>
            </a>

            <a href="{{ route('property.new-listing-phone', $property->id) }}">
                <div class="col-md-2 col-xs-12 @if(!in_array("5", $steps)) disable-content @endif">
                    <span>Step @if($property->type != 'commercial-property') 6 @else 5 @endif</span>
                    <h6>Phone</h6>
                </div>
            </a>

        </div>
        <div class="row mobile-steps-newlisting">
            <div class="col-xs-10">
                <h4>Steps</h4>
                <div class="progress">
                    @if(in_array("6", $steps))
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                            <span>100% Complete (success)</span>
                        </div>
                    @elseif(in_array("5", $steps))
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 83.3%">
                            <span>83% Complete (success)</span>
                        </div>
                    @elseif(in_array("4", $steps))
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 66.6%">
                            <span>66% Complete (success)</span>
                        </div>
                    @elseif(in_array("3", $steps))
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                            <span>50% Complete (success)</span>
                        </div>
                    @elseif(in_array("2", $steps))
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 33.3%">
                            <span>33% Complete (success)</span>
                        </div>
                    @elseif(in_array("1", $steps))
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 16.6%">
                            <span>16% Complete (success)</span>
                        </div>
                    @endif

                </div>
            </div>
            <div class="col-xs-2 m-btn-steps">
                <button class="btn btn-danger btn-xs" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Steps
                </button>
            </div>
            <div class="col-xs-12">
                <div class="collapse" id="collapseExample">
                    <div class="well m-steps-details">
                        <div class="row">
                            <a href="{{ route('property.new-listing-location', $property->id) }}">
                                <div class="col-xs-6 padding-left-0 padding-right-0">
                                    <span class="m-step-node">Step 1</span><span>Location</span>
                                </div>
                            </a>
                            <a href="{{ route('property.new-listing-room', $property->id) }}">
                                <div class="col-xs-6 padding-left-0 padding-right-0 @if(!in_array("1", $steps)) disable-content @endif">
                                    <span class="m-step-node">Step 2</span><span>Rooms</span>
                                </div>
                            </a>
                        </div>
                        <hr>
                        <div class="row">
                            <a href="{{ route('property.new-listing-description', $property->id) }}">
                                <div class="col-xs-6 padding-left-0 padding-right-0 @if(!in_array("2", $steps)) disable-content @endif">
                                    <span class="m-step-node">Step 3</span><span>Description</span>
                                </div>
                            </a>
                            <a href="{{ route('property.new-listing-flatshare', $property->id) }}">
                                <div class="col-xs-6 padding-left-0 padding-right-0 @if(!in_array("3", $steps)) disable-content @endif">
                                    <span class="m-step-node">Step 4</span><span>Flatshare</span>
                                </div>
                            </a>
                        </div>
                        <hr>
                        <div class="row">
                            <a href="{{ route('property.new-listing-photos', $property->id) }}">
                                <div class="col-xs-6 padding-left-0 padding-right-0 @if(!in_array("4", $steps)) disable-content @endif">
                                    <span class="m-step-node">Step 5</span><span>Photos</span>
                                </div>
                            </a>
                            <a href="{{ route('property.new-listing-phone', $property->id) }}">
                                <div class="col-xs-6 padding-left-0 padding-right-0 @if(!in_array("5", $steps)) disable-content @endif">
                                    <span class="m-step-node">Step 6</span><span>Phone</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>