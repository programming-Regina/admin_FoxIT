<!-- 
    SISTEMA ADMINISTRATIVO PROGRAMARDESDECERO.COM.AR    
    por REGINA NOEMÍ MOLARES 
    eMail: info@reginamolares.com.ar
    JULIO 2021 

    EDITAR DATOS DE DOCENTE
-->

<?php
session_start();
include_once "includes/connect.php";
include_once "includes/functions.php";


if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $query = "SELECT * FROM hooman JOIN docente ON hooman.id = $id AND docente.id = $id;";
  $resultado = mysqli_query($conexion, $query);

  if (mysqli_num_rows($resultado) == 1) {
    $row = mysqli_fetch_array($resultado);
    $id = $row['id'];
    $apellido = html_entity_decode($row['apellido']);
    $nombre = html_entity_decode($row['nombre']);
    $celular = $row['celular'];
    $email1 = html_entity_decode($row['email1']);
    $email2 = html_entity_decode($row['email2']);
    $webmail = html_entity_decode($row['webmail']);
    $cv = html_entity_decode($row['cv']);
    $portfolio = html_entity_decode($row['portfolio']);
    $github = html_entity_decode($row['github']);
    $linkedin = html_entity_decode($row['linkedin']);
    $youtube = html_entity_decode($row['youtube']);
    $mercadopago = html_entity_decode($row['mercadopago']);
    $username = html_entity_decode($row['username']);
    $cbun = html_entity_decode($row['cbu_nro']);
    $cbua = html_entity_decode($row['cbu_alias']);
    $cafecito = html_entity_decode($row['cafecito']);
  }
}

if (isset($_POST['update'])) {
  /* $foto = subir_foto($fotop,"../img/docentes/", $_FILES['userfile']['size'],$_FILES['userfile']['name']); */

  $id = $_GET['id'];
  $nombre = asegurar($_POST['name']);
  $apellido = asegurar($_POST['surname']);
  $celular = asegurar($_POST['cellphone']);
  $email1 = asegurar($_POST['email']);
  $email2 = asegurar($_POST['alt_email']);
  $username = asegurar($_POST['username']);
  $clave = asegurar($_POST['password']);
  $webmail = asegurar($_POST['webmail']);
  $mercadopago = asegurar($_POST['mercadopago']);
  $cbu_nro = asegurar($_POST['cbunro']);
  $cbu_alias = asegurar($_POST['cbualias']);
  $cafecito = asegurar($_POST['cafecito']);
  $cv = asegurar($_POST['cv']);
  $portfolio = asegurar($_POST['portfolio']);
  $github = asegurar($_POST['github']);
  $linkedin = asegurar($_POST['linkedin']);
  $youtube = asegurar($_POST['youtube']);

  $query = "UPDATE hooman set 
        apellido = '$apellido', 
        nombre = '$nombre', 
        celular = '$celular',
        email1 = '$email1',
        email2 = '$email2',
        username = '$username',
        clave = '$clave', 
        rol = 3        
        WHERE id = $id";
  $query2 = "UPDATE docente set 
        webmail = '$webmail', 
        mercadopago = '$mercadopago', 
        cbu_nro = '$cbu_nro',
        cbu_alias = '$cbu_alias',
        cafecito = '$cafecito',
        cv = '$cv',
        portfolio = '$portfolio',
        github = '$github',
        linkedin = '$linkedin',
        youtube = '$youtube'        
        WHERE id = $id";
  mysqli_query($conexion, $query);
  mysqli_query($conexion, $query2);

  # ENVÍO UN MENSAJE PARA MOSTRAR UN ALERTA DE ESTADO A LA PÁGINA INICIAL
  $_SESSION['message'] = 'Los datos de ' . $nombre . ' ' . $apellido . ' fueron actualizados';
  $_SESSION['message_color'] = 'success';
  header("Location: lista_docente.php");
}
?>

<?php include_once("header.php"); ?>

<!-- ACTUALIZAR DATOS -->
<div class="container mt-4 text-center">
  <h2>Actualizar datos del docente</h2>

  <form action="edit_docente.php?id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data">


    <div class="form-group mt-5">
      <div class="input-group">
        <span class="input-group-text">Nombre</span>
        <input type="text" aria-label="Nombre" class="form-control" placeholder="Nombres" name="name" value="<?php echo $nombre; ?>">
        <span class="input-group-text">Apellido</span>
        <input type="text" aria-label="Apellido" class="form-control" placeholder="Apellidos" name="surname" value="<?php echo $apellido; ?>">
      </div>
    </div>
    <div class="form-group mt-3">
      <div class="input-group">
        <span class="input-group-text">Email</span>
        <input type="email" aria-label="email" class="form-control" placeholder="Email" name="email" value="<?php echo $email1; ?>">
        <span class="input-group-text">Email 2</span>
        <input type="email" aria-label="alt_email" class="form-control" placeholder="Email alternativo" name="alt_email" value="<?php echo $email2; ?>">
        <span class="input-group-text"><i class="fab fa-whatsapp"></i></span>
        <input type="text" aria-label="celular" class="form-control" placeholder="Celular" name="cellphone" value="<?php echo $celular; ?>">
      </div>
    </div>
    <div class="form-group mt-3">
      <div class="input-group">
        <span class="input-group-text">User</span>
        <input type="text" aria-label="username" class="form-control" placeholder="Nombre de usuario" name="username" value="<?php echo $username; ?>">
        <span class="input-group-text"><i class="fas fa-key"></i></span>
        <input type="password" aria-label="password" class="form-control" placeholder="Password" name="password" value="<?php echo $clave; ?>">
        <span class="input-group-text">Webmail</span>
        <input type="text" aria-label="webmail" class="form-control  no-rm" placeholder="Solicitar webmail (?)" name="webmail" data-bs-toggle="tooltip" data-bs-placement="top" title="Te enviaremos un email cuando demos de alta tu casilla" value="<?php echo $webmail; ?>">
        <span class="input-group-text" id="basic-addon2">@programardesdecero.com.ar</span>
      </div>
    </div>

    <div class="form-group mt-3">
      <div class="input-group">
        <span class="input-group-text">
          <img src="img/mp_icon.png" alt="Icono MercadoPago" width="35px">
        </span>
        <input type="text" aria-label="mercadopago" class="form-control" placeholder="MercadoPago" name="mercadopago" value="<?php echo $mercadopago; ?>">
        <span class="input-group-text"><img src="img/cafecito.png" alt="Icono MercadoPago" width="30px"> </span>
        <input type="text" aria-label="cafecito" class="form-control" placeholder="cafecito" name="cafecito" value="<?php echo $cafecito; ?>">
        <span class="input-group-text">Nro. CBU</span>
        <input type="text" aria-label="cbunro" class="form-control" placeholder="CBU Nro" name="cbunro" value="<?php echo $cbun; ?>">
        <span class="input-group-text">CBU Alias</span>
        <input type="text" aria-label="cbualias" class="form-control" placeholder="CBU Alias" name="cbualias" value="<?php echo $cbua; ?>">
      </div>
    </div>
    <div class="form-group mt-3">
      <div class="input-group">
        <span class="input-group-text">CV</span>
        <input type="text" aria-label="cv" class="form-control" placeholder="CV Online" name="cv" value="<?php echo $cv; ?>">
        <span class="input-group-text">Portfolio</span>
        <input type="text" aria-label="portfolio" class="form-control" placeholder="Portfolio" name="portfolio" value="<?php echo $portfolio; ?>">
        <span class="input-group-text"><i class="fab fa-github"></i></span>
        <input type="text" aria-label="github" class="form-control" placeholder="GitHub" name="github" value="<?php echo $github; ?>">
        <span class="input-group-text"><i class="fab fa-linkedin-in"></i></span>
        <input type="text" aria-label="linkedin" class="form-control" placeholder="LinkedIn" name="linkedin" value="<?php echo $linkedin; ?>">
        <span class="input-group-text"><i class="fab fa-youtube"></i></span>
        <input type="text" aria-label="youtube" class="form-control" placeholder="Canal de YouTube" name="youtube" value="<?php echo $youtube; ?>">
      </div>
    </div>

    <div class="container d-flex justify-content-center">
      <button class="btn tealblue-bg18 pinkborder w-25 mt-4" name="update"><i class="fas fa-user-edit"></i> Actualizar </button>
    </div>
</div>

</form>
</div>
<!-- FIN ACTUALIZAR DATOS -->

<?php include_once('footer.php'); ?>