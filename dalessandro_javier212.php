
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>
      body{
         text-align:center;
         background-color:black;
        color:white;
      }
    table{
background-color:rgba(53, 4, 22);
      margin :auto;
      padding:4px;
    
      
    }
    tr,td{
      background-color:rgba(4, 53, 35);
      border:7px;
      padding:4px;
    }
</style>

</head>
<body>

<?php
require_once "dalessandro_javierconectar.php";

$codigomateria=$_GET["cod"];

echo "    <h2>Tablas de alumnos segun codigo de materia $codigomateria</h2> ";
$datos="NroDeLegajo,NombreApellido";
$consulta="SELECT $datos FROM inscripcion WHERE CodigoDeMateria = $codigomateria ";
$resultado=mysqli_query($conexion,$consulta);
echo "<table border=3px;>";
echo "<tr>";
echo "<td> Legajo  </td><td>  Alumno   </td>" ;
echo"</tr> ";
while($fila=mysqli_fetch_array($resultado)){
   echo "<tr><td>".  $fila["NroDeLegajo"]  . "</td><td>" .  $fila["NombreApellido"] ." </td> ";
}
echo "</tr></table>";
mysqli_close($conexion);
?>
</body>
</html>


