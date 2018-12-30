@if($country == 'ca')
    @if($property->type == 'house' || $property->type == 'town-house' || $property->type == 'multi-unit-house' || $property->type == 'main-floor' || $property->type == 'basement' || $property->type == 'private-room' || $property->type == 'shared-room' || $property->type == 'duplex' || $property->type == 'apartment'|| $property->type == 'condo'|| $property->type == 'studio'|| $property->type == 'loft')
        @include('property.allinoneproperty')
    @endif
@elseif($country == 'in')
    @if($property->type == 'house')
        @include('property.partials.room')
    @endif
    @if($property->type == 'pg')
        @include('property.partials.pgroom')
    @endif
@endif

@if($property->type == 'commercial-property')
    @include('property.partials.commercial')
@endif