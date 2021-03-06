<!-- Vendor -->
<script src="{{ asset( 'website/porto/vendor/jquery/jquery.min.js' ) }}"></script>
<script src="{{ asset( 'website/porto/vendor/jquery.appear/jquery.appear.min.js' ) }}"></script>
<script src="{{ asset( 'website/porto/vendor/jquery.easing/jquery.easing.min.js' ) }}"></script>
<script src="{{ asset( 'website/porto/vendor/jquery.cookie/jquery.cookie.min.js' ) }}"></script>
<script src="{{ asset( 'website/porto/vendor/popper/umd/popper.min.js' ) }}"></script>
<script src="{{ asset( 'website/porto/vendor/bootstrap/js/bootstrap.min.js' ) }}"></script>
<script src="{{ asset( 'website/porto/vendor/common/common.min.js' ) }}"></script>
<script src="{{ asset( 'website/porto/vendor/jquery.validation/jquery.validate.min.js' ) }}"></script>
<script src="{{ asset( 'website/porto/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js' ) }}"></script>
{{-- <script src="{{ asset( 'website/porto/vendor/jquery.gmap/jquery.gmap.min.js' ) }}"></script> --}}
<script src="{{ asset( 'website/porto/vendor/jquery.lazyload/jquery.lazyload.min.js' ) }}"></script>
<script src="{{ asset( 'website/porto/vendor/isotope/jquery.isotope.min.js' ) }}"></script>
<script src="{{ asset( 'website/porto/vendor/owl.carousel/owl.carousel.min.js' ) }}"></script>
<script src="{{ asset( 'website/porto/vendor/magnific-popup/jquery.magnific-popup.min.js' ) }}"></script>
<script src="{{ asset( 'website/porto/vendor/vide/jquery.vide.min.js' ) }}"></script>
<script src="{{ asset( 'website/porto/vendor/vivus/vivus.min.js' ) }}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{ asset( 'website/porto/js/theme.js' ) }}"></script>

<!-- Current Page Vendor and Views -->

<script src="{{ asset( 'website/porto/js/views/view.contact.js' ) }}"></script>

<!-- Theme Custom -->
<script src="{{ asset( 'website/porto/js/custom.js' ) }}"></script>


<!-- Theme Initialization Files -->
<script src="{{ asset( 'website/porto/js/theme.init.js' ) }}"></script>

<!-- Examples -->
<script src="{{ asset( 'website/porto/js/examples/examples.portfolio.js' ) }}"></script>

{{-- <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-12345678-1', 'auto');
    ga('send', 'pageview');
</script>
 --> --}}

{{-- <script src="{{ asset( 'website/porto/https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY' ) }}"></script>
<script>

    /*
    Map Settings

        Find the Latitude and Longitude of your address:
            - https://www.latlong.net/
            - http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

    */

    // Map Markers
    var mapMarkers = [{
        address: "New York, NY 10017",
        html: "<strong>New York Office</strong><br>New York, NY 10017<br><br><a href='#' onclick='mapCenterAt({latitude: 40.75198, longitude: -73.96978, zoom: 16}, event)'>[+] zoom here</a>",
        icon: {
            image: "img/pin.png",
            iconsize: [26, 46],
            iconanchor: [12, 46]
        }
    }];

    // Map Initial Location
    var initLatitude = 40.75198;
    var initLongitude = -73.96978;

    // Map Extended Settings
    var mapSettings = {
        controls: {
            draggable: (($.browser.mobile) ? false : true),
            panControl: true,
            zoomControl: true,
            mapTypeControl: true,
            scaleControl: true,
            streetViewControl: true,
            overviewMapControl: true
        },
        scrollwheel: false,
        markers: mapMarkers,
        latitude: initLatitude,
        longitude: initLongitude,
        zoom: 5
    };

    var map = $('#googlemaps').gMap(mapSettings),
        mapRef = $('#googlemaps').data('gMap.reference');

    // Map text-center At
    var mapCenterAt = function(options, e) {
        e.preventDefault();
        $('#googlemaps').gMap("centerAt", options);
    }

    // Styles from https://snazzymaps.com/
    var styles = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}];

    var styledMap = new google.maps.StyledMapType(styles, {
        name: 'Styled Map'
    });

    mapRef.mapTypes.set('map_style', styledMap);
    mapRef.setMapTypeId('map_style');

</script> --}}

@yield( 'footer-scripts' )
