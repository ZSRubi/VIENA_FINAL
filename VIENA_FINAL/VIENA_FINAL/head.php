<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
   
    <style>
        /* Estilo para el encabezado fijo */
        .fixed-top-custom {
            background: black;
            color: white; /* Asegura que el texto sea blanco en el fondo oscuro */
            padding: 10px 0; /* Ajusta el espaciado vertical si es necesario */
        }
        /* Estilo para el menú desplegable */
        .navbar-nav .dropdown-menu {
            background-color: #000; /* Fondo oscuro para los menús desplegables */
            border: none; /* Elimina el borde para un aspecto más limpio */
        }
        /* Estilo para los elementos del menú desplegable al pasar el ratón */
        .navbar-nav .dropdown-item:hover {
            background-color: #343a40; /* Color ligeramente más claro al pasar el ratón */
        }
        /* Estilo para el texto o la marca de la barra de navegación */
        .navbar-brand span {
            color: #007bff; /* Color azul para la marca o texto */
        }
    </style>
</head>
<body>
<header id="header" class="fixed-top-custom">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid"> <!-- Cambiado de container a container-fluid -->
            <a class="navbar-brand" href="iniciar.php">VIENA INGENIEROS<span>.</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Reservas</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <!-- Menú desplegable vacío -->
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           ESTUDIOS
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                            <!-- Opciones del menú desplegable -->
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Interesante</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sobre el sitio
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink4">
                            <a class="dropdown-item" href="#">Politica y privacidad</a>
                            <a class="dropdown-item" href="#">Terminos y condiciones</a>
                            <a class="dropdown-item" href="#">Contactanos</a>
                        </div>
                    </li>
                </ul>
                <div class="ml-3">
                    <button onclick="location.href='sesion.php'" class="btn btn-secondary">Iniciar Sesión</button>
                    <button onclick="location.href='registro.php'" class="btn btn-secondary">Registrate</button>
                </div>
            </div>
        </div>
    </nav>
</header>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
