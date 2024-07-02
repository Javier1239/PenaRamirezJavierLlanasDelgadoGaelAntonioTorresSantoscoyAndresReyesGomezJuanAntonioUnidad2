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
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.php">service </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pet.php">Calculadora de edad</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="clinic.php"> clinica</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contacto</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="buy.php"> Razas de perros </a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
            <div class="quote_btn-container  d-flex justify-content-center">
              <a href="">
                Call: +01 1234567890
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->

  <!-- buy section -->

  <section class="buy_section layout_padding">
    <div class="container">
      <h2>
      Obtener Información de Razas de Perros
      </h2>
      <p>
      Cada raza de perro tiene características únicas que pueden influir en su cuidado, 
      temperamento y adaptabilidad a diferentes entornos. 
      La elección de la raza adecuada depende de tus preferencias personales, 
      estilo de vida y capacidad para proporcionar el cuidado adecuado que cada perro necesita. 
      </p>
    </div>
  </section>
  <!-- end buy section -->
 <!-- Obtener Información de Razas de Perros -->
 <div class="container">
        <h2>Razas de Perros</h2>
        <button onclick="obtenerInformacionRaza()">Obtener Información de Raza</button>
        <div id="informacionRaza"></div>
   

    <script>
        // Función asíncrona para obtener información de una raza de perros
        async function obtenerInformacionRaza() {
            try {
                // URL de la API de razas de perros
                const apiUrl = 'https://dog.ceo/api/breeds/image/random';

                // Realizar la solicitud a la API usando fetch y await para esperar la respuesta
                const respuesta = await fetch(apiUrl);
                const datos = await respuesta.json();

                // Mostrar la imagen de la raza en el elemento <div> con id "informacionRaza"
                const imagenRaza = document.createElement('img');
                imagenRaza.src = datos.message;
                imagenRaza.alt = 'Imagen aleatoria de raza de perro';
                imagenRaza.style.maxWidth = '100%';
                
                // Limpiar contenido previo si existe
                const contenedorRaza = document.getElementById('informacionRaza');
                contenedorRaza.innerHTML = '';
                contenedorRaza.appendChild(imagenRaza);
            } catch (error) {
                console.error('Error al obtener información de raza de perro:', error);
                document.getElementById('informacionRaza').textContent = 'Ocurrió un error al obtener la información de la raza de perro.';
            }
        }
</script>


</div>


 

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>