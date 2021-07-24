<!-- 
    SISTEMA ADMINISTRATIVO PROGRAMARDESDECERO.COM.AR    
    por REGINA NOEMÍ MOLARES 
    eMail: info@reginamolares.com.ar
    JULIO 2021 

    LOGIN HANDLER
-->


<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

session_start();
include_once("connect.php");
include_once("functions.php");
/* include_once("head_login.php");  */

if (isset($_POST['access'])) {
  $user = asegurar($_POST['user']);
  $sent_pass = asegurar($_POST['sent_pass']);

  $query = "SELECT * FROM hooman WHERE username = '$user'";
  $resultado = mysqli_query($conexion, $query) or die("database error:" . mysqli_error($conexion));
  $row = mysqli_fetch_array($resultado);
  $id = $row['id'];
  $nom = $row['username'];
  $clave = $row['clave'];


  /* while ($row = mysqli_fetch_assoc($resultado)) { 
        echo $row['id']; echo $row['username']; echo $row['clave']; } */


  echo $sent_pass;
  echo $clave;

/*   if (password_verify($sent_pass, $clave)) {
   HASH FUNCTION */

    if ($sent_pass === $clave) {
      echo ('true sin hash');
      $_SESSION['username'] = $nom;
      echo "<script>location.href='../entrance.php';</script>";
    } else {
      echo ('false');
      $_SESSION['message'] = 'Datos incorrectos.';
      $_SESSION['message_color'] = 'danger';
      #echo "<script>location.href='../index.php'</script>";
      #header("Location: access.php");  
    }
  }
include('../footer.php'); ?>