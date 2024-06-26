<div class="main-container">
    <form class="box registration" action="" method="POST" autocomplete="off">
        <h5 class="title is-5 has-text-centered is-uppercase"><img src="../images/logo.png" alt=""></h5>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="usuario_usuario">Usuario</label>
                    <input class="form-control" type="text" id="usuario_usuario" name="usuario_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="usuario_nombre">Nombre</label>
                    <input class="form-control" type="text" id="usuario_nombre" name="usuario_nombre" maxlength="50" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="usuario_apellido">Apellido</label>
                    <input class="form-control" type="text" id="usuario_apellido" name="usuario_apellido" maxlength="50" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="usuario_clave">Clave</label>
                    <input class="form-control" type="password" id="usuario_clave" name="usuario_clave" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="usuario_email">Email</label>
                    <input class="form-control" type="email" id="usuario_email" name="usuario_email" maxlength="100" required>
                </div>
            </div>
        </div>
        
                
                   
             <input type="text" value="usuario"  name="rol" hidden>
              
          

        <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary">Registrarse</button>
        </div>
<div class="mt-2">
        <?php 
        if (isset($_POST['usuario_usuario']) && isset($_POST['usuario_nombre']) && isset($_POST['usuario_apellido']) && isset($_POST['usuario_clave']) && isset($_POST['usuario_email']) && isset($_POST['rol'])){
            require_once("./php/main.php");
            require_once("./php/user_save.php");
        }
        ?>
        </div>
    </form>
</div>