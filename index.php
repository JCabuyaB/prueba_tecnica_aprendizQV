<?php
require_once('includes/conexion.php');

if (isset($_SESSION['user_id'])) {
    $records = $conexion->prepare('SELECT id_usuario, correo, pass FROM usuarios WHERE id_usuario = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }


//registro
$message = '';

if (!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['correo']) && !empty($_POST['user-pass']) && !empty($_POST['user-pass2'])) {
    $password1 = $_POST['user-pass'];
    $password2 = $_POST['user-pass2'];
    if ($password1 == $password2) {
        $sql = "INSERT INTO usuarios (nombre, apellidos, correo, pass) values(:nombre, :apellidos, :correo, :pass)";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':nombre', $_POST['nombre']);
        $stmt->bindParam(':apellidos', $_POST['apellidos']);
        $stmt->bindParam(':correo', $_POST['correo']);
        // encriptar
        $pass = password_hash($_POST['user-pass'], PASSWORD_BCRYPT);
        $stmt->bindParam(':pass', $pass);

        if ($stmt->execute()) {
            $message = 'Registrado con éxito.';
        } else {
            $message = 'No se logró registrar.';
        }
    } else {
        $message = 'Las contraseñas no coinciden.';
    }
}
?>


<!-- header -->
<?php require_once 'includes/header.php' ?>
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
        <form action="index.php" class="register__form" method="POST">
            <h3 class="section-title">Regístrate</h3>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" pattern="[A-Za-z ]+">
            </div>

            <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" id="apellidos" pattern="[A-Za-z ]+">
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

            <input type="submit" value="Registrarse" disabled id="btn-register">

            <?php if ($message != "" || $error != '') : ?>
                <div class="form-msj-register">
                    <p><?=$message?></p>
                    <p><?=$error?></p>
                </div>
            <?php endif; ?>
        </form>
    </div>
</section>

<!-- footer -->
<?php require_once 'includes/footer.php' ?>