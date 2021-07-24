<!-- 
    SISTEMA ADMINISTRATIVO PROGRAMARDESDECERO.COM.AR    
    AUTOR: REGINA NOEMÍ MOLARES 
    eMail: info@reginamolares.com.ar
    JULIO 2021 

    CONEXIÓN A LA BASE DE DATOS
    Nombre de la DB: foxithos_administrativos
 -->
 
 <?php
$conexion = mysqli_connect("localhost", "root","","foxithos_administrativos");
#$conexion = mysqli_connect("localhost", "id15456491_root", "H_3zv5b9YN-wg|lM", "id15456491_campito");

# TEST CONEXION
/*  if (mysqli_connect_errno()){
    echo "Error de conexión";
} else {
    echo "Se conectó correctamente";
}     */