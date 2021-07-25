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
    } 
} ?>

<div class="container p-1 mt-4">
    <div class="card  mx-auto" style="width: 30rem;">
        <!-- <?php echo $foto; ?> -->

        <div class="card-body">
            <h5 class="card-title bg-dark text-light text-center p-2"><?php echo $nombre; ?></h5>
            <div class="container text-light">
                <div class="row  mt-4">
                    <div class="col">
                        <p class="subt">Celular: <?php echo $celular; ?></p>
                        <p class="subt">Email: <?php echo $email1; ?></p>
                        <p class="subt">Email Alternativo: <?php echo $email2; ?></p>
                        <p class="subt">Webmail: <?php echo $webmail; ?></p>
                        <p class="subt">CV: <?php echo $cv; ?></p>
                        <p class="subt">Portfolio: <?php echo $portfolio; ?></p>
                        <p class="subt">GitHub: <?php echo $github; ?></p>
                        <p class="subt">LinkedIn: <?php echo $linkedin; ?></p>
                        <p class="subt">YouTube: <?php echo $youtube; ?></p>
                        <p class="subt">MercadoPago: <?php echo $mercadopago; ?></p>
                        <p class="subt">Nro. CBU: <?php echo $cbun; ?></p>
                        <p class="subt">CBU Alias: <?php echo $cbua; ?></p>
                        <p class="subt">Cafecito: <?php echo $cafecito; ?></p>
                    </div>
                </div>

                <div class="container d-flex justify-content-center"><a class="btn btn-sm btn-block btnc tealblue-bg18 pinkborder mt-3" href="lista_docente.php"><i class="fas fa-home"></i> Volver</a> </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once("footer.php");
?>