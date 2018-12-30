@extends('layouts.master')
@section('nav')
    @include('partials.nav')
@endsection

@section('title') {{ $user->first_name }} {{ $user->last_name }} | FindMeHome @endsection

@section('footer')
    @include('partials.footer')
@endsection
@section('content')
    <section class="aliceblue">
        <div class="container-fluid">
            <div class="tab-content">
                <div class="tab-pane fade active in" id="dashborad">
                    <div class="dashboard-tab">
                        <div class="user-details">
                            <div class="row">
                                <div class="col-md-4">
                                    @include('pages.partials.sidebar')
                                </div>
                                <div class="col-md-8">
                                    <div class="user-box user-description-box lp-border lp-border-radius-8">
                                        <h5 class="text-centered">User Profile Strength</h5>
                                        <hr>
                                        @if($user->strength == 0)
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                                    <span>0% Complete, Please Start Updating your Profile.</span>
                                                </div>
                                            </div>
                                        @else
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="{{ $user->strength }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $user->strength }}%">
                                                    {{ $user->strength }}%
                                                </div>
                                            </div>
                                        @endif

                                    </div>
                                    <form action="{{ route('user.profile-edit', $user->id) }}" method="post">
                                        {{ csrf_field() }}
                                        <div class="user-box user-description-box lp-border lp-border-radius-8">
                                            <div class="row">
                                                <div class="col-md-10 col-xs-10">
                                                    <h5 >Description</h5>
                                                </div>
                                                @if(!Auth::guest())
                                                    @if(Auth::user()->id == $user->id)
                                                        <div class="col-md-2 col-xs-2 text-right">
                                                            <button type="button" class="des-edit-1 edit-btn btn btn-xs btn-default">
                                                                Edit
                                                            </button>
                                                            <button  type="button" class="hidden des-cancel-1 edit-btn btn btn-xs btn-default">
                                                                Cancel
                                                            </button>
                                                        </div>
                                                    @endif
                                                @endif
                                            </div>

                                            <hr>
                                            @if(!Auth::guest())
                                                @if(Auth::user()->id == $user->id)
                                                    <textarea rows="5" name="description" class="hidden profile-des form-control">{{ $user->description }}</textarea>

                                                    @if($user->description == '')
                                                        <p>Please enter a short description about you. This helps to strengthen your profile strength!</p>
                                                        <button type="button" class="des-edit-1 edit-btn btn btn-sm btn-danger">
                                                            Add Description
                                                        </button>
                                                    @else
                                                        <p id="profile-p">{{ $user->description }}</p>
                                                    @endif

                                                    <div class="row">
                                                        <div class="col-md-12 text-right">
                                                            <input type="submit" class="hidden btn-1 save-btn btn btn-danger btn-sm" name="" value="Save">
                                                        </div>

                                                    </div>
                                                @else
                                                    <p id="profile-p">{{ $user->description }}</p>
                                                @endif
                                            @else
                                                <p id="profile-p">{{ $user->description }}</p>
                                            @endif
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="user-box user-description-box lp-border lp-border-radius-8">
                                                    <div class="row">
                                                        <div class="col-md-10 col-xs-10">
                                                            <h5 >Activity and education</h5>
                                                        </div>
                                                        @if(!Auth::guest())
                                                            @if(Auth::user()->id == $user->id)
                                                                <div class="col-md-2 col-xs-2 text-right">
                                                                    <button type="button" class="des-edit-2 edit-btn btn btn-xs btn-default">
                                                                        Edit
                                                                    </button>
                                                                    <button  type="button" class="hidden des-cancel-2 edit-btn btn btn-xs btn-default">
                                                                        Cancel
                                                                    </button>
                                                                </div>
                                                            @endif
                                                        @endif
                                                    </div>

                                                    <hr>
                                                    @if(!Auth::guest())
                                                        @if(Auth::user()->id == $user->id)
                                                            <div class="hidden edit-mode-1">
                                                                <label for="status">Status</label>
                                                                <select class="form-control" name="profile[activity_type]" id="status">
                                                                    <option value="">Select your Status</option>
                                                                    <option value="student" @if($user->status == 'student') selected @endif>Student</option>
                                                                    <option value="professional" @if($user->status == 'professional') selected @endif>Professional</option>
                                                                    <option value="retired" @if($user->status == 'retired') selected @endif>Retired</option>
                                                                    <option value="unemployed" @if($user->status == 'unemployed') selected @endif>Unemployed</option>
                                                                    <option value="other" @if($user->status == 'other') selected @endif>Other</option>
                                                                </select>

                                                                <label for="activity">Activity</label>
                                                                <input type="text" value="{{ $user->activity }}" class="form-control" id="activity" name="activity">


                                                                <div class="row">
                                                                    <div class="col-md-12 text-right">
                                                                        <input type="submit" class="save-btn btn btn-danger btn-sm" name="" value="Save">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endif

                                                    <div class="no-edit-mode-1">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <h5>Status</h5>
                                                                <span>{{ $user->status }}</span>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h5>Activity</h5>
                                                                <span>{{ $user->activity }}</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="user-box user-description-box lp-border lp-border-radius-8">
                                                    <div class="row">
                                                        <div class="col-md-10 col-xs-10">
                                                            <h5 >Languages</h5>
                                                        </div>
                                                        @if(!Auth::guest())
                                                            @if(Auth::user()->id == $user->id)
                                                                <div class="col-md-2 col-xs-2 text-right">
                                                                    <button type="button" class="des-edit-3 edit-btn btn btn-xs btn-default">
                                                                        Edit
                                                                    </button>
                                                                    <button type="button" class="hidden des-cancel-3 edit-btn btn btn-xs btn-default">
                                                                        Cancel
                                                                    </button>
                                                                </div>
                                                            @endif
                                                        @endif
                                                    </div>

                                                    <hr>
                                                    @if(!Auth::guest())
                                                        @if(Auth::user()->id == $user->id)
                                                            <div class="hidden edit-mode-2">
                                                                <ul class="max-h-200 overflow-y-auto lang-list">
                                                                    <?php

                                                                        $ucheckl = explode(';', $user->languages)

                                                                    ?>
                                                                    @foreach($alllanguages as $language)
                                                                        <li class="padding-top-5">
                                                                            <label>
                                                                                <input type="checkbox" name="language_ids[]" id="user_language_ids_" @if(in_array($language->id, $ucheckl) == true) checked @endif value="{{$language->id}}">
                                                                                {{ $language->language }}
                                                                            </label>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                                <div class="row">
                                                                    <div class="col-md-12 text-right">
                                                                        <input type="submit" class="save-btn btn btn-danger btn-sm" name="" value="Save">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endif

                                                    <div class="no-edit-mode-2">
                                                        <h5>Spoken language</h5>
                                                        @if($user->languages == '')
                                                            @if(!Auth::guest())
                                                                @if(Auth::user()->id == $user->id)
                                                                    <span>Choose the languages you speak!</span>
                                                                @endif
                                                            @endif
                                                            @if(Auth::guest() OR Auth::user()->id != $user->id)
                                                                <span>No Languages Choosen By user.</span>
                                                            @endif
                                                        @else
                                                            @foreach($userlanguages as $l)
                                                                <?php $i = 0; ?>
                                                                {{ $l[$i]->language }},
                                                                <?php $i++ ?>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="user-box user-description-box lp-border lp-border-radius-8">
                                                    <div class="row">
                                                        <div class="col-md-10 col-xs-10">
                                                            <h5 >About User</h5>
                                                        </div>
                                                        @if(!Auth::guest())
                                                            @if(Auth::user()->id == $user->id)
                                                                <div class="col-md-2 col-xs-2 text-right">
                                                                    <button type="button" class="des-edit-4 edit-btn btn btn-xs btn-default">
                                                                        Edit
                                                                    </button>
                                                                    <button type="button" class="hidden des-cancel-4 edit-btn btn btn-xs btn-default">
                                                                        Cancel
                                                                    </button>
                                                                </div>
                                                            @endif
                                                        @endif
                                                    </div>

                                                    <hr>
                                                    @if(!Auth::guest())
                                                        @if(Auth::user()->id == $user->id)
                                                            <div class="hidden edit-mode-3">
                                                                <div class="about-you">
                                                                    <div class="col-md-3 col-xs-6">
                                                                        <label class="margin-left30">
                                                                            <img class="icon icons8-Smoking aaicon " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAACLUlEQVRoQ+2YgU3DMBBFfycAJgAmgE5AmQCYAJgA2AAmACYAJqBMAEwATAAbUCYAvchXRVEaJxZx3ciWqrTR2fn//ved05EGMkYD4aFMJDUlYyuyLunZJWH8n8mITeRG0pmkD0m7FSKfkrYkzSS9S5pKenC/vZxjEgEkYBmoAdjy+JK0WbkHqVNHqpFMTCLnkq5dlk8aUGG/iSTi91zcvqSXJiYxiQAEYEdtMuxAQ/hOEmptp0LkWxLZ3mjrewe8VQJiKvLrgHV95qGkR0m3zm61wnRd1Fs9GgLYuGvOIlil7SgXCdRhHato8zViErmXdOxAsE+6DCrcTmUC91inSEpMImSWh6MKpC467hXw0nusolGqIUEpn8UkAhCrQnw3i2ATGmQXu1E0sBkqXUm6jE3EskqHtx5RdgzgIMT11UPOigAqj5dBxIBjExTiygfLVQcWJOOL1JpXwmUSqYLGLkaKfXDgArAgm7ra2YmnN/3Qn1IiUkcMC1LpIENn52oDspykseAkZSIGmGKAOsWmLhGxk3TRKFeBCHZ7qzlv2bG/OEmvAhFEsM1OL7JhrwHFe82qEPGeAgZFBP9VXzu9GUgsYIoi1lQSw9YNTplIajare39ZeC8T6SZ8UHRWJO+RIOP4JwVby790whHYyf43ShimF9pTavvCi3hRQCYSnLqeJmZFekps8LJZkeDU9TQxK9JTYoOXzYoEp66niVmRnhIbvGxWJDh1PU0cjCJ/T+FwijgvvDwAAAAASUVORK5CYII=" width="50" height="50">
                                                                            <br>
                                                                            <p>
                                                                                Do you
                                                                                <br>
                                                                                smoke?
                                                                            </p>
                                                                            <input type="hidden" value="0" name="profile[smoker]">
                                                                            <input @if($user->smoker == 1) checked @endif type="checkbox" value="1" name="profile[smoker]">
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-3 col-xs-6">
                                                                        <label class="margin-left30">
                                                                            <img class="icon icons8-Vegan-Food aaicon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAFSUlEQVR4Xu2aj5ENQRDG+yJABIgAESACRIAIEAEiQASIABEgAkSACBAB9VPbV11dPTM9szt3x9upenXcm53p/vrf1713JAe+jg5cf9kB2D3gwBHYQ+DAHWBPgjND4Lfzrpl3DTvyTKF2ABoecENE7orI1eXD9g8i8kpE3onIz2Gzdjw40wNQ4JyRRe9C8cciws/S+iYi9xdAOtTp3zoTAKx53Yh0TUQ+i8hDEXmWFFWfSW7v33aSANxcLHpeRH4kRcWLAAGPmLJmAUBcvxGRS0bqpyLyZPk/cU78fxSR5yLydtmLdzxwmr4WkXtTtBeZwgMQFhfH0nbh/liTBUBYN7JsFCIXZiXFrT0Axd4HyisQ2ZgGmIsGvTuLl2zuCFsD8MmUtEhYEiO5oLUIFSqFrmlhsCUAt5e4t8q9CGI6Y01KJJ6ki1xRK5stQIvfbwmAJjZvNV8OiX28gJxQWiTPr+ZLQuLysJaVB7cEoFT3UQZlLSnKgHAiVHpLAGoCUxleOkO0QPivAED3qLw9WnhA5KT/HACe+xOzvs7bPEHDQ+KMls8BX1x1URK1miGuCQElOtq1+RxAM4PCfhEOeANZvdTx1aqABYfcwh2UyaHucQQABKBGo4ilt75212o+4NUE9jnD8gAPjgIMEMjT5RW9AKA41lPr2/rs3RbBajFeq2q+pNpzSgBwHqBiCPhHamUBQGGyeBSzNtZpam65m2l2UKBnwQFsI2UpNHQbgK5UDuR77myGRRYAlI86su+LR6A4K6r5/J5wwD352VooCKXW9avQW3CX5hPLMWxIkIeqKwNARHERClfDun5FNV/36MiLmC6tEqOsKUJYIo8HopSIj8/KAODdmpJUy+AcDmgoElmG73FNwOBs8ogmrmhYkukd1Ps4z4ZGrdT+BSEDgCck2ZYWFwUEOxYrWVHLGcDaPEOI2VzQ8mifiAGaWUJxzQRAL0Up3DMDhBfUltmW8nzv80fTyBkA/HACa9HNNTOskxjhyA98SqFhHyHPYNHsPYQPLTT36Gp6UAYAz/A0hrvqbQEMvKNUzno4BHNE5PFjuOYcYRQA1QfvUCraxcAMIAitsQ/HZzUFX7yD/XhUKU80z8kAQKnzk9ooHgkNzexUiqzrZmKbPQCFt5AkAcy6eumMZg7JABDxgIzQeASg8AEMnQAR26VpEEppfuDfKK2vznqqgcqn7yJWVYGoNuNaVtgMILP3UPM9DW8auLlhkRqL2WSFaxEamtVrvHym4oQaOYiPvo/Q+5rx36yRRnJPbz3BwD2JS/3Ymf6WAFDWMAaMj3xjE69voJo0uAcAwoDLbP2uXaCxCzB8NJ6VrJR4gM0Pmjf0p+aSCFBvoDSHyIYAl/omBcFohbfO9iMe462ffpHSA0A08GiWmRFtOp/xkygej+aR4bE9AHBAdFm2OerUK7U94v5dRukFIMoFo71BSsPKpoj7p2Nfz+0FgOciYkRWpm8/yRVNqbKzg2M5RwCIEqL+rjmC2gihiJ43hx/R3aMA4H7UYU+ARgagvZhEls9MqTZJgvaQLQagPcpDsvjLE98EEfd8V3vbXLxn1AP0QITBEyJis9Xf/MHv9U2SV2SV8j1MsGapGgj6HGDwUTYXtcva7iqLVFpduhtaTEIesvyaKhAJhNAwRd+N9bh4z14SHvR3NQtdGwJe6DUD0AwAdHiQscwLlsx5qbF46iC3SQeguOjazhBXh2dQYUbHbtOSYAYcO9HRP3QqjcixMEtbXd/yZu7r2rN1CHRdfhY27wCcBSucpgy7B5wm+mfh7t0DzoIVTlOGg/eAPwQyLFDLdo10AAAAAElFTkSuQmCC" width="50" height="50">
                                                                            <br>
                                                                            <p>
                                                                                Are you
                                                                                <br>
                                                                                vegan?
                                                                            </p>
                                                                            <input type="hidden" value="0" name="profile[veg]">
                                                                            <input @if($user->veg == 1) checked @endif type="checkbox" value="1" name="profile[veg]">
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-3 col-xs-6">
                                                                        <label class="margin-left30">
                                                                           <img class="icon icons8-Dog aaicon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAADQ0lEQVRoQ+2Zi1EUQRCGfyJQIxAiQCNQI1AiECJQIlAjUCNQIlAjUCMAI0Az0Ai0Pmr6qm9q3scxe5RdRXFVO7vT3/Zzevd0S2RvMsd52P+JpN+b6DIb5G9Q/kLSRjAzQR5L+uqssBHMEkB+BJhDScMwM0FeS3ol6b0kfn+TBIyXn5I+SjqTxO+sLAHkTQC5m4Ex5T8HqC8pmpkgWOCRpCNJKJmSZ5KOJT11F5NWWgII2QqokuwHIKDuu4UrK80EsdR7L1NDLIbM9Uz/lJUulgCS08FAAUitwUrAPpf0axaI1RBS74OMT+Us4pdTh3jW6WyQ70GRke4Ei1xK+iNp30DeSnoZfPWdJPxym+JrCPuOCPUFt6LGHAOC4i+iJ7HoZOTpjfe0uE3pUdQcrMH/A4olIAQV5sHXEFLhnVB8tgXTUkNKIFgRL1q5poHQQpPP6XUIvm3DGEithlgw56BWxRQQ87UcTKO3DC3jzdJr5cSn4HjNWsYDxPc4M2BoOYgZgjYWA6lmV1uQgxl6zY030W4AYC1HCqgbhL2BIYOR0rAMrcNNSAloCMSUbr75milTQBQ9pNm1vE6zQEyHGGhnQTzQh122yJB3pHxvtmv9BxkuQtecteLHcRL8xKGJNr2215Jdi/M4Q4f4qJtkWiqIHZpQ+qpN31WL2HmFGRYuVpUei9Ra6upmmQW4EO24Fw5NWKU081q7oQek1FKPQth9sR7dJWAEJL4H/6WDPQ1NZw9UTuEbAYmDz9IkHTPXej7YTAW5mlpEr92Orpz2eqYiU0FgiM/aPl0+DGf/FhebDsKQAoW9WMrEOoC2yFQQWgaCm1ERgwsTTpgEPqOk+FoOaioISnJOSAU3sZO7loKZCkL6LQW3XWvpkaaDMMSzb+RxcPuvtbU+aToIbmIz41Rwrw2YC1G/CBAf3HFPZBZLZTfPtVUQgpjM493C6kR8yLHgJlvhYlbVDaT2/aNnr2I6T/Va5ha4DBmKN8/kG99PVXXeun3sZz3KcbIDphbwvXtlYXLf5lAOq3jBGigX91J+eu/XM2QGvtR7YemevbpAWGwfGmkI2Yg/KndOKb+e+3nTpfVeod69kjDVUWRLn7GENbcG5B+QVhJxVoGDsQAAAABJRU5ErkJggg==" width="50" height="50">
                                                                            <br>
                                                                            <p>
                                                                                Do you have
                                                                                <br>
                                                                                pets?
                                                                            </p>
                                                                            <input type="hidden" value="0" name="profile[pets]">
                                                                            <input @if($user->pets == 1) checked @endif type="checkbox" value="1" name="profile[pets]">
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-3 col-xs-6">
                                                                        <label class="margin-left30">
                                                                            <img class="icon icons8-Date-Man-Woman aaicon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAEVklEQVRoQ+2a4ZUNQRCFayNABIgAESACRIAIrAjYCBABGwEiYCNABIgAEXC+d/q+U1Overpnps/+cF7/2TMzPV19696qrpq3JzY/HpvZqZndLtO+mtlrMztvvLfm8SZbJxWLV83skwMQpwHovpn9XrPj8M4QWzUgXwqIn4WRz8X4vcLIdTMDzJ0BQIbYyoA8MbO3ZgYIJBW9jgcBAZinZvZuA5hhtjIg8tAjM/tQ2eRDM3s/gJVhtjIgf8vmr83EwA0z+17m1eTZQ9QwW/81EPR/y8x6pPUtyWyk52dm9qMkhpdmRlw9L9eeqa229mvNBTsbIStlwY62kVcW7JJLJq1oT8G+1tYsEB7KUxjgQMTzDJjC44DI2GAOqfpuguLCzEjf2ZnEumtsNYEgBTaEgWwAgk1lByIpm3evuBf/lPk4KI4ttppANAHqYUSAAAAjrbPDg5kD4UGttbVbY0vqbKVXwHAOceZkTLTeX/TcA0H3L4ph6G4NZIWEYOdja3LleSwU55bBKW+KzYN5AoLeOal7AGTGAEMGWzIoSrPgb62RlkUAgQnSKSDwLHm/RwrMRzbEDIF9Vt5tbYTnOmuIH2KwFXPskXmcTyiBY4EsNwl2FoFiQLCxpYNYwBGMm9FAspgvb9hQj9O0DPJ6UPohksMEyK/CxtJF/TpyRg8rkhR6x8tLhpwGK9SCEyA6ibdksKqBsEtVzUgKZtY0ZkiKFmLieDY/Agj7VTUw16NQMQMgq7t6mVF8TRjNgEjvre5P89Tyqm4iJXMvDpII6b1W2vQCEfswQ0zuRgaklyHNk3fJYixOBovxxjPY4C8gAUvqJV56YkUsKJkcyGsEEO8ZGeQri88qMTMCSBV0nJsxo/cF+kBeI4BgWHGh1EoQ4z3+ZulZMuPdub5HoJQk5LQDeY0C4llRGS9wSrdKzR4Y2au3msApXrYTeY0AwtcW/0XFe4/4ofTx6daXJj2yEiuz8hoBBM/z+chnK3kLL+JxscMB+MoFQY+savKayG0EENbQxpWRfAwo3frMxeZgkphaMqK89tejgGjjYsXXUwKHxHwt15N2I8gor31pNAqIP0OQCwz5QpIzA/kRK2qB19R2MXvp+mIUEDzn5VSTCxU21esaWWlNyQmmcSBMDwUiMHgJA9COxGgRYIJDjPv0FGtkFbOXd9aZD1TVVpJEqxruLWW8QRWNa2QVsxfXOAiHnbJZHfdRDh5IVkguBaKDcIusorz2jZw2i77V5CgYPZBs00uBKIa2yCrKa9/IzX3EHg0kHoZLzo/a3H1fc5lACHR67uxz6hpQZEAq7F2XeZlAapuNEm1dp+scgQzs9VsMdCWVIyNHRg5D9Sgt75NjjBxj5BJjJH7D5TMnBR9DHxF0r/ZL7ZKSw/fhvBcrba6bFXMWI2ofezajfrxnbm1OT2fZ/Lmi1jzRY2OAAg+vi5F4T//+tAWIOksKQApL+iMG1TJs0TjJftXOP9TrrPKoQ833AAAAAElFTkSuQmCC" width="50" height="50">
                                                                            <br>
                                                                            <p>
                                                                                Are you searching
                                                                                <br>
                                                                                as a couple?
                                                                            </p>
                                                                            <input type="hidden" value="0" name="profile[relationship]">
                                                                            <input @if($user->relationship == 1) checked @endif type="checkbox" value="1" name="profile[relationship]">
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 text-right">
                                                                        <input type="submit" class="save-btn btn btn-danger btn-sm" name="" value="Save">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endif

                                                    <div class="no-edit-mode-3">
                                                        <div class="about-you">
                                                            <div class="row">
                                                                <div class="col-md-3 col-xs-6">
                                                                    <label class="margin-left30">
                                                                        <!-- Smoking icon by Icons8 -->
                                                                        <img class="icon icons8-Smoking aaicon " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAACLUlEQVRoQ+2YgU3DMBBFfycAJgAmgE5AmQCYAJgA2AAmACYAJqBMAEwATAAbUCYAvchXRVEaJxZx3ciWqrTR2fn//ved05EGMkYD4aFMJDUlYyuyLunZJWH8n8mITeRG0pmkD0m7FSKfkrYkzSS9S5pKenC/vZxjEgEkYBmoAdjy+JK0WbkHqVNHqpFMTCLnkq5dlk8aUGG/iSTi91zcvqSXJiYxiQAEYEdtMuxAQ/hOEmptp0LkWxLZ3mjrewe8VQJiKvLrgHV95qGkR0m3zm61wnRd1Fs9GgLYuGvOIlil7SgXCdRhHato8zViErmXdOxAsE+6DCrcTmUC91inSEpMImSWh6MKpC467hXw0nusolGqIUEpn8UkAhCrQnw3i2ATGmQXu1E0sBkqXUm6jE3EskqHtx5RdgzgIMT11UPOigAqj5dBxIBjExTiygfLVQcWJOOL1JpXwmUSqYLGLkaKfXDgArAgm7ra2YmnN/3Qn1IiUkcMC1LpIENn52oDspykseAkZSIGmGKAOsWmLhGxk3TRKFeBCHZ7qzlv2bG/OEmvAhFEsM1OL7JhrwHFe82qEPGeAgZFBP9VXzu9GUgsYIoi1lQSw9YNTplIajare39ZeC8T6SZ8UHRWJO+RIOP4JwVby790whHYyf43ShimF9pTavvCi3hRQCYSnLqeJmZFekps8LJZkeDU9TQxK9JTYoOXzYoEp66niVmRnhIbvGxWJDh1PU0cjCJ/T+FwijgvvDwAAAAASUVORK5CYII=" width="50" height="50">
                                                                        <br>
                                                                        @if($user->smoker == 1)
                                                                            <p>Smoker</p>
                                                                        @else
                                                                            <p>Non Smoker</p>
                                                                        @endif
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-3 col-xs-6">
                                                                    <label class="margin-left30">
                                                                        <!-- Vegan Food icon by Icons8 -->
                                                                        <img class="icon icons8-Vegan-Food aaicon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAFSUlEQVR4Xu2aj5ENQRDG+yJABIgAESACRIAIEAEiQASIABEgAkSACBAB9VPbV11dPTM9szt3x9upenXcm53p/vrf1713JAe+jg5cf9kB2D3gwBHYQ+DAHWBPgjND4Lfzrpl3DTvyTKF2ABoecENE7orI1eXD9g8i8kpE3onIz2Gzdjw40wNQ4JyRRe9C8cciws/S+iYi9xdAOtTp3zoTAKx53Yh0TUQ+i8hDEXmWFFWfSW7v33aSANxcLHpeRH4kRcWLAAGPmLJmAUBcvxGRS0bqpyLyZPk/cU78fxSR5yLydtmLdzxwmr4WkXtTtBeZwgMQFhfH0nbh/liTBUBYN7JsFCIXZiXFrT0Axd4HyisQ2ZgGmIsGvTuLl2zuCFsD8MmUtEhYEiO5oLUIFSqFrmlhsCUAt5e4t8q9CGI6Y01KJJ6ki1xRK5stQIvfbwmAJjZvNV8OiX28gJxQWiTPr+ZLQuLysJaVB7cEoFT3UQZlLSnKgHAiVHpLAGoCUxleOkO0QPivAED3qLw9WnhA5KT/HACe+xOzvs7bPEHDQ+KMls8BX1x1URK1miGuCQElOtq1+RxAM4PCfhEOeANZvdTx1aqABYfcwh2UyaHucQQABKBGo4ilt75212o+4NUE9jnD8gAPjgIMEMjT5RW9AKA41lPr2/rs3RbBajFeq2q+pNpzSgBwHqBiCPhHamUBQGGyeBSzNtZpam65m2l2UKBnwQFsI2UpNHQbgK5UDuR77myGRRYAlI86su+LR6A4K6r5/J5wwD352VooCKXW9avQW3CX5hPLMWxIkIeqKwNARHERClfDun5FNV/36MiLmC6tEqOsKUJYIo8HopSIj8/KAODdmpJUy+AcDmgoElmG73FNwOBs8ogmrmhYkukd1Ps4z4ZGrdT+BSEDgCck2ZYWFwUEOxYrWVHLGcDaPEOI2VzQ8mifiAGaWUJxzQRAL0Up3DMDhBfUltmW8nzv80fTyBkA/HACa9HNNTOskxjhyA98SqFhHyHPYNHsPYQPLTT36Gp6UAYAz/A0hrvqbQEMvKNUzno4BHNE5PFjuOYcYRQA1QfvUCraxcAMIAitsQ/HZzUFX7yD/XhUKU80z8kAQKnzk9ooHgkNzexUiqzrZmKbPQCFt5AkAcy6eumMZg7JABDxgIzQeASg8AEMnQAR26VpEEppfuDfKK2vznqqgcqn7yJWVYGoNuNaVtgMILP3UPM9DW8auLlhkRqL2WSFaxEamtVrvHym4oQaOYiPvo/Q+5rx36yRRnJPbz3BwD2JS/3Ymf6WAFDWMAaMj3xjE69voJo0uAcAwoDLbP2uXaCxCzB8NJ6VrJR4gM0Pmjf0p+aSCFBvoDSHyIYAl/omBcFohbfO9iMe462ffpHSA0A08GiWmRFtOp/xkygej+aR4bE9AHBAdFm2OerUK7U94v5dRukFIMoFo71BSsPKpoj7p2Nfz+0FgOciYkRWpm8/yRVNqbKzg2M5RwCIEqL+rjmC2gihiJ43hx/R3aMA4H7UYU+ARgagvZhEls9MqTZJgvaQLQagPcpDsvjLE98EEfd8V3vbXLxn1AP0QITBEyJis9Xf/MHv9U2SV2SV8j1MsGapGgj6HGDwUTYXtcva7iqLVFpduhtaTEIesvyaKhAJhNAwRd+N9bh4z14SHvR3NQtdGwJe6DUD0AwAdHiQscwLlsx5qbF46iC3SQeguOjazhBXh2dQYUbHbtOSYAYcO9HRP3QqjcixMEtbXd/yZu7r2rN1CHRdfhY27wCcBSucpgy7B5wm+mfh7t0DzoIVTlOGg/eAPwQyLFDLdo10AAAAAElFTkSuQmCC" width="50" height="50">
                                                                        <br>
                                                                        @if($user->veg == 1)
                                                                            <p>Vegitarian</p>
                                                                        @else
                                                                            <p>Non Vegitarian</p>
                                                                        @endif
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-3 col-xs-6">
                                                                    <label class="margin-left30">
                                                                        <!-- Dog icon by Icons8 -->
                                                                        <img class="icon icons8-Dog aaicon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAADQ0lEQVRoQ+2Zi1EUQRCGfyJQIxAiQCNQI1AiECJQIlAjUCNQIlAjUCMAI0Az0Ai0Pmr6qm9q3scxe5RdRXFVO7vT3/Zzevd0S2RvMsd52P+JpN+b6DIb5G9Q/kLSRjAzQR5L+uqssBHMEkB+BJhDScMwM0FeS3ol6b0kfn+TBIyXn5I+SjqTxO+sLAHkTQC5m4Ex5T8HqC8pmpkgWOCRpCNJKJmSZ5KOJT11F5NWWgII2QqokuwHIKDuu4UrK80EsdR7L1NDLIbM9Uz/lJUulgCS08FAAUitwUrAPpf0axaI1RBS74OMT+Us4pdTh3jW6WyQ70GRke4Ei1xK+iNp30DeSnoZfPWdJPxym+JrCPuOCPUFt6LGHAOC4i+iJ7HoZOTpjfe0uE3pUdQcrMH/A4olIAQV5sHXEFLhnVB8tgXTUkNKIFgRL1q5poHQQpPP6XUIvm3DGEithlgw56BWxRQQ87UcTKO3DC3jzdJr5cSn4HjNWsYDxPc4M2BoOYgZgjYWA6lmV1uQgxl6zY030W4AYC1HCqgbhL2BIYOR0rAMrcNNSAloCMSUbr75milTQBQ9pNm1vE6zQEyHGGhnQTzQh122yJB3pHxvtmv9BxkuQtecteLHcRL8xKGJNr2215Jdi/M4Q4f4qJtkWiqIHZpQ+qpN31WL2HmFGRYuVpUei9Ra6upmmQW4EO24Fw5NWKU081q7oQek1FKPQth9sR7dJWAEJL4H/6WDPQ1NZw9UTuEbAYmDz9IkHTPXej7YTAW5mlpEr92Orpz2eqYiU0FgiM/aPl0+DGf/FhebDsKQAoW9WMrEOoC2yFQQWgaCm1ERgwsTTpgEPqOk+FoOaioISnJOSAU3sZO7loKZCkL6LQW3XWvpkaaDMMSzb+RxcPuvtbU+aToIbmIz41Rwrw2YC1G/CBAf3HFPZBZLZTfPtVUQgpjM493C6kR8yLHgJlvhYlbVDaT2/aNnr2I6T/Va5ha4DBmKN8/kG99PVXXeun3sZz3KcbIDphbwvXtlYXLf5lAOq3jBGigX91J+eu/XM2QGvtR7YemevbpAWGwfGmkI2Yg/KndOKb+e+3nTpfVeod69kjDVUWRLn7GENbcG5B+QVhJxVoGDsQAAAABJRU5ErkJggg==" width="50" height="50">
                                                                        <br>
                                                                        @if($user->pets == 1)
                                                                            <p>Have Pets</p>
                                                                        @else
                                                                            <p>Don't Have Pets</p>
                                                                        @endif
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-3 col-xs-6">
                                                                    <label class="margin-left30">
                                                                        <img class="icon icons8-Date-Man-Woman aaicon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAEVklEQVRoQ+2a4ZUNQRCFayNABIgAESACRIAIrAjYCBABGwEiYCNABIgAEXC+d/q+U1Overpnps/+cF7/2TMzPV19696qrpq3JzY/HpvZqZndLtO+mtlrMztvvLfm8SZbJxWLV83skwMQpwHovpn9XrPj8M4QWzUgXwqIn4WRz8X4vcLIdTMDzJ0BQIbYyoA8MbO3ZgYIJBW9jgcBAZinZvZuA5hhtjIg8tAjM/tQ2eRDM3s/gJVhtjIgf8vmr83EwA0z+17m1eTZQ9QwW/81EPR/y8x6pPUtyWyk52dm9qMkhpdmRlw9L9eeqa229mvNBTsbIStlwY62kVcW7JJLJq1oT8G+1tYsEB7KUxjgQMTzDJjC44DI2GAOqfpuguLCzEjf2ZnEumtsNYEgBTaEgWwAgk1lByIpm3evuBf/lPk4KI4ttppANAHqYUSAAAAjrbPDg5kD4UGttbVbY0vqbKVXwHAOceZkTLTeX/TcA0H3L4ph6G4NZIWEYOdja3LleSwU55bBKW+KzYN5AoLeOal7AGTGAEMGWzIoSrPgb62RlkUAgQnSKSDwLHm/RwrMRzbEDIF9Vt5tbYTnOmuIH2KwFXPskXmcTyiBY4EsNwl2FoFiQLCxpYNYwBGMm9FAspgvb9hQj9O0DPJ6UPohksMEyK/CxtJF/TpyRg8rkhR6x8tLhpwGK9SCEyA6ibdksKqBsEtVzUgKZtY0ZkiKFmLieDY/Agj7VTUw16NQMQMgq7t6mVF8TRjNgEjvre5P89Tyqm4iJXMvDpII6b1W2vQCEfswQ0zuRgaklyHNk3fJYixOBovxxjPY4C8gAUvqJV56YkUsKJkcyGsEEO8ZGeQri88qMTMCSBV0nJsxo/cF+kBeI4BgWHGh1EoQ4z3+ZulZMuPdub5HoJQk5LQDeY0C4llRGS9wSrdKzR4Y2au3msApXrYTeY0AwtcW/0XFe4/4ofTx6daXJj2yEiuz8hoBBM/z+chnK3kLL+JxscMB+MoFQY+savKayG0EENbQxpWRfAwo3frMxeZgkphaMqK89tejgGjjYsXXUwKHxHwt15N2I8gor31pNAqIP0OQCwz5QpIzA/kRK2qB19R2MXvp+mIUEDzn5VSTCxU21esaWWlNyQmmcSBMDwUiMHgJA9COxGgRYIJDjPv0FGtkFbOXd9aZD1TVVpJEqxruLWW8QRWNa2QVsxfXOAiHnbJZHfdRDh5IVkguBaKDcIusorz2jZw2i77V5CgYPZBs00uBKIa2yCrKa9/IzX3EHg0kHoZLzo/a3H1fc5lACHR67uxz6hpQZEAq7F2XeZlAapuNEm1dp+scgQzs9VsMdCWVIyNHRg5D9Sgt75NjjBxj5BJjJH7D5TMnBR9DHxF0r/ZL7ZKSw/fhvBcrba6bFXMWI2ofezajfrxnbm1OT2fZ/Lmi1jzRY2OAAg+vi5F4T//+tAWIOksKQApL+iMG1TJs0TjJftXOP9TrrPKoQ833AAAAAElFTkSuQmCC" width="50" height="50">
                                                                        <br>
                                                                        @if($user->relationship == 1)
                                                                            <p>Searching as couple</p>
                                                                        @else
                                                                            <p>Searching as bachelor</p>
                                                                        @endif
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
@endsection