

  <!-- buy section -->

  <section class="buy_section layout_padding">
    <div class="container">
      <h2>
       Tenemos todo lo que Nesecitas
      </h2>
      <p>
        Nuestros productos son seleccionados con el objetivo de proporcionar lo mejor para la salud, comodidad y felicidad de tus mascotasnos aseguramos de ofrecer solo productos de alta calidad, brindando lo mejor a tus animales.
      </p>
      <div class="d-flex justify-content-center">
        <a  href="" data-toggle="modal" data-target="#modalCompra">
          Comprar
        </a>
      </div>
    </div>
  </section>

  <!-- end buy section -->

  <section class="client_section layout_padding-bottom">
    <div class="container">
      <h2 class="custom_heading text-center">
        Revisa Nuestro
        <span>
        Catalogo
        </span>
      </h2>
      <p class="text-center">
        En PetVet Center, ofrecemos una amplia variedad de productos para satisfacer las necesidades de tus mascotas. Aquí tienes una lista de Algunos de los productos que puedes encontrar en nuestra tienda:
      </p>
      <div id="carouselExample2Indicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExample2Indicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="1"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="layout_padding2 pl-100">
              <div class="client_container ">
                <div class="img_box">
                  <img src="images/client.jpg" alt="">
                </div>
                <div class="detail_box">
                  <h5>
                    Alimentos y Suplementos:
                  </h5>
                  <p>
                    - Alimentos Balanceados: Gamas específicas para cachorros, adultos y mascotas senior.  
                    - Dietas Especializadas: Alimentos para mascotas con necesidades dietéticas especiales (alergias, obesidad, problemas renales, etc.).
                    - Suplementos Nutricionales: Vitaminas, minerales y otros suplementos para mejorar la salud y el bienestar de tus mascotas.
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="layout_padding2 pl-100">
              <div class="client_container ">
                <div class="img_box">
                  <img src="images/cliente2.png" alt="">
                </div>
                <div class="detail_box">
                  <h5>
                    Medicamentos y Productos de Salud:
                  </h5>
                  <p>
                    - Medicamentos Recetados:* Tratamientos para diversas condiciones de salud bajo prescripción veterinaria.
                    - Antiparasitarios:* Productos para la prevención y eliminación de pulgas, garrapatas y otros parásitos.
                    - Productos para el Cuidado de la Piel y el Pelaje:* Champús, acondicionadores y tratamientos para problemas dermatológicos.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="layout_padding2 pl-100">
              <div class="client_container ">
                <div class="img_box">
                  <img src="images/cliente.jpg" alt="">
                </div>
                <div class="detail_box">
                  <h5>
                    Higiene y Cuidado:
                  </h5>
                  <p>
                    - Productos de Higiene Bucal: Cepillos de dientes, pastas dentales y enjuagues para mantener una buena salud dental.
                    -  Artículos de Limpieza: Toallitas húmedas, limpiadores de oídos y ojos y productos desinfectantes.
                    - Baños y Arenas para Gatos: Arenas sanitarias y bandejas para mantener la limpieza en el hogar.
                      Entre muchos mas Productos y Accesorios.

                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>


    </div>

   <!-- Modal de Compra -->
<div class="modal fade" id="modalCompra" tabindex="-1" role="dialog" aria-labelledby="modalCompraLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCompraLabel">Compra de Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="compra">
          <div class="form-group">
            <label for="producto">Producto</label>
            <select class="form-control" id="producto">
              <option value="veterinario">Producto Veterinario</option>
              <option value="higiene">Producto de Higiene</option>
              <option value="alimento">Alimento</option>
            </select>
          </div>
          <div class="form-group">
            <label for="tarjeta">Tarjeta de Crédito</label>
            <input type="text" class="form-control" id="tarjeta" placeholder="Número de tarjeta">
          </div>
          <div class="form-group">
            <label for="cedula">Cédula</label>
            <input type="text" class="form-control" id="cedula" placeholder="Número de cédula">
          </div>
          <div class="form-group">
            <label for="datos">Datos Adicionales</label>
            <textarea class="form-control" id="datos" rows="3" placeholder="Otros datos relevantes"></textarea>
          </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
    </div>
  </div>
</div>
</form>
  </section>
  <script>

 


   
    
   const compra = document.querySelector('.compra');
   compra.addEventListener("submit", function(e){
    e.preventDefault();
    var producto = document.getElementById('producto').value;
  var tarjeta = document.getElementById('tarjeta').value;
  var cedula = document.getElementById('cedula').value;
  if (producto !== '' && tarjeta !== '' && cedula !== ''){
    Swal.fire({
      icon: 'success',
      title: '¡Compra Exitosa!',
      text: 'Gracias por tu compra. ¡Disfruta tu producto!'
    });
    $('#modalCompra').modal('hide');
  }else {
    // Mostrar un mensaje de error si algún campo está vacío
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'Por favor, completa todos los campos antes de enviar la compra.'
    });
  }
   
   });
   

   
    
  

</script>

 