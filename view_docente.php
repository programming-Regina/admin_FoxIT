<?php
include_once("includes/connect.php");
include_once("header.php");
include_once("includes/functions.php");


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM hooman JOIN docente ON hooman.id = $id AND docente.id = $id;";
    
    $resultado = mysqli_query($conexion, $query);

    if (mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_array($resultado);
        $id = $row['id'];
        $nombre = html_entity_decode($row['apellido']). ', ' .  html_entity_decode($row['nombre']);
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
        $cbun = html_entity_decode($row['cbu_nro']); 
        $cbua = html_entity_decode($row['cbu_alias']);
        $cafecito = html_entity_decode($row['cafecito']);
    } else {echo "ERROR";}
} ?>

<div class="container p-1 mt-4">
    <div class="card  mx-auto" style="width: 30rem;">
        <!-- <?php echo $foto; ?> -->

        <div class="card-body">
            <h5 class="card-title bg-dark text-light text-center p-2"><?php echo $nombre; ?></h5>
            <div class="container text-light">
                <div class="row">
                    <div class="col">
                        <p class="subt">Celular:</span> <?php echo $celular; ?></p>
                        <p class="subt">Email:</span> <?php echo $email1; ?></p>
                        <p class="subt">Email Alternativo:</span> <?php echo $email2; ?></p>
                        <p class="subt">Webmail:</span> <?php echo $webmail; ?></p>
                        <p class="subt">CV:</span> <?php echo $cv; ?></p>
                        <p class="subt">Portfolio:</span> <?php echo $portfolio; ?></p>
                        <p class="subt">GitHub:</span> <?php echo $github; ?></p>
                        <p class="subt">LinkedIn:</span> <?php echo $linkedin; ?></p>
                        <p class="subt">YouTube:</span> <?php echo $youtube; ?></p>
                        <p class="subt">MercadoPago:</span> <?php echo $mercadopago; ?></p>
                        <p class="subt">Nro. CBU:</span> <?php echo $cbun; ?></p>
                        <p class="subt">CBU Alias:</span> <?php echo $cbua; ?></p>
                        <p class="subt">Cafecito:</span> <?php echo $cafecito; ?></p>
                    </div>
                </div>
<!--                 <div class="row">
                    <div class="col">
                        <p class="card-text"><span class="subt">Historia:</span> <?php echo $hist; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col card-text"><span class="subt">Sexo:</span> <?php echo $sexo; ?></div>
                    <div class="col card-text"><span class="subt">Edad:</span> <?php echo $agno; ?></div>
                </div>
                <div class="row">
                    <div class="col card-text"><span class="subt">Fecha de ingreso:</span> <?php echo $ingreso; ?></div>
                    <div class="col card-text"><span class="subt">Cuidador: </span><?php echo $mentor; ?></div>
                </div>
                <div class="row">
                    <div class="col"><span class="subt">Vacunado: </span><?php echo $vac; ?></div>
                    <div class="col"><span class="subt">Desparasitado: </span><?php echo $desp; ?></div>
                </div>
                <div class="row">
                    <div class="col"><span class="subt">Castrado: </span><?php echo $cast; ?></div>
                    <div class="col"><span class="subt"></div>

                </div>
                <div class="row">
                    <div class="col"><span class="subt">Apto Adopción?: </span><?php echo $adoptable; ?></div>
                    <div class="col"><span class="subt">Adoptado: </span><?php echo $adoptado; ?></div>

                </div> --> 
                <div class="container d-flex justify-content-center"><span class="subt"></span><a class="btn btn-sm btn-block bg-warning text-dark mt-3" href="lista_docente.php"><i class="fas fa-home"></i> Volver</a> </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once("footer.php");
?>