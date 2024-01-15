<?php
require_once 'includes/conexion.php';
session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: index.php");
}

if (!empty($_POST['login-user']) && !empty($_POST['login-pass'])) {
  $records = $conexion->prepare('SELECT id_usuario, nombre, apellidos, correo, pass FROM usuarios WHERE correo = :email');
  $records->bindParam(':email', $_POST['login-user']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  $message_login = '';

  if (count($results) > 0 && password_verify($_POST['login-pass'], $results['pass'])) {
    $_SESSION['user_id'] = $results['id_usuario'];
    header("Location: index.php");
  } else {
    header("Location: index.php");
  }
}

?>
