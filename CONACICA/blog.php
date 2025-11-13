<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="style.css">


    <title>blog</title>
</head>
<body>

<!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-green sticky-top shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold text-light fs-1 logo-stroked" href="index.php">CONACICA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto fw-semibold">
          <li class="nav-item"><a class="nav-link active" href="#quienes-somos">Quiénes Somos</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown">Servicios/Apoyo</a>
            <ul class="dropdown-menu bg-green">
              <li><a class="dropdown-item" href="cursos.php">Cursos y Capacitación</a></li>
              <li><a class="dropdown-item" href="directorio.html">Directorio Mayorista</a></li>
              <li><a class="dropdown-item" href="ruta/a/alianzas.html">Vacantes</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown">Información</a>
            <ul class="dropdown-menu bg-green">
              <li><a class="dropdown-item text-dark" href="precios.html">Precios de Mercado</a></li>
              <li><a class="dropdown-item" href="ruta/a/blog.html">Blog / Noticias</a></li>
              <li><a class="dropdown-item" href="ruta/a/alianzas.html">Alianzas</a></li>
            </ul>
          </li>

          <li class="nav-item"><a class="nav-link active" href="#contacto">Contacto</a></li>
        </ul>
      </div>
    </div>
  </nav>

  
  <!-- HERO (ok solo checar responsive) -->
  <header class="hero-section py-5" id="inicio">
    <div class="container py-5">
        <div class="row align-items-center">
            
            <div class="col-12 col-md-6 text-center">
                <img src="img/logo-6.jpg" class="img-fluid d-block mx-auto logo-conacica logo-hero-responsive" alt="Logo CONACICA Circular">
            </div>

            <div class="col-md-6 text-md-end text-center mt-4 mt-md-0">
                
                <h1 class="display-4 fw-bold mb-3">
                    Noticias y Avisos del Sector Agroalimentario
                </h1>
                
                <p class="lead mb-4">
                    Infórmate sobre los acontecimientos, comunicados y colaboraciones de CONACICA y la comunidad del campo mexicano.
                </p>
                
            </div>

        </div>
    </div>
  </header>

<section>

<section class="blog-filtro text-center mb-5">
  <div class="">
    <div class="btn-group w-100" role="group" aria-label="Filtro de categorías">
      <button type="button" class="btn btn-outline-success active rounded-0" data-filter="all">Todos</button>
      <button type="button" class="btn btn-outline-success rounded-0" data-filter="conacica">Noticias CONACICA</button>
      <button type="button" class="btn btn-outline-success rounded-0" data-filter="sector">Avisos del sector</button>
      <button type="button" class="btn btn-outline-success rounded-0" data-filter="oficiales">Comunicados oficiales</button>
    </div>
  </div>
</section>


<section class="noticias-destacadas py-3 bg-success text-white">
  <div class="container">
    <div id="carousel-destacadas" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active text-center">
        AVISO urgente: cierre temporal de la Central de Abasto Toluca por mantenimiento.
        </div>
        <div class="carousel-item text-center">
         Nueva alianza CONACICA – Secretaría de Economía para fortalecer productores locales.
        </div>
        <div class="carousel-item text-center">
          Se inaugura el Foro Nacional Agroalimentario 2025 con participación de CONACICA.
        </div>
      </div>
    </div>
  </div>
</section>

<section class="detalle-noticia py-5">
  <div class="container">
    <img src="img/eventos-2.jpg" class="img-fluid rounded mb-4 h-50 w-50" alt="Noticia completa">
    <h2 class="fw-bold">Foro Nacional Agroalimentario 2025</h2>
    <p class="text-muted">Publicado el 15 de octubre, 2025</p>
    <p class="lead">CONACICA participó en el foro nacional promoviendo la colaboración entre productores...</p>

    <div class="mt-4">
      <a href="blog.html" class="btn btn-outline-success rounded-pill me-2">← Volver al blog</a>
      <a href="#" class="btn btn-success rounded-pill">Compartir</a>
    </div>
  </div>
</section>


<section class="blog-listado py-5">
  <div class="container">
     <div class="row g-4">
        <div class="col-md-4 blog-item" data-category="conacica">
          <div class="card h-100 shadow-sm">
            <img src="img/n1.jpg" class="card-img-top" alt="Noticia">
            <div class="card-body d-flex flex-column h-100"> 
              <h5 class="card-title fw-bold">Foro Nacional Agroalimentario 2025</h5>
              <p class="text-muted mb-2">15 de octubre, 2025</p>
              <p class="card-text flex-grow-1">CONACICA participó en el foro nacional para promover las cadenas de valor agroalimentarias sostenibles...</p>
              <a href="detalle-noticia.html" class="btn btn-cta-hero1 btn-sm rounded-pill mt-auto">Leer más</a>
            </div>
          </div>
        </div>

      <div class="col-md-4 blog-item" data-category="sector">
        <div class="card h-100 shadow-sm">
        <img src="img/n2.jpg" class="card-img-top" alt="Aviso">
          <div class="card-body d-flex flex-column h-100">
            <h5 class="card-title fw-bold">Bloqueo en carretera México-Puebla</h5>
            <p class="text-muted mb-2">10 de octubre, 2025</p>
            <p class="card-text flex-grow-1">Transportistas anuncian bloqueo temporal debido a conflictos de carga agroindustrial...</p>
            <a href="#" class="btn btn-cta-hero1 btn-sm rounded-pill mt-auto">Leer más</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 blog-item" data-category="conacica">
          <div class="card h-100 shadow-sm">
            <img src="img/n1.jpg" class="card-img-top" alt="Noticia">
            <div class="card-body d-flex flex-column h-100"> 
              <h5 class="card-title fw-bold">Foro Nacional Agroalimentario 2025</h5>
              <p class="text-muted mb-2">15 de octubre, 2025</p>
              <p class="card-text flex-grow-1">CONACICA participó en el foro nacional para promover las cadenas de valor agroalimentarias sostenibles...</p>
              <a href="detalle-noticia.html" class="btn btn-cta-hero1 btn-sm rounded-pill mt-auto">Leer más</a>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>

<section class="avisos-sector py-5 bg-light">
  <div class="container">
    <h4 class="fw-bold border-start border-5 border-conacica-green ps-3 mb-4">¿Tienes un aviso del sector?</h4>
    <form class="shadow-sm p-4 bg-white rounded">
      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label">Nombre / Organización</label>
          <input type="text" class="form-control" placeholder="Ej. Asociación de Productores de Jalisco">
        </div>
        <div class="col-md-6">
          <label class="form-label">Título del aviso</label>
          <input type="text" class="form-control" placeholder="Ej. Cierre temporal de carretera 57">
        </div>
        <div class="col-12">
          <label class="form-label">Descripción</label>
          <textarea class="form-control" rows="3" placeholder="Describe brevemente el aviso..."></textarea>
        </div>
        <div class="col-12">
          <label class="form-label">Imagen o documento (opcional)</label>
          <input type="file" class="form-control">
        </div>
        <div class="col-12 text-end">
          <button type="submit" class="btn btn-success rounded-pill px-4">Enviar aviso</button>
        </div>
      </div>
    </form>
  </div>
</section>



  <!-- FOOTER -->
  <footer id="contacto" class="bg-green text-white pt-5 pb-3">
    <div class="container">
      <div class="row">
        <div class="col-md-3 mb-4">
          <h5 class="fw-bold text-dark">Contacto</h5>
          <ul class="list-unstyled small">
            <li><i class="fas fa-map-marker-alt me-2"></i> Dirección de Oficinas Centrales</li>
            <li><i class="fas fa-phone me-2"></i> +52 55 XXXX XXXX</li>
            <li><i class="fas fa-envelope me-2"></i> info@conacica.org</li>
          </ul>
        </div>

        <div class="col-md-3 mb-4">
          <h5 class="fw-bold text-dark">Enlaces Rápidos</h5>
          <ul class="list-unstyled small">
            <li><a href="ruta/a/quienes-somos.html" class="text-white text-decoration-none">Nuestra Visión</a></li>
            <li><a href="ruta/a/directorio.html" class="text-white text-decoration-none">Directorio Mayorista</a></li>
            <li><a href="ruta/a/precios.html" class="text-white text-decoration-none">Consulta de Precios</a></li>
            <li><a href="ruta/a/contacto.html" class="text-white text-decoration-none">Formulario de Contacto</a></li>
          </ul>
        </div>

        <div class="col-md-2 mb-4">
          <h5>Administrador</h5>
          <?php if(empty($_SESSION['userId'])){ ?>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalLogin">Ingresar</button>
          <?php } else { ?>
            <a href="./login/logout.php">Salir</a>
          <?php } ?>
        </div>

        <div class="col-md-3 mb-4 text-md-end">
          <h5 class="fw-bold text-dark">Síguenos</h5>
          <a href="#" class="text-white me-3"><i class="fab fa-facebook-f fa-2x"></i></a>
          <a href="#" class="text-white me-3"><i class="fab fa-x fa-2x"></i></a>
          <a href="#" class="text-white me-3"><i class="fab fa-linkedin-in fa-2x"></i></a>
          <p class="mt-3 small">&copy; 2025 CONACICA. Todos los derechos reservados.</p>
        </div>
      </div>
    </div>
  </footer>
 
</body>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>