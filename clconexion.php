< ?php
//1.Definir clase
classconexion
{
      //2. Definicion de los atributos, pero la clase conexion no tiene atributos
      //3. Creacion del constucto, pero la clase conexion no necesita construccion
      //4. Metodos
      
functionconectar()
      {
      
      $conexion=mysqli_connect("localhost","root","","cultivos");
      ordie("No se pudo conectar :: MySQL Error ::".mysql_error());;
      return $conexion;
      }
      
            
}


?>