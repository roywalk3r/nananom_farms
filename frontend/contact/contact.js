$('#contact-form').validate({
  rules: {
    name: {
      minlength: 2,
    },
    email: {
      email: true,
    },
  },
  messages: {
    name: {
      required: 'Please enter your name',
      minlength: 'Enter at least 2 characters',
    },
    email: 'Please enter a valid email',
    subject: 'Please enter your subject',
    Message: 'Please enter your message',
  },
  submitHandler: function (form) {
    form.submit()
  },
})

window.addEventListener('load', function () {
  // Create the map with an initial wide zoom
  const map = L.map('leaflet-map').setView([5.56, -0.205], 5) // Accra, Ghana

  // Add dark tile layer
  L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
    attribution: '&copy; OpenStreetMap contributors & CartoDB',
  }).addTo(map)

  // Animate zoom in
  setTimeout(() => {
    map.flyTo([5.56, -0.205], 14, {
      animate: true,
      duration: 2.5,
    })
  }, 500)

  // Custom pulsing marker
  const marker = L.marker([5.56, -0.205], {
    icon: L.divIcon({
      className: 'pulse',
      iconSize: [20, 20],
    }),
  }).addTo(map)

  marker.bindPopup('<b>Nananom</b><br>Accra, Ghana').openPopup()
})
