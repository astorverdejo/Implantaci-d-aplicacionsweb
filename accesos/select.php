<?php
$servidor ="localhost";
$usuario ="root";
$password ="";
$basedatos ="base1";

$conexion=mysqli_connect($servidor,$usuario,$password,$basedatos) or
        die("Problemas con la conexión");

$registros = mysqli_query($conexion, "SELECT nombre, email, codigocurso FROM alumnos")
    or die("Problemas en el SELECT" . mysqli_error($conexion));

while ($reg = mysqli_fetch_array($registros)) {
    echo "Nombre: " . $reg['nombre'] . "<br>";
    echo "Email: " . $reg['email'] . "<br>";
    echo "Codigo curso: " . $reg['codigocurso'] . "<br>";
    echo "<hr>";
}

mysqli_close($conexion);
?>
<a href="mysqli_connect.php"> <button>Volver</button> </a>