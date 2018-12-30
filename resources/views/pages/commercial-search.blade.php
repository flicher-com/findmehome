@extends('layouts.master')
@section('nav')
    @include('partials.fixednav')
@endsection

@section('title') Search | FindMeHome @endsection

@section('content')

    <div class="map-view map-visible">
        <div class="aliceblue-search ">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <span class="results-count"></span> results found
                    </div>
                    <div class="col-md-7 padding-right-0">
                        <span>Sort by: </span>
                        <label class="radio-inline">
                            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> &#8377; Price Low to High
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> &#8377; Price High to Low
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> Best Match
                        </label>
                    </div>
                    <div class="col-md-2">
                        {{--<button type="button" class="btn btn-default btn-sm filters-btn" data-toggle="modal" data-target="#myModal">
                            Filters
                        </button>--}}

                        <button class="btn btn-sm btn-default list-view-btn"><i class="fa fa-map-marker"></i> List View</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid padding-top-40">
            <div class="col-md-8 m-map">
                <div class="sidebar-searchmap">
                    <div id='search-map'></div>
                </div>
            </div>

            <div class="col-md-4 col-xs-12">
                {{--<div class="lp-list-view d-listing">
                    <div class="lp-list-view-inner-contianer lp-border lp-border-radius-8 clearfix">
                        <div class="lp-list-view-thumb lp-map-view-thumb">
                            <div class="lp-list-view-thumb-inner">
                                <img src="/images/icon_size/panda.jpg"  alt="list-1" />
                                <div class="rentmap">
                                    <span>Rent</span>
                                </div>
                            </div>
                        </div>
                        <div class="lp-list-view-content map-content listing-map">
                            <div class="lp-list-view-content-upper map-listing-content">
                                <h5>titile</h5>
                                <ul class="lp-grid-box-price">
                                    <li><strong>Adddress: bla bla bla</strong></li>
                                </ul>
                            </div>
                        </div>
                        --}}{{--<div class="pull-right listing-price">
                            <span></span>
                        </div>--}}{{--
                    </div>
                </div>--}}
                <div class="map-listings">

                </div>
            </div>
        </div>
    </div>

    <form action="" class="m-filters-id filters-id hidden" id="m-ffff">
        <div class="m-filters ">
            <div class="aliceblue-mobile m-filter-bar margin-bottom-15">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6 ">
                            <button type="button" class="btn btn-xs btn-danger btn-back-filters">Back</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="col-xs-12 mobile-filters">
                    <?php
                    $useragent=$_SERVER['HTTP_USER_AGENT'];
                    ?>
                    @if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
                        @include('pages.partials.commercial-search-filters')
                    @endif
                </div>
            </div>
        </div>
    </form>

    <div id="search-wrapper" class="">
        <div class="aliceblue-search d-sort-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <span class="results-count"></span> results found Comm
                    </div>
                    <div class="col-md-8 padding-right-0">
                        <span>Sort by: </span>
                        <label class="radio-inline">
                            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> &#8377; Price Low to High
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> &#8377; Price High to Low
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> Best Match
                        </label>
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-sm btn-default map-view-btn"><i class="fa fa-map-marker"></i> Map View</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="aliceblue-mobile m-sort-bar">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <span class="results-count"></span> results found
                    </div>
                    <div class="col-xs-6 ">
                        <button class="btn btn-xs btn-danger pull-right btn-filters">Filters</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="container padding-top-50">
            <form action="" class="filters-id d-filters">
                <div class="col-md-3 desktop-filters {{--sidebar-scroll--}}">
                    @if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
                    @else
                        @include('pages.partials.commercial-search-filters')
                    @endif
                </div>
            </form>

            <div class="col-md-9">
                {{--<div class="col-md-4 col-sm-6 lp-grid-box-contianer lp-grid-box-contianer1" data-title="The Dorchester grill" data-reviews="4" data-number="+007-123-4567-89" data-email="jhonruss@example.com" data-website="www.example.com" data-price="$200" data-pricetext="Text about your price" data-description="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi archeum" data-userimage="/assets/images/user-thumb-94x94.png" data-username="Jhon Russel" data-userlisting="14" data-fb="www.facebook.com" data-gplus="www.plus.google.com" data-linkedin="www.linkedin.com" data-instagram="www.instagram.com" data-twitter="www.twitter.com" data-lattitue="40.6700" data-longitute="-73.9400"  data-posturl="post-detail.html" data-authorurl="author.html">
                    <div class="lp-grid-box lp-border lp-border-radius-8">
                        <div class="lp-grid-box-thumb-container" >
                            <div class="lp-grid-box-thumb">
                                <div class="col-md-4 property-type">
                                    <span >House</span>
                                </div>
                                <div class="col-md-2 fav">
                                    <a href="#" >
                                        <i class="fa fa-star-o" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Please Enter your Whole address"></i>
                                    </a>
                                </div>
                                <img class="img-responsive" src="/images/icon_size/panda.jpg" alt="grid-1" />
                                <div class="col-md-6 rentcc">
                                    <span > testtesttest</span>
                                </div>
                            </div><!-- ../grid-box-thumb -->
                            <div class="lp-grid-box-quick">
                                <ul class="lp-post-quick-links">
                                    <li>
                                        <a class="icon-quick-eye md-trigger" data-modal="modal-2"><i class="fa fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div><!-- ../grid-box-quick-->
                        </div>
                        <div class="lp-grid-box-description ">
                            <h4 class="lp-h4">
                                <a href="post-detail.html">
                                    Ayishiyana PG
                                </a>
                            </h4>
                            <p>
                                <i class="fa fa-map-marker"></i>
                                <span>Brighton, The City of Brighton</span>
                            </p>
                        </div><!-- ../grid-box-description-->
                    </div><!-- ../grid-box -->
                </div>--}}
                {{--<div class="lp-list-view">
                    <div class="lp-list-view-inner-contianer lp-border lp-border-radius-8 clearfix">
                        <div class="lp-list-view-thumb lp-map-view-thumb">
                            <div class="lp-list-view-thumb-inner">
                                <img src="/images/icon_size/panda.jpg"  alt="list-1" />
                                <div class="rentmap">
                                    <span>Rent</span>
                                </div>
                            </div>
                        </div>
                        <div class="lp-list-view-content map-content listing-map">
                            <div class="lp-list-view-content-upper map-listing-content">
                                <h5>titile</h5>
                                <ul class="lp-grid-box-price">
                                    <li><strong>Adddress: bla bla bla</strong></li>
                                </ul>
                            </div>
                        </div>
                        <div class="pull-right listing-price">
                            <span></span>
                        </div>
                    </div>
                </div>--}}
                <div class="listings">

                </div>
                <div class="map-listings mobile-listings">

                </div>
            </div>
        </div>
    </div>

    {{--<!-- Modal -->
    <div class="modal fade filter-model" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Filters</h4>
                </div>
                <div class="modal-body">
                    <form action="" class="filters-id">
                        @include('pages.partials.search-filters')
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>--}}

    <input type="hidden" id="csrf-token" name="_token" value="{{ csrf_token() }}">
    <script>
        /*$("#searchform").submit(function (e){
         e.preventDefault();
         showMarkers();
         initMap();
         });*/

        var map, autocomplete;
        var mapview = 0;
        var markers = [];
        function initMap() {

            map = new google.maps.Map(document.getElementById('search-map'), {
                //center: {lat: 30.900965, lng: 75.8572758},
                //center: {lat: 52.52321320000002, lng: 13.38801060000002},
                zoom: 14
            });
            initAutocomplete();
            var geocoder = new google.maps.Geocoder();
            geocodeAddress(geocoder, map);

            google.maps.event.addListener(map, 'idle', showMarkers);
        }

        function initAutocomplete() {
            // Create the autocomplete object, restricting the search to geographical
            // location types.

            var input = (document.getElementById('address'));
            var options = {
                types: ['(cities)'],
                componentRestrictions: {country: "IN"}
            };
            autocomplete = new google.maps.places.Autocomplete(input, options);

        }

        function geocodeAddress(geocoder, resultsMap) {
            var address = document.getElementById('address').value;
            geocoder.geocode({'address': address}, function(results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                    resultsMap.setCenter(results[0].geometry.location);
                } else {
                    //alert('Geocode was not successful for the following reason: ' + status);
                }
            });
        }

        /*function geolocate() {
         if (navigator.geolocation) {
         navigator.geolocation.getCurrentPosition(function(position) {
         var geolocation = {
         lat: position.coords.latitude,
         lng: position.coords.longitude
         };
         var circle = new google.maps.Circle({
         center: geolocation,
         radius: position.coords.accuracy
         });
         autocomplete.setBounds(circle.getBounds());
         });
         }
         }*/


        function showMarkers() {
            var properties = [];
            var address1 = $('.address').val();
            var bounds = map.getBounds();
            var southWest = bounds.getSouthWest();
            var northEast = bounds.getNorthEast();
            var amenities = $('#amenities-id:checked').map(function() {return this.value;}).get().join(',');
            var type = 'commercial-property';
            var commercial_type = $('.commercial-type:checked').map(function() {return this.value;}).get().join(',');
            var postedby = $('.posted-by:checked').map(function() {return this.value;}).get().join(',');
            var min = $('.min').val();
            var max = $('.max').val();

            $('.listings').empty();
            $('.listings').text('Loading....');

            $(".map-listings").empty();
            $(".map-listings").text('Loading....');


            // Call you server with ajax passing it the bounds
            $.ajax({
                url: '/search',
                cache: false,
                data: {
                    'fromlat': southWest.lat(),
                    'tolat': northEast.lat(),
                    'fromlng': southWest.lng(),
                    'tolng': northEast.lng(),
                    'amenities': amenities,
                    'type': type,
                    'commercial-type': commercial_type,
                    'address': address1,
                    'mapview': mapview,
                    'min': min,
                    'max': max,
                    'postedby': postedby,
                },

                dataType: 'json',
                type: 'GET',
                success : function(response){
                    properties = response.properties;
                    var rent = response.rent;
                    location1(properties);
                    addcards(properties, rent);
                    $(".results-count").empty();
                    $(".results-count").append(properties.length);
                }
            });
            window.history.pushState("jj",
                "Title", "/search?address="+address1
                +"&type="+type
                +"&commercial-type="+commercial_type
                +"&min="+min
                +"&max="+max
                +"&fromlat="+southWest.lat()
                +"&tolat="+northEast.lat()
                +"&fromlng="+southWest.lng()
                +"&tolng="+northEast.lng()
                +"&amenities="+amenities
                +"&postedby="+postedby
                +"mapview="+mapview
            );
        }


        function location1(properties) {
            setMapOnAll(null);
            markers = [];

            var i;

            for (i = 0; i < properties.length; i++) {
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(properties[i].lat, properties[i].long),
                    map: map,
                });
                markers.push(marker);
            }
        }

        function setMapOnAll(map) {
            for (var i = 0; i < markers.length; i++) {
                markers[i].setMap(map);
            }
        }

        function addcards(properties, rent) {
            var card = "";
            var map_card = "";
            $('.listings').empty();
            $('.map-listings').empty();

            if(properties.length == 0) {
                $('.listings').empty();
                $('.listings').text('No Results Found! Try Clearing some filters.');

                $('.map-listings').empty();
                $('.map-listings').append('<div style="height:150px"><span>No Results Found! Try Clearing some filters.</span></div>');
            }

            for (var i = 0; i < properties.length; i++) {
                //console.log(properties[i].long);
                card = '<div class="col-md-4 col-lg-4 col-sm-6 lp-grid-box-contianer card10" data-title="Buy now 10 shots" data-reviews="3" data-number="+001-587-4567-89" data-email="russel@example.com" data-website="www.example.com" data-price="$50" data-pricetext="Text about your price" data-description="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi archeum" data-userimage="images/user-thumb-94x94.png" data-username="Jhon Russel" data-userlisting="14" data-fb="www.facebook.com" data-gplus="www.plus.google.com" data-linkedin="www.linkedin.com" data-instagram="www.instagram.com" data-twitter="www.twitter.com" data-lattitue="51.516576" data-longitute="-0.137508" data-id="10"  data-posturl="post-detail.html" data-authorurl="author.html">'+
                    '<div class="lp-grid-box lp-border lp-border-radius-8">'+
                    '<div class="lp-grid-box-thumb-container">'+
                    '<div class="lp-grid-box-thumb">'+
                    '<div class="col-md-4 property-type">'+
                    '<span >'+properties[i].commercial.type+'</span>'+
                    '</div>'+
                    '<div class="col-md-2 fav">'+
                    '<a href="#" >'+
                    '<i class="fa fa-star-o" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Like"></i>'+
                    '</a>'+
                    '</div>'+
                    '<img class="img-responsive" src="/images/icon_size/'+properties[i].main_pic+'" alt="grid-11" />'+
                    '<div class="rentcc">'+
                    '<span>'+rent[i]+'</span>'+
                    '</div>'+
                    '</div>'+
                    '<div class="lp-grid-box-quick">'+
                    '<ul class="lp-post-quick-links">'+
                    '<li>'+
                    '<a class="icon-quick-eye md-trigger" data-modal="modal-'+i+'"><i class="fa fa-eye"></i></a>'+
                    '</li>'+
                    '</ul>'+
                    '</div>'+
                    '</div>'+
                    '<div class="lp-grid-box-description ">'+
                    '<h4 class="lp-h4">'+
                    '<a href="/listing/'+properties[i].id+'">'+properties[i].commercial.type;

                card += '</a>'+
                    '</h4>'+
                    '<p>'+
                    '<i class="fa fa-map-marker"></i> '+
                    '<span>';
                var loc = properties[i].locality+', '+properties[i].city;
                card += loc.substr(0, 25)+'..</span>'+
                    '</p>'+
                    '</div>'+
                    '</div>'+
                    '</div>'
                ;
                $(".listings").append(card);


                map_card =  '<a href="/listing/'+properties[i].id+'">'
                    +'<div class="lp-list-view margin-bottom-15">'
                    +'<div class="lp-list-view-inner-contianer lp-border-radius-8 clearfix">'
                    +'<div class="lp-list-view-thumb lp-map-view-thumb">'
                    +'<div class="lp-list-view-thumb-inner">'
                    +'<img src="/images/icon_size/'+properties[i].main_pic+'"  alt="list-1" />'
                    +'<div class="rentmap">'
                    +'<span>'+rent[i]+'</span>'
                    +'</div>'
                    +'</div>'
                    +'</div>'
                    +'<div class="lp-list-view-content map-content listing-map">'
                    +'<div class="lp-list-view-content-upper map-listing-content">'
                    +'<h5>'+properties[i].type+'</h5>'
                    +'<ul class="lp-grid-box-price">'
                    +'<li><strong>'+properties[i].locality+', '+properties[i].city+'</strong></li>'
                    +'</ul>'
                    +'</div>'
                    +'</div>'
                    +'</div>'
                    +'</div>'
                    +'</a>'
                    +'<hr>';

                $(".map-listings").append(map_card);

            }
        }
        $('.map-view-btn').click(function () {
            $('#search-wrapper').addClass('hidden');
            $('.map-view').removeClass('map-visible');
            /* $('.listings').addClass('hidden');
             $('.map-listings').removeClass('hidden');*/
            mapview = 1;
            showMarkers();
            google.maps.event.trigger(map, "resize");
        });

        $('.list-view-btn').click(function () {
            $('.map-view').addClass('map-visible');
            $('#search-wrapper').removeClass('hidden');
            /*$('.listings').removeClass('hidden');
             $('.map-listings').addClass('hidden');*/
            mapview = 0;
            showMarkers();
        });

        $('.btn-filters').click(function () {
            $('.m-filters-id').removeClass("hidden");

            $('#search-wrapper').addClass('hidden');
        });

        $('.btn-back-filters').click(function () {
            $('.m-filters-id').addClass("hidden");

            $('#search-wrapper').removeClass('hidden');
        });

        $(document).ready(function() {
            $(".btn-nav-search").click(function() {
                initMap();
            });

            $(".filters-id :input").change(function() {
                showMarkers();
            });
        });
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent)) {
            $('.m-search-bar').append(
                '<input type="text" class="form-control address" value="{{ $address }}" name="address" id="address" placeholder="City">'
                +'<span class="input-group-btn">'
                +'<button class="btn btn-default btn-nav-search" type="button">Search</button>'
                +'</span>'
            );
            //$('.desktop-filters').empty();

        } else {
            $('.d-search-bar').append(
                '<input type="text" class="form-control address" value="{{ $address }}" name="address" id="address" placeholder="City">'
                +'<span class="input-group-btn">'
                +'<button class="btn btn-default btn-nav-search" type="button">Search</button>'
                +'</span>'
            );
            //$('.mobile-filters').empty();
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQ97y1KBDy6WEN_gilUACseXKMT5T6k-U&libraries=places&callback=initMap">
    </script>

@endsection