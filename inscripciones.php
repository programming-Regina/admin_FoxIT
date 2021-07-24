<!-- 
    SISTEMA ADMINISTRATIVO PROGRAMARDESDECERO.COM.AR    
    por REGINA NOEMÍ MOLARES 
    eMail: info@reginamolares.com.ar
    JULIO 2021 

    PÁGINA PREINSCRIPCIÓN ALUMNOS
-->



  <div id="ppal" class="container-fluid d-flex flex-column w-75 h-100 bg-light justify-content-center align-items-center pb-3">

    <form>
      <div class="container-fluid w-100 orange text-center p-2">
        <h1>Formulario de inscripción</h1>

        <h3>Por favor, completa con tus datos</h3>
        <p>* Todos los campos son obligatorios</p>
      </div>
      <div class="form-group mt-2">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
          </div>
          <input type="text" aria-label="Nombre" class="form-control" placeholder="Nombres">
          <input type="text" aria-label="Apellido" class="form-control" placeholder="Apellidos">
        </div>
      </div>

      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="far fa-id-card"></i></span>
          </div>
          <input type="text" aria-label="dni" class="form-control" placeholder="DNI" name="dni">


          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-at"></i></span>
          </div>
          <input type="text" aria-label="email" class="form-control" placeholder="email" name="email">


          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fab fa-whatsapp"></i></span>
          </div>
          <input type="text" aria-label="celular" class="form-control" placeholder="celular" name="celular">

        </div>



      </div>
      <h3 class="text-center">Curso</h3>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <label class="input-group-text" for="curso"><i class="far fa-hand-pointer"></i></label>
          </div>
          <select class="custom-select" id="curso" name="curso">
            <option selected disabled>Selecciona</option>
            <option value="1">Diseño Web</option>
            <option value="2">Vue.JS</option>
            <option value="3">React.JS</option>
            <option value="3">Java</option>
          </select>

        </div>
      </div>
      <div class="form-group">
        <div class="input-group">


          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-info"></i></span>
          </div>
          <input type="text" id="comision" aria-label="comision" class="form-control" placeholder="Comisión: " disabled>
          <input type="text" aria-label="inicio" class="form-control" placeholder="Fecha de Inicio: " disabled>
          <input type="text" aria-label="precio" class="form-control" placeholder="Precio: " disabled>
        </div>
        <i>Los campos inhabilitados se chuparían los datos de la db</i>
      </div>
      <p class="bold text-center">Al completar el proceso de inscripción, recibirás un email con la información sobre tu curso. Por favor conservalo para que puedas consultarlo.    
      </p>



      <div class="text-center pt-3">

        <h3>Forma de Pago</h3>
        <img id="logomp" src="mplogo.png" alt="Logo MercadoPago">

        <div class="form-check pt-5 bold">          
            <input class="form-check-input" type="checkbox" value="" id="condiciones" required>
               
            <label class="form-check-label" for="condiciones">He leído y acepto los
             
              <a href="#">Términos y Condiciones</a></label>
        

        </div>
        <button type="submit" class="btn btn-dark w-50 mt-2">Confirmar inscripción</button>
      </div>
  </div>
  <form>
    </div>
    </div>

