<?php
//modulo cultivo
//autor: Diego Tovar
//descarga variables

$id_cultivo=$_GET['id_cultivo'];
$area_cultivo_hectarea=$_GET['area_cultivo_hectarea'];
$porcentaje_area_cultivo=$_GET['porcentaje_area_cultivo'];
$cantidad_lotes_cultivados=$_GET['cantidad_lotes_cultivados'];
$cantidad_especimenes_sembrados=$_GET['cantidad_especimenes_sembrados'];
$boton=$_GET['boton'];

//vincula la clase
require_once("C:\xampp\htdocs\cultivo\clases\clcultivo.php");
//ejecutar condicional

switch($boton)
                                       
{
    case"nuevo";
        

        $objeto=newcultivo;
        $ejecutar=$objeto->insertar_cultivo($id_cultivo,$area_cultivo_hectarea,$porcentaje_area_cultivo,$cantidad_lotes_cultivados,$cantidad_especimenes_sembrados);
        header("Location:C:\xampp\htdocs\cultivo\index.html?msg".$ejecutar);
            
    break;
    
    case"editar";
                
                Echo"hizo click en editar"; 
    
    break;
}

?>