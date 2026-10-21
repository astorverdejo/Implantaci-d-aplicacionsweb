<?php
$servidor ="localhost";
$usuario ="root";
$password ="";
$basedatos ="base1";

$conexion=mysqli_connect($servidor,$usuario,$password,$basedatos) or
        die("Problemas con la conexión");

if(isset($_REQUEST['nombre'],$_REQUEST['email'],$_REQUEST['codigocurso'])){
    mysqli_query($conexion, "insert into alumnos(nombre,email,codigocurso) "
            . "values ('$_REQUEST[nombre]','$_REQUEST[email]','$_REQUEST[codigocurso]')")
        or die ("Problemas en el select".mysqli_error($conexion));
    echo "El alumno fue dado de alta";
}

mysqli_close($conexion);
?>
<html>

<body>
    <form action =""method="post">
        <input type="text" name="nombre" value="">
        <input type="text" name="email" value="">
        <input type="text" name="codigocurso" value="">
        <input type="submit" value="Enviar">
    </form>
</body>
    <a href=select.php><button>Consultar</button></a>

</html>