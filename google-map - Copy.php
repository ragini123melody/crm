<!DOCTYPE html>
<html>
  <head>
    <title>Styled Maps - Night Mode</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
  <style>
  #map {
    height: 500px;
  }
</style>
<script>

// This example creates a simple polygon representing the host city of the 
// Greatest Outdoor Show On Earth.

 function initMap() {
   var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 9,
      center: {lat: 51.039, lng: -114.204},
      mapTypeId: 'terrain'
    });

    // Define the LatLng coordinates for the polygon's path.
    var triangleCoords = [
      {lat: 51.183, lng: -114.234},
      {lat: 51.154, lng: -114.235},
      {lat: 51.156, lng: -114.261},
      {lat: 51.104, lng: -114.259},
      {lat: 51.106, lng: -114.261},
      {lat: 51.102, lng: -114.272},
      {lat: 51.081, lng: -114.271},
      {lat: 51.081, lng: -114.234},
      {lat: 51.009, lng: -114.236},
      {lat: 51.008, lng: -114.141},
      {lat: 50.995, lng: -114.142},
      {lat: 50.998, lng: -114.160},
      {lat: 50.984, lng: -114.163},
      {lat: 50.987, lng: -114.141},
      {lat: 50.979, lng: -114.141},
      {lat: 50.921, lng: -114.141},
      {lat: 50.921, lng: -114.210},
      {lat: 50.893, lng: -114.210},
      {lat: 50.892, lng: -114.140},
      {lat: 50.888, lng: -114.139},
      {lat: 50.878, lng: -114.094},
      {lat: 50.878, lng: -113.994},
      {lat: 50.840, lng: -113.954},
      {lat: 50.854, lng: -113.905},
      {lat: 50.922, lng: -113.906},
      {lat: 50.935, lng: -113.877},
      {lat: 50.943, lng: -113.877},
      {lat: 50.955, lng: -113.912},
      {lat: 51.183, lng: -113.910}
    ];

    // Construct the polygon.
    var bermudaTriangle = new google.maps.Polygon({
      paths: triangleCoords,
      strokeColor: '#FF0000',
      strokeOpacity: 0.8,
      strokeWeight: 2,
      fillColor: '#FF0000',
      fillOpacity: 0.35
    });
    bermudaTriangle.setMap(map);
  }
</script>


<div id="map"></div>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVYkGX3AbivNQzsb2qMXq4b23lahDa1jw&callback=initMap">
    </script>
  </body>
</html>