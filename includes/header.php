<?php
require_once 'includes/conexion.php';
session_start();

if (isset($_SESSION['user_id'])) {
    $records = $conexion->prepare('SELECT id_usuario, nombre, apellidos, correo, pass FROM usuarios WHERE id_usuario = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
        $user = $results;
    }
}

$login_message = '';

if (!empty($_POST['login-user']) && !empty($_POST['login-pass'])) {
    $registro = $conexion->prepare('SELECT id_usuario, nombre, apellidos, correo, pass FROM usuarios WHERE correo = :correo');
    $registro->bindParam(':correo', $_POST['user-emai']);
    $registro->execute();

    $resultado = $registro->fetch(PDO::FETCH_ASSOC);

    $login_message = '';

    if (count($resultado) > 0 && password_verify($_POST['login-pass'], $resultado['pass'])) {
        $_SESSION['user_id'] = $resultado['id_usuario'];
    } else {
        $login_message = 'Credenciales incorrectas';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IzyAcademy</title>
    <!-- estilos -->
    <link rel="stylesheet" href="assets/css/estilos.css">
    <!-- iconos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <header class="header">
        <nav class="navbar">
            <div class="navbar__menu-logo">
                <!-- logo -->
                <div class="navbar__logo">
                    <a href="index.php"><img src="https://izyacademy.com/pluginfile.php/1/theme_edumy/headerlogo1/1704492337/Logo%20izyacademy%20transparente2022.png" alt="Logo"></a>
                </div>

                <!-- menu -->
                <ul class="menu">
                    <li class="menu__item"><a href="index.php" class="menu__anchor">Inicio</a></li>
                    <li class="menu__item submenu-parent"><a href="#" class="menu__anchor anchor-submenu">Rutas De Formación <i class="bi bi-caret-down-fill"></i></a>
                        <!-- submenu -->
                        <ul class="submenu">
                            <li class="submenu__item"><a href="#" class="submenu__anchor">Científico De Datos</a></li>
                            <li class="submenu__item"><a href="rutanet.php" class="submenu__anchor">Ruta de Formación En .NET</a></li>
                            <li class="submenu__item"><a href="#" class="submenu__anchor">Ruta de Formación en Automatización</a></li>
                        </ul>
                    </li>
                    <li class="menu__item submenu-parent"><a href="#" class="menu__anchor anchor-submenu">Cursos <i class="bi bi-caret-down-fill"></i></a>
                        <!-- submenu -->
                        <ul class="submenu">
                            <li class="submenu__item"><a href="#" class="submenu__anchor">Desarrollo Y Lógica de Programación</a></li>
                            <li class="submenu__item"><a href="#" class="submenu__anchor">Automatización</a></li>
                            <li class="submenu__item"><a href="#" class="submenu__anchor">Pruebas No Funcionales</a></li>
                        </ul>
                    </li>
                    <li class="menu__item"><a href="#" class="menu__anchor">Quiénes somos</a></li>
                </ul>
            </div>


            <div class="login-container">
                <?php if (!empty($user)) : ?>
                    <p class="btn-login">Bienvenido <?= $user['nombre']; ?></p>
                    <a href="logout.php" class="btn-login">
                        Logout
                    </a>
                <?php else : ?>
                    <span class='btn-login' id='btn-login'>
                        <i class='bi bi-person person-icon'></i>
                        Iniciar Sesión
                    </span>
                <?php endif; ?>

                <i class='bi bi-search'></i>
            </div>
        </nav>

        <div class="banner">
            <h2 class="banner__title">Continúa tu formación con IzyAcademy</h2>
            <p class="banner__text">
                Te ofrecemos una experiencia de aprendizaje basada en la formación por proyectos, apoyada en el uso de recursos interactivos para que tu aprendizaje sea efectivo.
            </p>
        </div>
    </header>

    <!-- inicio de sesión -->
    <div class="login-form-container" id="login-form-container">
        <form action="login.php" class="login-form" method="POST">
            <h3 class="form__title">Inicie sesión en su cuenta</h3>

            <!-- campos -->
            <input type="email" name="login-user" id="user-mail" placeholder="Correo electrónico">
            <input type="password" name="login-pass" id="user-log-password" placeholder="Contraseña">

            <input type="submit" value="Acceder">

            <!-- botón de cierre de formulario  -->
            <span class="form__btn-close" id="form_btn-close">&times;</span>
            <div class="form-error-register">
                <?php if (!empty($message_login )) : ?>
                    <p><?= $message_login  ?></p>
                <?php endif; ?>
            </div>
        </form>
    </div>