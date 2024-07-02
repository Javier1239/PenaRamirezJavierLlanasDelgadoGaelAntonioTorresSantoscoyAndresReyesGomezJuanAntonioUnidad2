<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Petology</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="">
            <span>
              Petology
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="service.php">Sevicios </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pet.php">Calculadora de edad </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="buy.php">Razas de perros</a>
          </li>
        </ul>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
            <div class="quote_btn-container  d-flex justify-content-center">
              <a href="">
                Llama: +01 1234567890
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

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
              Calcula la edad de tus mascotas
              <span>
                Clinic
              </span>
            </h2>
            <div>

      <!-- Calculadora de Edad de Perros -->
    <div>
        <label for="dogAge">Edad del perro (en años):</label>
        <input type="number" id="dogAge" placeholder="Ingresa la edad del perro">
        <button onclick="calcularEdadHumana()">Calcular Edad en Años Humanos</button>
        <p id="resultado"></p>
    </div>
    
    <script>
        // Función síncrona para calcular la edad de un perro en años humanos
        function calcularEdadHumana() {
            // Obtener el valor de la edad del perro desde el input
            const edadPerro = document.getElementById('dogAge').value;

            // Verificar que el valor ingresado sea un número válido
            if (isNaN(edadPerro) || edadPerro === '') {
                alert('Por favor, ingresa una edad válida para el perro.');
                return;
            }

            // Calcular la edad en años humanos (1 año de perro = 7 años humanos)
            const edadHumana = edadPerro * 7;

            // Mostrar el resultado en el elemento <p> con id "resultado"
            document.getElementById('resultado').textContent = `La edad del perro en años humanos es: ${edadHumana}`;
        }
    </script>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- info section -->
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="info_items">
        <a href="">
          <div class="item ">
            <div class="img-box box-1">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                Location
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="item ">
            <div class="img-box box-2">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                +02 1234567890
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="item ">
            <div class="img-box box-3">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                demo@gmail.com
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- end info_section -->

  <!-- footer section -->
  <section class="container-fluid footer_section bg-white text-white py-3">
    <div class="container text-center">
        <p class="mb-0">
            &copy; 2019 All Rights Reserved By
            <a href="https://html.design/" class="text-reset">Chopper Bzr</a>
        </p>
    </div>
</section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script>
    // Obtener todos los enlaces del navbar
    var navLinks = document.querySelectorAll('.navbar-nav .nav-link');

    // Agregar eventos de mouse a cada enlace
    navLinks.forEach(function(link) {
      link.addEventListener('mouseenter', function() {
        // Cambiar el fondo y color del texto cuando el mouse entra
        link.style.backgroundColor = '#007bff';
        link.style.color = '#fff';
      });

      link.addEventListener('mouseleave', function() {
        // Restaurar el fondo y color del texto cuando el mouse sale
        link.style.backgroundColor = '';
        link.style.color = '';
      });
    });
  </script>


</body>

</html>