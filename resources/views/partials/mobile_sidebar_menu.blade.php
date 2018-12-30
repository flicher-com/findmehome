<li><a href="/">
        <i class="glyphicon glyphicon-home"></i>
        Home</a>
</li>
<li><a href="/search?type=any">
        <i class="fa fa-search" aria-hidden="true"></i>
        Search a Place</a>
</li>
<li><a href="/search?type=commercial-property">
        <i class="fa fa-search" aria-hidden="true"></i>
        Search Commercial Property</a>
</li>

@if(Auth::guest())
    <li><a href="/login/">
            <i class="fa fa-sign-in" aria-hidden="true"></i>
            Login</a>
    </li>
    <li><a href="/register/">
            <i class="fa fa-user-plus" aria-hidden="true"></i>
            Register</a>
    </li>
@else
    <li class="{{ Request::is('user/'.Auth::user()->id) ? 'active' : '' }}">
        <a href="/user/{{Auth::user()->id}}">
            <i class="glyphicon glyphicon-user"></i>
            Profile </a>
    </li>
    <li class="{{ Request::is('verifications') ? 'active' : '' }}">
        <a href="{{ route('user.verifications') }}">
            <i class="glyphicon glyphicon-ok"></i>
            Verifications </a>
    </li>
    <li class="{{ Request::is('user/'.Auth::user()->id.'/listing') ? 'active' : '' }}">
        <a href="{{ route('user.listing', Auth::user()->id) }}">
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
        <a href="/user/{{Auth::user()->id}}/favourites">
            <i class="fa fa-heart" aria-hidden="true"></i>
            Your Favourites </a>
    </li>--}}
    <li><a href="/logout">
            <i class="fa fa-sign-out" aria-hidden="true"></i>
            Logout</a>
    </li>
@endif