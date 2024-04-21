<?php

// Get form data
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

// Connect to your database
// ... (Replace with your database connection code)

// Prepare and execute SQL statement
echo $latitude;
echo $longitude;
?>




<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Add a geocoder</title>
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
<link href="https://api.mapbox.com/mapbox-gl-js/v3.3.0/mapbox-gl.css" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/v3.3.0/mapbox-gl.js"></script>
<style>
body { margin: 0; padding: 0; }
#map { position: absolute; top: 25px; bottom: 10px; width: 70%; height:70%; padding: 20px;     }
</style>
</head>
<body>
<!-- Load the `mapbox-gl-geocoder` plugin. -->
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js"></script>
<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.css" type="text/css">


<form id="coordinateForm" method="POST" action="#">
  <input type="hidden" name="latitude" id="latitude">
  <input type="hidden" name="longitude" id="longitude">
  <button type="submit">Submit Coordinates</button>
</form>

<div id="map"></div>

<script>
	mapboxgl.accessToken = 'pk.eyJ1IjoiYXZheTEyOCIsImEiOiJjbHY2enR3MDMwNGpnMmlxeW52dTNyZW9rIn0.BtERjB3w6fgUXojpmlIl1w';
    const map = new mapboxgl.Map({
        container: 'map',
        // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
        style: 'mapbox://styles/mapbox/streets-v12',
        center: [-79.4512, 43.6568],
        zoom: 13
    });

    // Add the control to the map.
    map.addControl(
        new MapboxGeocoder({
            accessToken: mapboxgl.accessToken,
            mapboxgl: mapboxgl
        })
    );
    //map
      // Function to store clicked coordinates (remains the same)
  function storeCoordinates(clickedLocation) {
    const latitude = clickedLocation.lat;
    const longitude = clickedLocation.lng;
    console.log(`Latitude: ${latitude}, Longitude: ${longitude}`);

    // Add your logic here to store these coordinates (e.g., hidden form fields, send to server)
    // For example:
    document.getElementById('latitudeInput').value = latitude;
    document.getElementById('longitudeInput').value = longitude;
    document.getElementById('coordinateForm').submit();
  }

  // Event listener for map click (remains the same)
  map.on('click', (event) => {
    const clickedLocation = event.lngLat;
    storeCoordinates(clickedLocation);
  });
</script>

</body>
</html>