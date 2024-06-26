<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php?vista=home">
            <img src="../images/logo.png" alt="">
            <span>
              PetVet-Center
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php?vista=home">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php?vista=service">Servicios </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php?vista=pet">Galeria </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php?vista=clinic">Clinica</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php?vista=contact">Contactanos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php?vista=buy"> Comprar</a>
                </li>
                <?php if (isset($_SESSION['rol'])) {
                 if($_SESSION['rol']=="admin")
                 {
                
                ?>

                <li class="nav-item">
                  <a class="nav-link" href="index.php?vista=user"> Usuarios</a>
                </li>
                <?php }}?>
              </ul>
              
            </div>
            <div class="quote_btn-container  d-flex justify-content-center">
            <a href="index.php?vista=citas" style="color: white;" class="mr-2 btn btn-primary">
            Citas
            </a>
            <a href="index.php?vista=logout" class="btn btn-danger" style="color: white;"><i class="fa-solid fa-right-to-bracket"></i></a>
             
              
              
            </div>
          </div>
        </nav>
      </div>
    </header>