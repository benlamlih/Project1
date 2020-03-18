<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>Add styles made with Mapbox Studio to a Leaflet map</title>
<meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
<script src='https://api.mapbox.com/mapbox.js/v3.2.1/mapbox.js'></script>
<link href='https://api.mapbox.com/mapbox.js/v3.2.1/mapbox.css' rel='stylesheet' />
<style>
  body { margin:0; padding:0; }
  #map { position:absolute; top:0; bottom:0; width:100%; }
</style>
</head>
<body>
<div id='map'></div>

<script>
L.mapbox.accessToken = 'pk.eyJ1Ijoia3VyYXgiLCJhIjoiY2s3cnBwbW0yMGVzbzNtcXR6ajV5c2J6eSJ9.F_HWYThRNRUg6MQ-qPV5vA';
var map = L.map('map').setView([38.97416, -95.23252], 15);

// Add tiles from the Mapbox Static Tiles API
// (https://docs.mapbox.com/api/maps/#static-tiles)
// Tiles are 512x512 pixels and are offset by 1 zoom level
L.tileLayer(
    'https://api.mapbox.com/styles/v1/mapbox/streets-v11/tiles/{z}/{x}/{y}?access_token=' + L.mapbox.accessToken, {
        tileSize: 512,
        zoomOffset: -1,
        attribution: '© <a href="https://apps.mapbox.com/feedback/">Mapbox</a> © <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);
</script>
</body>
</html>