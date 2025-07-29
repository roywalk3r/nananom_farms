<script>
  var map = L.map('leaflet-map').setView([5.614818, -0.205874], 13); // Example: Accra

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 18,
    attribution: '&copy; OpenStreetMap contributors'
  }).addTo(map);

  L.marker([5.614818, -0.205874]).addTo(map)
    .bindPopup('Your Office or Farm Location')
    .openPopup();
</script>
