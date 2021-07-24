<!-- 
    SISTEMA ADMINISTRATIVO PROGRAMARDESDECERO.COM.AR    
    por REGINA NOEMÍ MOLARES 
    eMail: info@reginamolares.com.ar
    JULIO 2021 

    FUNCIONES VARIAS
-->

<?php

# Función que recibe un booleano y devuelve Sí/No
function es($arg)
{
    if ($arg == 1) {
        $retorno = 'Si';
    } else {
        $retorno = 'No';
    }
    return $retorno;
}

function asegurar($str_recibido)
{
    # ESCAPA (= agrega '\' antes de) LOS CARACTERES ', ", \ y de NULL
    $str_recibido = addslashes($str_recibido);
    # BORRA BACKSLASHES
    $str_recibido = stripslashes($str_recibido);
    # BORRA CARACTERES SOSPECHOSOS
    $str_recibido = str_replace("/", "", $str_recibido);
    $str_recibido = str_replace("'", "", $str_recibido);
    $str_recibido = str_replace(";", "", $str_recibido);
    $str_recibido = str_replace("<", "", $str_recibido);
    $str_recibido = str_replace(">", "", $str_recibido);
    $str_recibido = str_replace(':', "", $str_recibido);
    $str_recibido = str_replace('"', "", $str_recibido);
    return $str_recibido;
}

function monetiza($monto)
{
    $fmt = new NumberFormatter('es_AR', NumberFormatter::CURRENCY);
    echo $fmt->format($monto);
}
?>