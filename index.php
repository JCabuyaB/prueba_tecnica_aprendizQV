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
            <!-- logo -->
            <div class="navbar__logo">
                <img src="https://izyacademy.com/pluginfile.php/1/theme_edumy/headerlogo1/1704492337/Logo%20izyacademy%20transparente2022.png" alt="Logo">
            </div>
            
            <!-- menu -->
            <ul class="menu">
                <li class="menu__item">Inicio</li>
                <li class="menu__item">Rutas De Formación
                    <!-- submenu -->
                    <ul class="submenu">
                        <li class="submenu__item">Científico De Datos</li>
                        <li class="submenu__item">Ruta de Formación En .NET</li>
                        <li class="submenu__item">Ruta de Formación en Automatización</li>
                    </ul>
                </li>
            </ul>

            <div class="login-container">
                <!-- person -->
                <span class="btn-login">
                    Iniciar Sesión
                </span>
                <!-- search -->
            </div>
        </nav>

        <div class="banner">
            <!-- coming soon -->
        </div>
    </header>

    <!-- inicio de sesión -->
    <div class="login-container">
        <form action="login.php" class="login__form">
            <h3 class="form__title">Inicie sesión en su cuenta</h3>

            <!-- campos -->
            <input type="text" name="user" placeholder="Nombre de Usuario">
            <input type="password" name="password" placeholder="Contraseña">

            <input type="submit" value="Acceder">

            <!-- botón de cierre de formulario  -->
            <span class="form__btn-close">&times;</span>
        </form>
    </div>
    
    <!-- contenido -->
    <!-- sección de noticias -->
    <section class="news-section">
        <h2 class="section-title">Novedades</h2>

        <div class="news">
            <!-- columna izquierda -->
            <div class="news-left-column">
                <div class="news-left__card">
                    <img src="" alt="imagen_noticia" class="news-left__img">
                    <div class="news-texts">
                        <h3 class="news-left__title"></h3>
                        <p class="news-left__text"></p>
                    </div>
                </div>
            </div>

            <!-- columna derecha -->
            <div class="news-right-column">
                <div class="news-right__card">
                    <img src="" alt="imagen_noticia" class="news-right__img">
                    <div class="news-texts">
                        <h3 class="news-right__title"></h3>
                        <p class="news-right__text"></p>
                    </div>
                </div>
                <div class="news-right__card">
                    <img src="" alt="imagen_noticia" class="news-right__img">
                    <div class="news-texts">
                        <h3 class="news-right__title"></h3>
                        <p class="news-right__text"></p>
                    </div>
                </div>
                <div class="news-right__card">
                    <img src="" alt="imagen_noticia" class="news-right__img">
                    <div class="news-texts">
                        <h3 class="news-right__title"></h3>
                        <p class="news-right__text"></p>
                    </div>
                </div>
                <div class="news-right__card">
                    <img src="" alt="imagen_noticia" class="news-right__img">
                    <div class="news-texts">
                        <h3 class="news-right__title"></h3>
                        <p class="news-right__text"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- sección aliados -->
    <section class="partners-section">
        <h2 class="section-title">Aliados</h2>

        <div class="partner"><img src="" alt="partner_logo" class="partner_logo"></div>
        <div class="partner"><img src="" alt="partner_logo" class="partner_logo"></div>
        <div class="partner"><img src="" alt="partner_logo" class="partner_logo"></div>
        <div class="partner"><img src="" alt="partner_logo" class="partner_logo"></div>
        <div class="partner"><img src="" alt="partner_logo" class="partner_logo"></div>
        <div class="partner"><img src="" alt="partner_logo" class="partner_logo"></div>
        <div class="partner"><img src="" alt="partner_logo" class="partner_logo"></div>
        <div class="partner"><img src="" alt="partner_logo" class="partner_logo"></div>
    </section>

    <!-- formulario de registro -->
    <section class="register-section">
        <div class="register-left-column">
            <img src="" alt="img_registro">
        </div>

        <div class="register-right-column">
            <h3 class="section-title">Regístrate</h3>

            <form action="registro.php" class="register__form">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre">
                </div>

                <div class="form-group">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos" id="apellidos">
                </div>

                <div class="form-group">
                    <label for="correo">Correo electrónico</label>
                    <input type="email" name="correo" id="correo">
                </div>

                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" name="user-pass" id="password">
                </div>

                <div class="form-group">
                    <label for="confirm-password">Confirmar contraseña</label>
                    <input type="password" name="user-pass2" id="confirm-password">
                </div>

                <div class="form-group">
                    <input type="checkbox" name="chk-terminos" id="terminos"> 
                    <label for="terminos">Acepto términos y condiciones</label>

                    <input type="checkbox" name="chk-politica" id="politica">
                    <label for="politica">Política de tratamiento de datos</label>
                </div>

                <input type="submit" value="Registrarse">
            </form>
        </div>
    </section>

    <!-- footer -->
    <footer class="footer">
        <div class="footer__columns">
            <div class="footer__column-big">
                <h4 class="footer__column-title">Contáctanos</h4>

                <ul class="footer__list">
                    <li class="footer__item--dark">E-mail: comercial@qvision.us</li>
                    <li class="footer__item--dark">Whatsapp: +300 255 02 65</li>
                    <li class="footer__item">Comunícate con nosotros</li>
                </ul>
            </div>

            <div class="footer__column">
                <h4 class="footer__column-title">Categorías de Cursos</h4>

                <ul class="footer__list">
                    <li class="footer__item">Desarrollo</li>
                    <li class="footer__item">Metodología de Pruebas</li>
                    <li class="footer__item">Pruebas Funcionales</li>
                    <li class="footer__item">Pruebas no Funcionales</li>
                    <li class="footer__item">DevOps</li>
                    <li class="footer__item">Cloud</li>
                    <li class="footer__item">Automatización</li>
                </ul>
            </div>

            <div class="footer__column">
                <h4 class="footer__column-title">Certificaciones</h4>

                <ul class="footer__list">
                    <li class="footer__item">Scrum Master</li>
                    <li class="footer__item">Scrum Product Owner</li>
                    <li class="footer__item">Scrum Developer</li>
                    <li class="footer__item">Agile Coach</li>
                    <li class="footer__item">Design Thinking</li>
                    <li class="footer__item">Kanban</li>
                    <li class="footer__item">OKR</li>
                    <li class="footer__item">DevOps</li>
                </ul>
            </div>

            <div class="footer__column">
            <h4 class="footer__column-title">Q-Vision Technologies</h4>

                <ul class="footer__list">
                    <li class="footer__item">Desarrollo de Software</li>
                    <li class="footer__item">Aseguramiento de Calidad</li>
                    <li class="footer__item">Automatización de Procesos con RPA</li>
                    <li class="footer__item">Talento TI</li>
                    <li class="footer__item">Gestión Inteligente de Datos</li>
                </ul>
            </div>

            <div class="footer__column-big">
                <h4 class="footer__column-title">Soporte</h4>

                <ul class="footer__list">
                    <li class="footer__item--dark">Si tienes inconvenientes o dudas, contáctanos al correo</li>
                    <li class="footer__item--dark">izyacademy@qvision.us</li>
                </ul>
            </div>
        </div>

        <!-- parte inferior del footer -->
        <div class="footer__bottom">
            <div class="footer__bottom-top">
                <div class="footer__bottom-logo">
                    <img src="" alt="footer_logo">
                </div>
                <h5 class="footer__bottom">Términos y Condiciones - Política Tratamiento de Datos</h5>
                <div class="footer__botom--social">
                    <a href="" class="social__anchor"><i class="bi bi-facebook"></i></a>
                    <a href="" class="social__anchor"><i class="bi bi-twitter"></i></a>
                    <a href="" class="social__anchor"><i class="bi bi-instagram"></i></a>
                    <a href="" class="social__anchor"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            <div class="footer__bottom-down">
                <p>Copyright &copy; 2024 IzyAcademy Marca Registrada By Qvision Technologies.</p>
            </div>
        </div>
    </footer>
</body>
</html>