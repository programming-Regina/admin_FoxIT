<!-- 
    SISTEMA ADMINISTRATIVO PROGRAMARDESDECERO.COM.AR    
    AUTOR: REGINA NOEMÍ MOLARES 
    eMail: info@reginamolares.com.ar
    JULIO 2021 

    PÁGINA DE ALTA DE DOCENTES 
 -->

<?php include_once 'header.php'; ?>

<div class="container">
  <form>
    <div class="container-fluid w-100 orange text-center p-2">
      <h2 class="mt-3">Alta de Docentes</h2>
      <div class="form-group mt-5">
        <div class="input-group">
          <span class="input-group-text"><i class="fas fa-user"></i></span>
          <input type="text" aria-label="Nombre" class="form-control" placeholder="Nombres" name="name">
          <input type="text" aria-label="Apellido" class="form-control" placeholder="Apellidos" name="surname">
        </div>
      </div>
      <div class="form-group mt-3">
        <div class="input-group">
          <span class="input-group-text"><i class="fas fa-at"></i></span>
          <input type="email" aria-label="email" class="form-control" placeholder="Email" name="email">
          <span class="input-group-text"><i class="fas fa-at"></i></span>
          <input type="email" aria-label="alt_email" class="form-control" placeholder="Email alternativo" name="alt_email">
          <span class="input-group-text"><i class="fab fa-whatsapp"></i></span>
          <input type="text" aria-label="celular" class="form-control" placeholder="Celular" name="cellphone">
        </div>
      </div>
      <div class="form-group mt-3">
        <div class="input-group">
          <span class="input-group-text"><i class="fas fa-user"></i></span>
          <input type="text" aria-label="username" class="form-control" placeholder="Nombre de usuario" name="username">
          <span class="input-group-text"><i class="fas fa-key"></i></span>
          <input type="password" aria-label="password" class="form-control" placeholder="Password" name="password">
          <span class="input-group-text"><i class="far fa-id-card"></i></span>
          <input type="text" aria-label="webmail" class="form-control  no-rm" placeholder="Solicitar webmail (?)" name="webmail" data-bs-toggle="tooltip" data-bs-placement="top" title="Te enviaremos un email cuando demos de alta tu casilla">
          <span class="input-group-text" id="basic-addon2">@programardesdecero.com.ar</span>
        </div>
      </div>

      <div class="form-group mt-3">
        <div class="input-group">
          <span class="input-group-text"><i class="fas fa-piggy-bank"></i></span>
          <input type="text" aria-label="mercadopago" class="form-control" placeholder="MercadoPago" name="mercadopago">
          <span class="input-group-text"><i class="fas fa-piggy-bank"></i></span>
          <input type="text" aria-label="cafecito" class="form-control" placeholder="cafecito" name="cafecito">
          <span class="input-group-text"><i class="fas fa-university"></i></span>
          <input type="text" aria-label="cbunro" class="form-control" placeholder="CBU Nro" name="cbunro">
          <span class="input-group-text"><i class="fas fa-university"></i></span>
          <input type="text" aria-label="cbualias" class="form-control" placeholder="CBU Alias" name="cbualias">
        </div>
      </div>
      <div class="form-group mt-3">
        <div class="input-group">
          <span class="input-group-text"><i class="fas fa-portrait"></i></span>
          <input type="text" aria-label="cv" class="form-control" placeholder="CV Online" name="cv">
          <span class="input-group-text"><i class="fas fa-globe"></i></span>
          <input type="text" aria-label="portfolio" class="form-control" placeholder="Portfolio" name="portfolio">
          <span class="input-group-text"><i class="fab fa-github"></i></span>
          <input type="text" aria-label="github" class="form-control" placeholder="GitHub" name="github">
          <span class="input-group-text"><i class="fab fa-linkedin-in"></i></span>
          <input type="text" aria-label="linkedin" class="form-control" placeholder="LinkedIn" name="linkedin">
          <span class="input-group-text"><i class="fab fa-youtube"></i></span>
          <input type="text" aria-label="youtube" class="form-control" placeholder="Canal de YouTube" name="youtube">
        </div>
      </div>
      <div class="text-center pt-3">
        <button type="submit" class="btn tealblue-bg18 pinkborder w-25 mt-4"><i class="fas fa-user-plus"></i> Confirmar alta</button>
      </div>
    </div>
</div>
<form>
<?php include_once 'footer.php'; ?>