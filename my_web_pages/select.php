<?php
// select
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'diplomado_bd';
$conexion = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   if(! $conexion)
      echo "conexion erronea" . "<BR>";
   else
      echo "conexion exitosa" . "<BR>";

 $sql = "SELECT clave, nombre from tabla1  WHERE clave='".$_POST['clave']."'";
 
$query = mysqli_query($conexion, $sql);

  if (mysqli_query($conexion, $sql)) {
      echo "Consulta exitosa" . "<br>";;
   } else {
      echo "Error en la consulta: " . mysqli_error($conexion);
   }

   $result = mysqli_query($conexion, $sql);

         if (mysqli_num_rows($result) > 0) {
            echo '<TABLE BORDER="3" CELLSPACING="5" WIDTH="150rem"> ';
            while($row = mysqli_fetch_assoc($result)) {
               echo "<TR><TD>".$row["clave"] . '</TD> <TD>' . $row["nombre"]. "</TD></TR>";
            }
            echo '</TABLE> ';
         } else {
            echo "0 resultados";
         }
         mysqli_close($conexion);
 ?>
