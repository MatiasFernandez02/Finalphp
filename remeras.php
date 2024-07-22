<?php
include 'config.php';

$categoria = 'Remeras';

$sql = "SELECT nombre, descripcion, precio, imagen FROM productos WHERE categoria = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param('s', $categoria);
$stmt->execute();
$result = $stmt->get_result();

$productos = $result->fetch_all(MYSQLI_ASSOC);

$stmt->close();
$conexion->close();
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="public/imagenes/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fugaz+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="public/estilos/style.css">
    <title>Nice Moda</title>
</head>
<body>
    <header class="fixed-top bg-dark">
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid d-flex justify-content-between">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="d-flex align-items-center">
                    <a href="#" class="text-white me-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
                          </svg>
                    </a>
                </div>
            </div>
            <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <form class="d-flex mt-3" role="search">
                      <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                      <button class="btn btn-outline-light" type="submit">Buscar</button>
                    </form>
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="https://wa.me/5492975265538?text=¡Hola! ¿Cómo puedo obtener más información sobre tus productos?" target="_blank">Contacto</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Productos</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                          <li><a class="dropdown-item" href="remeras.php">Remeras</a></li>
                          <li><a class="dropdown-item" href="tops.php">Tops</a></li>
                          <li><a class="dropdown-item" href="pantalones.php">Pantalones</a></li>
                          <li><a class="dropdown-item" href="polleras.php">Polleras</a></li>
                          <li><a class="dropdown-item" href="accesorios.php">Accesorios</a></li>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="#">Como comprar</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="form.html">Agregar productos</a>
                      </li>
                     </ul>
                   </div>
            </div>
        </nav>
        <div class="container-fluid text-center py-2">
            <a class="navbar-brand text-white" href="#"><h1>NICE MODA</h1></a>
        </div>
    </header>

    <section class="carousel">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="public/imagenes/Imagen de WhatsApp 2023-11-16 a las 16.23.10_4b32d4ad.jpg" class="d-block w-100 d-none d-sm-block" alt="...">
                    <img src="public/imagenes/IMG-20231122-WA0012.jpg" class="d-block w-100 d-sm-none" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="public/imagenes/Imagen de WhatsApp 2023-11-16 a las 17.08.38_43856066.jpg" class="d-block w-100 d-none d-sm-block" alt="...">
                    <img src="public/imagenes/IMG-20231122-WA0015.jpg" class="d-block w-100 d-sm-none" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="public/imagenes/Imagen de WhatsApp 2023-11-16 a las 17.20.07_e8b34886.jpg" class="d-block w-100 d-none d-sm-block" alt="...">
                    <img src="public/imagenes/IMG-20231122-WA0018.jpg" class="d-block w-100 d-sm-none" alt="...">
                </div>
            </div>
        </div>
    </section>

    <main>
        <section class="d-flex flex-wrap justify-content-center">
            <?php if (!empty($productos)): ?>
                <?php foreach ($productos as $producto): ?>
                    <div class="card m-2 bg-dark text-white" style="width: 24rem;">
                    <img src="data:image/jpeg;base64<?php echo htmlspecialchars($producto['imagen']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($producto['nombre']); ?>">
                            <h5 class="card-title"><?php echo htmlspecialchars($producto['nombre']); ?></h5>
                            <p class="card-text"><?php echo htmlspecialchars($producto['descripcion']); ?></p>
                            <p class="card-text">$<?php echo htmlspecialchars($producto['precio']); ?></p>
                            <a href="#" class="btn btn-outline-light">Ver Producto</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </section>
    </main>

    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
          <h4>Síguenos en redes sociales</h4>
          <div class="social-icons">
            <a href="enlace-a-facebook" class="text-white me-3" target="_blank"><i class="bi bi-facebook"></i></a>
            <a href="enlace-a-twitter" class="text-white me-3" target="_blank"><i class="bi bi-twitter"></i></a>
            <a href="https://instagram.com/nicemoda.co" class="text-white me-3" target="_blank"><i class="bi bi-instagram"></i></a>
        </div>
          <p>Copyright &copy; 2024 Nice moda</p>
        </div>
        <section class="logowpp">
          <a href="https://wa.me/5492975265538?text=¡Hola! ¿Cómo puedo obtener más información sobre tus productos?" class="d-s-none text-success" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
              <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
            </svg>
          </a>
          <a href="https://wa.me/5492975265538?text=¡Hola! ¿Cómo puedo obtener más información sobre tus productos?" class="d-none d-sm-inline text-white" target="_blank">
            Contactanos
          </a>
        </section>
      </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
