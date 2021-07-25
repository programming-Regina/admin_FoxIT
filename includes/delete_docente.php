<!-- 
    SISTEMA ADMINISTRATIVO PROGRAMARDESDECERO.COM.AR    
    AUTOR: REGINA NOEMÍ MOLARES 
    eMail: info@reginamolares.com.ar
    JULIO 2021 

    HANDLER ELIMINAR DOCENTE
 -->

<?php
session_start();
include 'connect.php';

if (isset($_POST['btnborrar'])) {
    $id = $_GET['id'];
    echo $id;
    $query = "DELETE FROM docente WHERE id = $id";
    $resultado = mysqli_query($conexion, $query);
    if (!$resultado) {
        die("Falló");
    }

    # ENVÍO UN MENSAJE PARA MOSTRAR UN ALERTA DE ESTADO A LA PÁGINA INICIAL
    $_SESSION['message'] = 'Entrada eliminada';
    $_SESSION['message_color'] = 'danger';
}
header("Location: ../lista_docente.php");

?>