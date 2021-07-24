<!-- 
    SISTEMA ADMINISTRATIVO PROGRAMARDESDECERO.COM.AR    
    por REGINA NOEMÍ MOLARES 
    eMail: info@reginamolares.com.ar
    JULIO 2021 

    PÁGINA LOGIN USUARIOS
-->

<?php session_start();
include_once 'header.php';
include_once 'includes/connect.php';
?>
<div class="container text-center">
  <h1 class="mt-4">Bienvenido al área administrativa</h1>

  <form action="includes/login_process.php" method="POST">
    <div id="form-login" class="mt-5 pt-3 pb-5">
      <div class="form-group mt-5 w-50">
        <div class="input-group w-100">
          <div class="input-group-text">
            <i class="fas fa-user"></i>
          </div>
          <input type="text" class="form-control" id="user" placeholder="Usuario" name="user">
        </div>
      </div>

      <div class="form-group input-group mt-3 w-50">
        <div class="input-group w-100">
          <div class="input-group-text">
            <i class="fas fa-key"></i>
          </div>
          <input type="password" class="form-control " id="sent_pass" placeholder="Clave" name="sent_pass">
        </div>
      </div>

      <button type="submit" class="btn btn-dark tealblue-bg18 pinkborder mt-5" name="access" id='access'>Ingresar</button>

      <!-- MENSAJE SI LOGIN INCORRECTO -->
      <?php if (isset($_SESSION['message'])) {
      ?>
        <div class="alert alert-<?= $_SESSION['message_color']; ?> alert-dismissible fade show mt-3" role="alert">
          <?= $_SESSION['message']; ?> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>

          </button>
        </div>
      <?php session_destroy();
      } ?>
      <!-- FIN MENSAJE SI LOGIN INCORRECTO -->
    </div>
  </form>
</div>


<?php include('footer.php') ?>