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

    <!-- inicio de sesión -->
    <div class="login-form-container">
        <form action="login.php" class="login-form">
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
                    <div class="news-left__img">
                        <img src="assets/img/news1.jpg" alt="imagen_noticia">
                    </div>
                    <div class="news-texts">
                        <h3 class="news-left__title">Bienvenidos a IzyAcademy</h3>
                        <p class="news-left__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam atque iure eligendi at architecto, voluptatibus eius sequi earum similique sit soluta sapiente, illum tempore odit.</p>
                    </div>
                </div>
            </div>

            <!-- columna derecha -->
            <div class="news-right-column">
                <div class="news-right__card">
                    <div class="news-right__img">
                        <img src="assets/img/news2.jpg" alt="imagen_noticia">
                    </div>
                    <div class="news-texts">
                        <h3 class="news-right__title">Generacion de comunidad</h3>
                        <p class="news-right__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et quae maxime nihil deserunt sed sunt at accusamus sequi doloremque facere.</p>
                    </div>
                </div>
                <div class="news-right__card">
                    <div class="news-right__img">
                        <img src="assets/img/news3.jpg" alt="imagen_noticia">
                    </div>
                    <div class="news-texts">
                        <h3 class="news-right__title">Transferencia de conocimiento</h3>
                        <p class="news-right__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et quae maxime nihil deserunt sed sunt at accusamus sequi doloremque facere.</p>
                    </div>
                </div>
                <div class="news-right__card">
                    <div class="news-right__img">
                        <img src="assets/img/news4.jpg" alt="imagen_noticia">
                    </div>
                    <div class="news-texts">
                        <h3 class="news-right__title">Certificación e insignias</h3>
                        <p class="news-right__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et quae maxime nihil deserunt sed sunt at accusamus sequi doloremque facere.</p>
                    </div>
                </div>
                <div class="news-right__card">
                    <div class="news-right__img">
                        <img src="assets/img/news5.jpg" alt="imagen_noticia" class="news-right__img">
                    </div>
                    <div class="news-texts">
                        <h3 class="news-right__title">Apropiación del conocimiento</h3>
                        <p class="news-right__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et quae maxime nihil deserunt sed sunt at accusamus sequi doloremque facere.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- sección aliados -->
    <section class="partners-section">
        <h2 class="section-title">Aliados</h2>
        <p class="partners__paragraph">Nuestros entrenamientos, procesos formativos y certificaciones cuentan con el respaldo de empresas que confían en nosotros.</p>

        <div class="partners">
            <div class="partner"><img src="https://i.pinimg.com/564x/08/f4/ec/08f4ec17a4354d7f61dbbcac9863912d.jpg" alt="partner_logo" class="partner_logo"></div>
            <div class="partner"><img src="https://i.pinimg.com/originals/49/dc/4d/49dc4d30262b6767f432c44ee62681a7.png" alt="partner_logo" class="partner_logo"></div>
            <div class="partner"><img src="https://i.pinimg.com/originals/2e/ce/06/2ece06acaf4854ebcd7c203ebe68b71d.png" alt="partner_logo" class="partner_logo"></div>
            <div class="partner"><img src="https://i.pinimg.com/originals/3f/22/4e/3f224e684f64ab2595dff1b0a6b08ee8.jpg" alt="partner_logo" class="partner_logo"></div>
            <div class="partner"><img src="https://i.pinimg.com/originals/f5/a2/bf/f5a2bf1085d40c8ece40aec882fd8303.jpg" alt="partner_logo" class="partner_logo"></div>
            <div class="partner"><img src="https://i.pinimg.com/originals/b0/6c/eb/b06ceb5fd9e9bb2c519f66f0a75c7762.jpg" alt="partner_logo" class="partner_logo"></div>
            <div class="partner"><img src="https://i.pinimg.com/originals/af/a5/2e/afa52e9b0ac2c82f657ebb5649838767.png" alt="partner_logo" class="partner_logo"></div>
            <div class="partner"><img src="https://i.pinimg.com/originals/cf/e4/59/cfe4593a81d29fb4690e126c7178842d.png" alt="partner_logo" class="partner_logo"></div>
        </div>
    </section>

    <!-- formulario de registro -->
    <section class="register-section">
        <div class="register-left-column">
            <img src="https://izyacademy.com/pluginfile.php/25341/block_cocoon_contact_form/images/1/Contact_Mesa%20de%20trabajo%201.png" alt="img_registro">
        </div>

        <div class="register-right-column">
            <form action="registro.php" class="register__form">
                <h3 class="section-title">Regístrate</h3>
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
                    <div class="form-group-chk">
                        <input type="checkbox" name="chk-terminos" id="terminos"> 
                        <label for="terminos">Acepto <span>términos y condiciones<span></label>
                    </div>

                    <div class="form-group-chk">
                        <input type="checkbox" name="chk-politica" id="politica">
                        <label for="politica">Acepto <span>Política de tratamiento de datos<span></label>
                    </div>
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
                    <img src="https://izyacademy.com/pluginfile.php/1/theme_edumy/footerlogo1/1704492337/izy_negativo.png" alt="footer_logo">
                </div>
                <h5 class="footer__bottom__text">Términos y Condiciones - Política Tratamiento de Datos</h5>
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