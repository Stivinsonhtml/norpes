<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTOS NORPES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="src/Css/Style.css">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="src/Logo/logo.png" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="?section=inicio">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?section=productos">Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?section=quienessomos">Quiénes Somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?section=contacto">Contacto</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <?php
    include_once "pages/Banner.php";
   ?>
    <div class="content" id="content">
    <?php
    // Controlador de contenido utilizando un switch en PHP
    $section = isset($_GET['section']) ? $_GET['section'] : 'inicio';

    switch ($section) {
        case 'inicio':
            include 'inicio.php'; // Mostrar tarjetas por defecto
            break;

        case 'productos':
            include 'productos.php';
            break;

        case 'quienessomos':
            include 'quienessomos.php';
            break;

        case 'contacto':
            include 'contacto.php';
            break;

        default:
            echo '<div class="content-section">';
            echo '<h2>Página no encontrada</h2>';
            echo '<p>La sección solicitada no está disponible.</p>';
            echo '</div>';
            break;
    }
    ?>
    </div>
    <br><br><br><br><br>
    <?php
        include_once "pages/footer.php";
    ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="src/JS/mostrar_imagen.js"></script>
<script src="src/JS/abrir_modal.js"></script>
</body>
</html>