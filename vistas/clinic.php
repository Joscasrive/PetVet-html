

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/about.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <h2 class="custom_heading">
             
              <span>
               Clinica
              </span>
            </h2>
            <p>
            El objetivo principal de agendar citas en la clínica Petvet Center es garantizar una atención médica oportuna y personalizada para cada mascota, optimizando el tiempo de los propietarios y del personal veterinario. Este proceso busca asegurar que todas las mascotas reciban la atención adecuada en el momento justo, evitando esperas innecesarias y facilitando la organización y eficiencia en el manejo de los servicios clínicos.
            </p>
            <div>
              <a data-toggle="modal" data-target="#agendarModal">
              Agendar Cita
              </a>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



<!-- Modal -->
<div class="modal fade" id="agendarModal" tabindex="-1" role="dialog" aria-labelledby="agendarModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="agendarModalLabel">Agendar cita</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Aquí puedes agregar el formulario para agendar la cita -->
        <form action="./php/agendar.php" method="POST" class="FormularioAjax" autocomplete="off">
          <input type="text" value="<?php echo $_SESSION['id'];?>" name="id_usuario" hidden>

          <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre" placeholder="Ingrese su nombre">
          </div>
          <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" class="form-control" name="fecha">
          </div>
          <div class="form-group">
            <label for="hora">Hora:</label>
            <input type="time" class="form-control" name="hora">
          </div>
          <button type="submit" class="btn btn-primary mb-2">Agendar</button>
        </form>
        <div class="form-rest mb-6 mt-6"></div>
      </div>
    </div>
  </div>
</div>

 