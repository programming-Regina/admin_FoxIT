<!-- 
    SISTEMA ADMINISTRATIVO PROGRAMARDESDECERO.COM.AR    
    por REGINA NOEMÍ MOLARES 
    eMail: info@reginamolares.com.ar
    JULIO 2021 

    VER, MODIFICAR Y ELIMINAR DOCENTE
-->

<?php
error_reporting(0);

session_start();
/* if (!isset($_SESSION['username'])) {
    header("location: ../sections/access.php");
} */

include_once("includes/connect.php");
include_once("header.php");
include_once("includes/functions.php");

$query = "SELECT * FROM hooman JOIN docente ON hooman.id = docente.id ORDER BY apellido;";
$row = mysqli_query($conexion, $query) or die("database error:" . mysqli_error($conexion));
?>

<div class="container mt-4 text-center" id="tabla-docentes">
    <h2>Listado de docentes</h2>

    <div class="col-md-6 float-right">
        <?php if (isset($_SESSION['message'])) {
        ?>
            <div class="alert alert-<?= $_SESSION['message_color']; ?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message']; ?> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        <?php
            unset($_SESSION['message']);
            unset($_SESSION['message_color']);
        } ?>
    </div>
    <div class="container card mt-5">
        <table id="tabla-docentes-m" class="table table-sm table-striped small mt-1 table-responsive">
            <thead class="lightc text-center">
                <tr>                   
                    <th class="align-middle">Nombre</th>
                    <th class="align-middle">Celular</th>
                    <th class="align-middle">Mail</th>
                    <!-- <th class="align-middle">Mail 2</th>
                    <th class="align-middle">Webmail</th>
                    <th class="align-middle">CV</th>
                    <th class="align-middle">Portfolio</th>
                    <th class="align-middle">GitHub</th>
                    <th class="align-middle">LinkedIn</th>
                    <th class="align-middle">YouTube</th> -->
                    <th class="align-middle">MercadoPago</th>
                  <!--   <th class="align-middle">CBU</th>
                    <th class="align-middle">Cafecito</th> -->
                </tr>
            </thead>
            <tbody>
                <?php while ($docente = mysqli_fetch_assoc($row)) {
                echo $docente;
                 ?>
                    <tr id="<?php echo $docente['id']; ?>">
                      <!--  html_entity_decode() y utf8_encode() resuelve acentos -->
                        <td class="text-center align-middle"><?php echo html_entity_decode($docente['apellido']). ', ' .  html_entity_decode($docente['nombre']); ?></td>
                        <td class="text-center align-middle"><?php echo $docente['celular']; ?></td>
                        <td class="text-center align-middle"><?php echo html_entity_decode($docente['email1']); ?></td>
                        <!-- <td class="text-center align-middle"><?php echo html_entity_decode($docente['email2']); ?></td>
                        <td class="text-center align-middle"><?php echo html_entity_decode($docente['webmail']); ?></td>
                        <td class="text-center align-middle"><?php echo html_entity_decode($docente['cv']); ?></td>
                        <td class="text-center align-middle"><?php echo html_entity_decode($docente['portfolio']); ?></td>
                        <td class="text-center align-middle"><?php echo html_entity_decode($docente['github']); ?></td>
                        <td class="text-center align-middle"><?php echo html_entity_decode($docente['linkedin']); ?></td>
                        <td class="text-center align-middle"><?php echo html_entity_decode($docente['youtube']); ?></td> -->
                        <td class="text-center align-middle"><?php echo html_entity_decode($docente['mercadopago']); ?></td>
                        <!-- <td class="text-center align-middle"><?php echo html_entity_decode($docente['cbu_nro']); ?></td>
                        <td class="text-center align-middle"><?php echo html_entity_decode($docente['cafecito']); ?></td>-->
                        <td class="text-center align-middle"> 
                            <h6>
                                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#gatoModal" data-whatever="<?php #echo $gato['id_gato']; 
                                                                                                                                                ?>">ojito</button> -->
                                <a href="view_docente.php?id=<?php echo $docente['id']; ?>" class="badge bg-info text-dark">Ver</a>
                                <a href="edit_docente.php?id=<?php echo $docente['id']; ?>" class="badge bg-warning text-dark">Editar</a>
                                <a href="#modal2" data-toggle="modal" class="badge bg-danger" onclick="mandaValor(<?php echo $docente['id']; ?>)">Borrar</a>
                            </h6>
                        </td>
                    </tr>
                <?php }  ?>
            </tbody>
        </table>
        <div class="container d-flex justify-content-center">
        <a class="btn btnc tealblue-bg18 pinkborder w-25 mt-4 mb-4" href="alta_docente.php">Alta nuevo docente</a></div>
    </div>
</div>

<!-- MODAL FICHA GATO -->
<div class="modal fade" id="gatoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    <form method="GET">
                        <input type="text" id="gatoid">
                    </form>
                    Historial
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?php
                $id = $_GET['gatoid'];
                echo "Hola " . $id;
                ?>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- FIN MODAL FICHA GATO -->

<!-- MODAL CONFIRMACION -->
<div class="modal" id="modal2" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">¡Atención!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="GET" action="../db/delete_gato.php">
                <input type="text" name="mandavalor" id="mandavalor" style="display: none;">

                <div class="modal-body">
                    <p>¿Confirma borrado? </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="submit" name="btnborrar">
                        Si. Borrar
                    </button>
                    <button name="cancel" class="btn btn-secondary" data-dismiss="modal">
                        No. Cancelar
                    </button>
            </form>
        </div>
    </div>
</div>
</div>
<!-- FIN MODAL CONFIRMACION -->
<script>
    function mandaValor(valor) {
        document.getElementById('mandavalor').value = valor;
    }
</script>
<?php include_once("footer.php"); ?>