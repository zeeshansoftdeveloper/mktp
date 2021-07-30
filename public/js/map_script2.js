var map = null;
var radius_circle;
var markers_on_map = [];
var geocoder;
var infowindow;

//all_locations is just a sample, you will probably load those from database
var all_locations = [
    {type: "Restaurant", name: "Restaurant 1", lat: 40.723080, lng: -73.984340},
    {type: "Restaurant", name: "Restaurant 2", lat: 40.721819, lng: -73.991358},
];

var myPlace = {lat: 25.276987, lng: 55.296249 };

function callback(results, status) {
    if (status === google.maps.places.PlacesServiceStatus.OK) {
        for (var i = 0; i < results.length; i++) {
            createMarker(results[i]);
        }
    }
}

function setMapOnAll(map) {
    for (var i = 0; i < markers_on_map.length; i++) {
        markers_on_map[i].setMap(map);
    }
}

function clearMarkers() {
     for (var i = 0; i < markers_on_map.length; i++) {
        markers_on_map[i].setMap(null);
    }
}

function createMarker(place) {
    var placeLoc = place.geometry.location;
    var marker = new google.maps.Marker({
        map : map,
        position : place.geometry.location
    });

    markers_on_map.push(marker);

    google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent(place.name);
        infowindow.open(map, this);
    });
}

function initialize(){
    var address = document.getElementById('address');  
    var address2 = document.getElementById('address').value;  
    var radius_km = document.getElementById('radius_km').value;

    var autocomplete = new google.maps.places.Autocomplete(address);
    
    var latlng = new google.maps.LatLng(40.723080, -73.984340); //you can use any location as center on map startup
    var myOptions = {
        zoom: 15,
        center: latlng,
        mapTypeControl: true,
        mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
        navigationControl: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);       

    geocoder = new google.maps.Geocoder();

    if (geocoder) {
        geocoder.geocode({
          'address': address2
        }, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
            if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
              map.setCenter(results[0].geometry.location);


              var service = new google.maps.places.PlacesService(map);
                service.nearbySearch({
                    location : results[0].geometry.location,
                    radius : radius_km * 1000,
                    type : [ 'restaurant' ]
                }, callback);
    
              var infowindow = new google.maps.InfoWindow({
                content: '<b>' + address2 + '</b>',
                size: new google.maps.Size(150, 50)
              });
    
              var marker = new google.maps.Marker({
                position: results[0].geometry.location,
                map: map,
                title: address2
              });
              google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map, marker);
              });
    
            } else {
              alert("No results found");
            }
          } else {
            alert("Geocode was not successful for the following reason: " + status);
          }
        });
      }
    google.maps.event.addListener(map, 'click', function(){
        if(infowindow){
            infowindow.setMap(null);
            infowindow = null;
        }
    });
}

function showCloseLocations() {
    var i;
    var radius_km = $('#radius_km').val();
    var address = $('#address').val();

    //remove all radii and markers from map before displaying new ones
    if (radius_circle) {
        radius_circle.setMap(null);
        radius_circle = null;
    }
    for (i = 0; i < markers_on_map.length; i++) {
        if (markers_on_map[i]) {
            markers_on_map[i].setMap(null);
            markers_on_map[i] = null;
        }
    }

    if (geocoder) {
        geocoder.geocode({'address': address}, function (results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
                    var address_lat_lng = results[0].geometry.location;

                    var service = new google.maps.places.PlacesService(map);

                    console.log(results[0].geometry.location);

                    var requestRestaurant = {
                        location: results[0].geometry.location,
                        radius: radius_km * 1000,
                        type: [ 'restaurant' ]
                    };

                    var requestShop = {
                        location: results[0].geometry.location,
                        radius: radius_km * 1000,
                        type: [ 'shop' ]
                    };

                    var requestCafe = {
                        location: results[0].geometry.location,
                        radius: radius_km * 1000,
                        type: [ 'cafe' ]
                    };

                        service.nearbySearch(requestRestaurant, callback);
                        service.nearbySearch(requestShop, callback);
                        service.nearbySearch(requestCafe, callback);                       

                        radius_circle = new google.maps.Circle({
                            center: address_lat_lng,
                            radius: radius_km * 1000,
                            clickable: false,
                            map: map
                        });
                    if (radius_circle) map.fitBounds(radius_circle.getBounds());
                    for (var j = 0; j < all_locations.length; j++) {
                        (function (location) {
                            var marker_lat_lng = new google.maps.LatLng(location.lat, location.lng);
                            var distance_from_location = google.maps.geometry.spherical.computeDistanceBetween(address_lat_lng, marker_lat_lng); //distance in meters between your location and the marker
                            if (distance_from_location <= radius_km * 1000) {
                                    var new_marker = new google.maps.Marker({
                                        position: marker_lat_lng,
                                        map: map,
                                        title: location.name
                                    });                                     
                                    google.maps.event.addListener(new_marker, 'click', function () {
                                        if(infowindow){
                                            infowindow.setMap(null);
                                            infowindow = null;
                                        }
                                                infowindow = new google.maps.InfoWindow({ 
                                                    content: '<div style="color:red">'+location.name +'</div>' + " is " + distance_from_location + " meters from my location",
                                                    size: new google.maps.Size(150,50),
                                                    pixelOffset: new google.maps.Size(0, -30),
                                                    position: marker_lat_lng, map: map
                                                });
                                    });
                    
                                markers_on_map.push(new_marker);
                        }
                        })(all_locations[j]);
                    }
                } else {
                    alert("No results found while geocoding!");
                }
            } else {
                alert("Geocode was not successful: " + status);
            }
        });
    }
}