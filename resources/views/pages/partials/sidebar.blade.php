
<div class="user-portfolio lp-border lp-border-radius-8 ">
    <div class="user-info">
        
        <div class="user-thumb">
            @if(!Auth::guest())
                @if(Auth::user()->id == $user->id)
                    <button class="btn btn-xs btn-default profile-edit">Edit</button>
                    <button class="btn btn-xs btn-default profile-cancel hidden">Cancel</button>
                @endif
            @endif

            @if(substr($user->avatar, 0, 4) == 'http')
                <img class="profile-pic" src="{{ $user->avatar }}" alt="user-thumb" />
            @else
                <img class="profile-pic" src="/{{ $user->avatar }}" alt="user-thumb" />
            @endif
            @if(!Auth::guest())
                @if(Auth::user()->id == $user->id)
                     <form enctype="multipart/form-data" action="{{ route('user.profile-pic') }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <span class="btn btn-sm hidden editbtn">Edit</span>
                        <input type="file" id="user-pic" name="avatar" style="display: none;">
                    </form>
                @endif
            @endif
        </div>
        <div class="user-text">
            @if(!Auth::guest())
                @if(Auth::user()->id == $user->id)
                    <form method="post" action="{{ route('user.profile-gender-dob') }}">
                    {{ csrf_field() }}
                    <h5 class="profile-elements hidden">Gender</h5>
                    <label class="radio-inline rb-profile profile-elements hidden">
                        <input class="profile-elements hidden" type="radio" name="gender" @if($user->gender == 'male') checked @endif id="inlineRadio1" value="male"> Male
                    </label>
                    <label class="radio-inline rb-profile profile-elements hidden">
                        <input class="profile-elements hidden" type="radio" name="gender" @if($user->gender == 'female') checked @endif id="inlineRadio2" value="female"> Female
                    </label>
                    <label class="radio-inline rb-profile profile-elements hidden">
                        <input class="profile-elements hidden" type="radio" name="gender" @if($user->gender == 'other') checked @endif id="inlineRadio3" value="other"> Other
                    </label>
                    <br>
                    <label class="profile-elements hidden">D.O.B.</label>
                    <input type="date" value="{{ $user->dob }}"  class="profile-dob form-control profile-elements hidden" name="dob">

                    <input type="submit" class="btn btn-xs btn-primary profile-elements profile-save hidden" value="Save" name="">
                </form>
                @endif
            @endif
            <h5 class="user-name margin-top-0">{{ $user->first_name }} {{ $user->last_name }}</h5>

            @if($user->dob == '0000-00-00')
                @if(!Auth::guest())
                    @if(Auth::user()->id == $user->id)
                        <span class="user-name"><strong>Age: </strong>{!!  $age = 'Please Update Age!' !!}</span>
                    @endif
                @endif
            @else
                <span class="user-name"><strong>Age: </strong>{{ $user->age }}</span>
            @endif
            <!-- 
            <label class="user-position">14 Listings</label> -->
            
        </div>
    </div><!-- ../user-info -->
</div>
@if(!Auth::guest())
    @if(Auth::user()->id == $user->id)
        <div class="profile-sidebar">
            <div class="profile-usermenu">
                <ul class="nav">
                    <li class="{{ Request::is('user/'.$user->id) ? 'active' : '' }}">
                        <a href="/user/{{$user->id}}">
                            <i class="glyphicon glyphicon-user"></i>
                            Profile </a>
                    </li>
                    <li class="{{ Request::is('verifications') ? 'active' : '' }}">
                        <a href="{{ route('user.verifications') }}">
                            <i class="glyphicon glyphicon-ok"></i>
                            Verifications </a>
                    </li>
                    <li class="{{ Request::is('user/'.$user->id.'/listing') ? 'active' : '' }}">
                        <a href="{{ route('user.listing', $user->id) }}">
                            <i class="glyphicon glyphicon-home"></i>
                            Listings </a>
                    </li>
                    <li class="{{ Request::is('account') ? 'active' : '' }}">
                        <a href="{{ route('user.account') }}">
                            <i class="glyphicon glyphicon-cog"></i>
                            Account </a>
                    </li>
                    <li class="{{ Request::is('new') ? 'active' : '' }}">
                        <a href="/new">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            Add new Listing </a>
                    </li>
                    {{--<li class="{{ Request::is('user/1/favourites') ? 'active' : '' }}">
                        <a href="/user/{{$user->id}}/favourites">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                            Your Favourites </a>
                    </li>--}}
                </ul>
            </div>
         </div>
    @endif
@endif

@if(Auth::guest() OR Auth::user()->id != $user->id)
    <div class="profile-sidebar">
        <div class="profile-usermenu">
            <ul class="nav">
                <li class="{{ Request::is('user/1') ? 'active' : '' }}">
                    <a href="/user/{{$user->id}}">
                        <i class="glyphicon glyphicon-user"></i>
                        Profile </a>
                </li>
                <li class="{{ Request::is('user/1/listing') ? 'active' : '' }}">
                    <a href="{{ route('user.listing', $user->id) }}">
                        <i class="glyphicon glyphicon-home"></i>
                        Listings </a>
                </li>
            </ul>
        </div>
    </div>
@endif
<br>
@if(!Auth::guest())
    @if(Auth::user()->id == $user->id)
    <div class="profile-sidebar">
        <div class="profile-usermenu">
            <ul class="nav">
                <li class="">
                    <a href="{{ route('user.verifications') }}">
                        @if($user->email_verified == 1)<i class="fa fa-check-circle" aria-hidden="true"></i> @else <i class="fa fa-times-circle" aria-hidden="true"></i> @endif
                        ID Verified</a>
                </li>
                <li class="">
                    <a href="{{ route('user.verifications') }}">
                        @if($user->email_verified == 1)<i class="fa fa-check-circle" aria-hidden="true"></i> @else <i class="fa fa-times-circle" aria-hidden="true"></i> @endif
                        Email Verified</a>
                </li>
                <li class="">
                    <a href="{{ route('user.verifications') }}">
                        @if($user->phone_verified == 1)<i class="fa fa-check-circle" aria-hidden="true"></i> @else <i class="fa fa-times-circle" aria-hidden="true"></i> @endif
                        Phone Verified </a>
                </li>
            </ul>
        </div>
    </div>
    @endif
@endif
@if(Auth::guest() OR Auth::user()->id != $user->id)
    <div class="profile-sidebar">
        <div class="profile-usermenu">
            <ul class="nav">
                <li class="">
                    <a href="#">
                        @if($user->email_verified == 1)<i class="fa fa-check-circle" aria-hidden="true"></i> @else <i class="fa fa-times-circle" aria-hidden="true"></i> @endif
                        ID Verified</a>
                </li>
                <li class="">
                    <a href="#">
                        @if($user->email_verified == 1)<i class="fa fa-check-circle" aria-hidden="true"></i> @else <i class="fa fa-times-circle" aria-hidden="true"></i> @endif
                        Email Verified</a>
                </li>
                <li class="">
                    <a href="#">
                        @if($user->phone_verified == 1)<i class="fa fa-check-circle" aria-hidden="true"></i> @else <i class="fa fa-times-circle" aria-hidden="true"></i> @endif
                        Phone Verified </a>
                </li>
            </ul>
        </div>
    </div>
@endif
  <script>
    $(document).ready(function(){
        // Mouse Over Avatar
        $(".user-thumb img").mouseover(function(){
            $(".profile-pic").addClass("profile-black");
            $(".editbtn").removeClass("hidden");
        });
        // Mouse Over Avatar
        $(".editbtn").mouseover(function(){
            $(".profile-pic").addClass("profile-black");
            $(".editbtn").removeClass("hidden");
        });
        // Mouse Out Avatar
        $(".user-thumb img").mouseout(function(){
            $(".profile-pic").removeClass("profile-black");
            $(".editbtn").addClass("hidden");
        });
        // Trigger Browse Button
        $(".editbtn").click(function(){
            $("#user-pic").trigger("click");
        });
        // Trigger Submit Button
        $("input[name='avatar']").change(function() {
            this.form.submit();
        });
        // Profile Edit Button
        $(".profile-edit").click(function() {
            // Avatar Edit Button Show
            $(".profile-edit").addClass("hidden");
            $(".profile-cancel").removeClass("hidden");
            
            // Image
            $(".profile-pic").addClass("profile-black");
            $(".editbtn").removeClass("hidden");

            // Hide Name
            $(".user-name").addClass("hidden");

            // Show Input Elements
            $(".profile-elements").removeClass("hidden");
        });

        // Profile Edit Cancel Button
        $(".profile-cancel").click(function() {
            // Avatar Edit Button Show Hide
            $(".profile-edit").removeClass("hidden");
            $(".profile-cancel").addClass("hidden");
            
            // Image
            $(".profile-pic").removeClass("profile-black");
            $(".editbtn").addClass("hidden");

            // Hide Name
            $(".user-name").removeClass("hidden");

            // Show Input Elements
            $(".profile-elements").addClass("hidden");
        });
    });
 </script>
 