<script src="./js/ajax.js"></script>
  <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/7b2e84a63f.js" crossorigin="anonymous"></script>

  <script>
    // This example adds a marker to indicate the position of Bondi Beach in Sydney,
    // Australia.
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: {
          lat: 40.645037,
          lng: -73.880224
        },
      });

      var image = 'images/maps-and-flags.png';
      var beachMarker = new google.maps.Marker({
        position: {
          lat: 40.645037,
          lng: -73.880224
        },
        map: map,
        icon: image
      });
    }
  </script>
  <!-- google map js -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    const form = document.querySelector('form');

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        const nombre = document.querySelector('input[placeholder="Nombre"]').value;
        const telefono = document.querySelector('input[placeholder="Telefono"]').value;
        const email = document.querySelector('input[placeholder="Email"]').value;
        const mensaje = document.querySelector('input.Mensaje').value;

        if (nombre.trim() === '' || telefono.trim() === '' || email.trim() === '' || mensaje.trim() === '') {
            Swal.fire({
                title: "Error",
                text: "Por favor, completa todos los campos",
                icon: "error"
            });
        } else {
            Swal.fire({
                title: "¡Exito!",
                text: "¡Mensaje enviado!",
                icon: "success"
            });
        }
    });


</script>