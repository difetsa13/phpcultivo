<$php
//1. definicion de la clase
//Autor: Diego Tovar
require_once("clconexion.php");
classcultivo
{
    //2. definicion de los atributos      
        var$id_cultivo;
        var$area_cultivo_hectarea;
        var$porcentaje_area_cultivo;
        var$cantidad_lotes_cultivados;
        var$cantidad_especimenes_sembrados;
    //3.creacion del constructor
    functionconstructor($parea_cultivo_hectarea,$pporcentaje_area_cultivo,$pcantidad_lotes_cultivados,$pcantidad_especimenes_sembrados)
    {
        $this->$id_cultivo=$pid_cultivo;
        $this->$area_cultivo_hectarea=$parea_cultivo_hectarea;
        $this->$porcentaje_area_cultivo=$pporcentaje_area_cultivo;
        $this->$cantidad_lotes_cultivados=$pcantidad_lotes_cultivados;
        $this->$cantidad_especimenes_sembrados=$pcantidad_especimenes_sembrados;
    }
    //metodos del diagrama de clases
    
    functioninsertar_cultivo($parea_cultivo_hectarea,$pporcentaje_area_cultivo,$pcantidad_lotes_cultivados,$pcantidad_especimenes_sembrados)
    {
        
        $objeto=newconexion;
        $conex=$objeto->conectar();    
        $sql="CALL insertar_cultivo ('$parea_cultivo_hectarea,$pporcentaje_area_cultivo,$pcantidad_lotes_cultivados,$pcantidad_especimenes_sembrados')";
        $ejecutar=mysqli_query($conex,$sql);
        
        if($ejecutar)
        {
            $msg="Registro insertado correctamente con los datos nombre :'.$parea_cultivo_hectarea.' y '.$pporcentaje_area_cultivo.' y '.$pcantidad_lotes_cultivados.' y '.$pcantidad_especimenes_sembrados.'";
            return$msg;
        }
        else
        {
            echo"Has tenido el siguiente error : <br/>".mysql_error();
        }
    }
    functionmodificar_cultivo($parea_cultivo_hectarea,$pporcentaje_area_cultivo,$pcantidad_lotes_cultivados,$pcantidad_especimenes_sembrados)
    {
    
    }
    functionlistar_cultivo()
    {
    
    }
    functionbuscar_cultivo()
    {
    
    }
}
      
      
$>
      