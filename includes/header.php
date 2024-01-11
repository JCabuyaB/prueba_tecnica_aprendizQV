<?php require_once 'includes/conexion.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IzyAcademy</title>
    <!-- estilos -->
    <link rel="stylesheet" href="assets/estilos.css">
    <!-- iconos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
<header class="header">
    <nav class="navbar">
        <div class="navbar__menu-logo">
            <!-- logo -->
            <div class="navbar__logo">
                <img src="https://izyacademy.com/pluginfile.php/1/theme_edumy/headerlogo1/1704492337/Logo%20izyacademy%20transparente2022.png" alt="Logo">
            </div>

            <!-- menu -->
            <ul class="menu">
                <li class="menu__item"><a href="#" class="menu__anchor">Inicio</a></li>
                <li class="menu__item submenu-parent"><a href="#" class="menu__anchor anchor-submenu">Rutas De Formación <i class="bi bi-caret-down-fill"></i></a>
                    <!-- submenu -->
                    <ul class="submenu">
                        <li class="submenu__item"><a href="#" class="submenu__anchor">Científico De Datos</a></li>
                        <li class="submenu__item"><a href="#" class="submenu__anchor">Ruta de Formación En .NET</a></li>
                        <li class="submenu__item"><a href="#" class="submenu__anchor">Ruta de Formación en Automatización</a></li>
                    </ul>
                </li>
                <li class="menu__item submenu-parent"><a href="#" class="menu__anchor anchor-submenu">Rutas De Formación <i class="bi bi-caret-down-fill"></i></a>
                    <!-- submenu -->
                    <ul class="submenu">
                        <li class="submenu__item"><a href="#" class="submenu__anchor">Científico De Datos</a></li>
                        <li class="submenu__item"><a href="#" class="submenu__anchor">Ruta de Formación En .NET</a></li>
                        <li class="submenu__item"><a href="#" class="submenu__anchor">Ruta de Formación en Automatización</a></li>
                    </ul>
                </li>
            </ul>
        </div>


        <div class="login-container">
            <span class="btn-login">
                <i class="bi bi-person person-icon"></i>
                Iniciar Sesión
            </span>
            <i class="bi bi-search"></i>
        </div>
    </nav>

    <div class="banner">
        <!-- coming soon -->
    </div>
</header>