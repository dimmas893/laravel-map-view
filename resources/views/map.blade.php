<!DOCTYPE html>
<html>
<head>
    <title>Map</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" />
    <style>
        #map {
            height: 400px;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div id="map" class="card"></div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>
    <script>
        var latitude = {{ $latitude }};
        var longitude = {{ $longitude }};

        var map = L.map('map').setView([latitude, longitude], 16);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
            maxZoom: 18
        }).addTo(map);

        L.marker([latitude, longitude]).addTo(map);
    </script>
</body>
</html>
