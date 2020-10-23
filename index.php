<!DOCTYPE html>
<html lang="es">
   
    <head>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width,user_scalable=no,initial-scale=1,maxium-scale=1,minimun-scale=1"
        <title>CULTIVO</title>
        <?php
        echo$msg=$_GET['msg'];
        ?>	
    </head>
    
    <body>
       
   
		<form action="C:\xampp\htdocs\cultivo\controlador\cocultivo.php" method="GET">
            Codigo Cultivo: <input type="text" name="id_cultivo" id="id_cultivo"> <br/>
            Area del Cultivo HA: <input type="text" name="	area_cultivo_hectarea" id="	area_cultivo_hectarea"> <br/>
            Porcentaje de Area del Cultivo: <input type="text" name="porcentaje_area_cultivo" id="porcentaje_area_cultivo"> <br/>
            Cantidad de Lotes Cultivados: <input type="text" name="cantidad_lotes_cultivados" id="cantidad_lotes_cultivados"> <br/>
            Cantidad de Especimenes Sembrados: <input type="text" name="cantidad_especimenes_sembrados" id="cantidad_especimenes_sembrados"> <br/>
            <input type="submit" name="boton" id="boton" value="Nuevo">
            <input type="submit" name="boton" id="boton" value="Eliminar">
            <input type="submit" name="boton" id="boton" value="Enviar">
        
        </form>
		
    </body>

</html>
