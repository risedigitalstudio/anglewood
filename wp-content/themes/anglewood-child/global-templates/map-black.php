<section class="home-contact black">
    <div class="container-fluid mx-0 px-0">
        <div class="row">
            <div class="col-md-7">
                <div id="map" style="width: 100%; height: 500px; color: #000;"></div>
            </div>
            <div class="col-md-5">
                <div class="home-contact-info">
                    <h2 class="pb-3">Get in Touch</h2>
                    <p>
                        <span>
                            <i class="fa fa-map-marker"></i>810 Flint Rd, Toronto, ON M3J 2J5
                        </span>
                        <span>
                            <i class="fa fa-mobile"></i><a href="tel:647-717-9792">647-717-9792</a>
                        </span>
                        <span>
                            <i class="fa fa-envelope"></i><a href="mailto:contact@anglewood.ca">contact@anglewood.ca</a>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>



    <script>
      var app = {};
        
        
        
        app.loadMap = function () {
                var mapOptions = {
                    center: {lat: 43.775320, lng: -79.481200},
                    scrollwheel: false,
                    zoom: 14,
                    styles: [
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#bdbdbd"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dadada"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#cddff4"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#cddff4"
      }
    ]
  }
]
                }
                var mapDiv = document.getElementById('map');
                app.map = new google.maps.Map(mapDiv, mapOptions);
        } 
        
        app.loadMarkers = function () {

            var iconBase = 'http://localhost/anglewood/wp-content/themes/anglewood-child/img/marker.png';
            
            var home = new google.maps.Marker({
                position: new google.maps.LatLng(43.775320, -79.481200),
                map: app.map,
                icon: iconBase
            });

            // create a new info window
            var infowindow = new google.maps.InfoWindow();

            google.maps.event.addListener(home, 'click', function () {
                // set the content and open the window
                infowindow.setContent("<p class='g-map-marker'><strong>Anglewood Furniture, Inc.</strong><br>810 Flint Rd,<br>Toronto, ON M3J 2J5</p>");
                infowindow.open(app.map, home);
            });


        }

        
      function initMap() {
        app.loadMap();
        app.loadMarkers();
      }
        

    </script>
    
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClcWKw5sqTBoz2fPf1_LSV9v_po6GPuFo&callback=initMap"
  type="text/javascript"></script>




