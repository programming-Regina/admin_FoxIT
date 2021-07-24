<!-- 
    SISTEMA ADMINISTRATIVO PROGRAMARDESDECERO.COM.AR    
    por REGINA NOEMÍ MOLARES 
    eMail: info@reginamolares.com.ar
    JULIO 2021 

    ENTRADA USUARIOS
-->

<?php
include_once 'header.php';
?>
<div class="container text-center">
  <h1 class="mt-4">Bienvenido al área administrativa</h1>

  <div class="card-group mt-5">
    <div class="card" id="docente">
      <div class="card-body">
        <h5 class="card-title"><a href="lista_docente.php">Lista Docentes</a></h5>
        <h5 class="card-title">
        <a href="alta_docente.php">Nuevo Docente</h5></a>
      </div>
    </div>

    <div class="card" id="cursos">
      <div class="card-body">
        <h5 class="card-title">Cursos</h5>
        <h5 class="card-title">Comisiones</h5>
        <h5 class="card-title">Días</h5>
        <h5 class="card-title">Horarios</h5>
      </div>
    </div>

    <div class="card" id="usuarios">
      <div class="card-body">
        <h5 class="card-title">Permisos a usuarios</h5>
  
        <h5 class="card-title">Nuevo usuario</h5>
      </div>
    </div>
    <div class="card" id="alumnos">
      <div class="card-body">
        <h5 class="card-title">Alumnos</h5>
      </div>
    </div>
  </div>
</div>


<?php include('footer.php') ?>