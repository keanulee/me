function initializeMap() {
  var mapOptions = {
    zoom: 3,
    center: new google.maps.LatLng(45, -100),
    mapTypeId: google.maps.MapTypeId.TERRAIN
  };

  var map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

  $.getJSON('js/places.json', function(data) {

    // Each region refers to a geoJSON file that contains polygon data
    $.each(data.regions, function(index, name) {
      var filename = 'js/geo-json/countries/'+name+'.geo.json';

      $.getJSON(filename, function(data) {
        var poly_array = [data.features[0].geometry.coordinates]

        if (data.features[0].geometry.type == "MultiPolygon") {
          poly_array = poly_array[0];
        };

        var coordinates = $.map(poly_array, function(coord_array) {
          return [$.map(coord_array[0], function(coord) {
            return new google.maps.LatLng(coord[1], coord[0])
          })]
        })

        var polygon = new google.maps.Polygon({
          paths: coordinates,
          strokeColor: "#0000FF",
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillColor: "#0000FF",
          fillOpacity: 0.35
        });

        polygon.setMap(map);
      })
    });

    // Each place is a marker
    $.each(data.places, function(index, place) {
      var coordinate = new google.maps.LatLng(place.coordinate[1], place.coordinate[0])
      var marker = new google.maps.Marker({
        position: coordinate,
        icon: place.icon,
        map: map,
        title: place.name
      });
    });
  });
}

$(document).ready(function() {
  var script = document.createElement('script');
  script.type = 'text/javascript';
  script.src = 'https://maps.googleapis.com/maps/api/js?sensor=true&' +
      'callback=initializeMap';
  document.body.appendChild(script);
})
