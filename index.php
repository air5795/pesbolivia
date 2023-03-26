<?php

include 'conex.php';

date_default_timezone_set("America/La_Paz");

$ip = $_SERVER['REMOTE_ADDR'];

$sqlConsultar = $con->query("SELECT* FROM contador WHERE ip = '$ip' order by id desc");
$contarConsultar = $sqlConsultar->num_rows;

if ($contarConsultar == 0) {
  $sqlInsertar = $con->query("INSERT INTO contador (ip,fecha) values ('$ip',now())");
}else {
  $row = $sqlConsultar->fetch_array();
  $fechaRegistro = $row['fecha'];
  $fechaActual = date("Y-m-d H:i;s");
  $nuevaFecha = strtotime($fechaRegistro."+ 1 hour");
  $nuevaFecha = date("Y-m-d H:i;s",$nuevaFecha);

  if ($fechaActual>= $nuevaFecha) {
    $sqlInsertar = $con->query("INSERT INTO contador (ip,fecha) values ('$ip',now())");
  }

}

$visitas = $con->query("SELECT * FROM contador");
$contar = $visitas->num_rows;



?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>PES-BOLIVIA</title>
  <meta name="title" content="Adex">
  <meta name="description" content="PESBOLIVIA EDICION PARACHE LIGA BOLIVIANA">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.png" type="image/svg+xml">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700&display=swap" rel="stylesheet">

  <!-- 
    - custom css link
  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/style.css">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

  <!-- 
    - preload images
  -->


</head>

<body>

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="./assets/images/logito.png" width="250" height="24" alt="Adex home" class="logo-light">

        <img src="./assets/images/logito2.png" width="250" height="24" alt="Adex home" class="logo-dark">
      </a>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">
          <a href="#" class="logo">
            <img src="./assets/images/logo-light.png" width="174" height="24" alt="Adex home">
          </a>

          <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">

          <li>
            <a href="index.php" class="navbar-link"><i class="bi bi-house-door-fill"></i> INICIO</a>
          </li>


          <li>
            <a href="extra.php" class="navbar-link"><i class="bi bi-dpad"></i> CONTENIDO EXTRA</a>
          </li>

          

          

        </ul>

        <div class="wrapper">
          <a href="mailto:info@email.com" class="contact-link">pesbolivia2023@gmail.com</a>

          <a href="tel:001234567890" class="contact-link">79441119</a>
        </div>

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-dribbble"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>

        </ul>

      </nav>

      <a href="https://api.whatsapp.com/send?phone=+59179441119&text=Hola%20Pes%20Bolivia%20,%20Quiero%20hacerte%20un%20pedido%20...." class="btn btn-outline"><i class="bi bi-telephone-forward-fill"></i> Solicitar Pedidos</a>
      <a href="#" class="btn btn-secondary"><i class="bi bi-people-fill"></i> N° Visitas : <?php echo $contar; ?></a>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero has-bg-image" aria-label="home" style="background-image: url('./assets/images/hero-bg2.png')">
        <div class="container">

          <div class="hero-content">

            <h1 class="h1 hero-title">PES BOLIVIA</h1>

            <p class="hero-text">
              Parche liga Boliviana 2023 , comunidad de PES en Bolivia.
            </p>

            <div class="btn-wrapper">

              <a href="airpatch.php" class="btn btn-outline"> AIRPATCH 2023 PC </a>

              <a href="optionFile.php" class="btn btn-outline"> OPTION FILE 2023 PS4/PS5 </a>


            </div>

          </div>

          <div>

          </div>

          

        </div>
      </section>




<P></P>
 


















      <!-- 
        - #PROJECT
      -->

      <section class="section project" aria-labelledby="project-label">
        <div class="container">

          

          

          <ul class="grid-list">

            <li>
              <div class="project-card">

                <figure class="card-banner img-holder" style="--width: 560; --height: 350;">
                  <img src="./assets/images/hero-slide-1.jpg" width="560" height="350" loading="lazy"
                    alt="Ligula tristique quis risus" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title"> AirPatch 2023 (PC) <i class="bi bi-laptop"></i> </a>
                  </h3>

                  <p class="card-text">
                    Parche de la liga Boliviana Temporada 2023 PES 21 para Computadora. 
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                      <time class="meta-text" datetime="2022-04-14">26 de marzo</time>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="document-text-outline" aria-hidden="true"></ion-icon>

                      <span class="meta-text">2023</span>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="project-card">

                <figure class="card-banner img-holder" style="--width: 560; --height: 350;">
                  <img src="./assets/images/321457533_473837884940027_9167222114206703697_n.jpg" width="560" height="350" loading="lazy"
                    alt="Nullam id dolor elit id nibh" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Option File 2023 (PS4/PS5) <i class="bi bi-controller"></i> </a>
                  </h3>

                  <p class="card-text">
                   Option File para pes 21 de la Liga profesional Boliviana temporada 2023.
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                      <time class="meta-text" datetime="2022-03-29">26 de marzo</time>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="document-text-outline" aria-hidden="true"></ion-icon>

                      <span class="meta-text">2023</span>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="project-card">

                <figure class="card-banner img-holder" style="--width: 560; --height: 350;">
                  <img src="./assets/images/206410617_321540949568074_6493306400761527042_n.jpg" width="560" height="350" loading="lazy"
                    alt="Ultricies fusce porta elit" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Trabajos de Edición <i class="bi bi-tools"></i></a>
                  </h3>

                  <p class="card-text">
                    Aceptamos pedidos de Edicion , Estadios, FacesS ,  Scoreboards, Adboards, Menus, Kits , kits Referee .   
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                      <time class="meta-text" datetime="2022-02-26">26 de marzo</time>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="document-text-outline" aria-hidden="true"></ion-icon>

                      <span class="meta-text">2023</span>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #CTA
      -->

      <section class="cta" aria-label="call to action">
        <div class="container">

          <h4 class="h4 section-title">
            Queda totalmente Prohibido el uso de nuestro material y comercializacion sin nuestra autorización.
            Apoyemos la edicion Boliviana para que cada año sigamos dandoles el mejor contenido. 
            
            Son meses de trabajo.
          </h4>

          <a href="https://www.paypal.com/donate/?hosted_button_id=K3RC9SZV79NMW" class="btn btn-primary"><i class="bi bi-cup-hot"> Donar</i></a>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">
    <p >
      &copy; 2023 PESBOLIVIA.  Todos los Derechos Reservados.
    </p>

    <p>@leigles , je$u$s , j0s3</p>
  </footer>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>