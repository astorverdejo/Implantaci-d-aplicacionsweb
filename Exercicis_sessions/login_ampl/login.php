<?php
session_start();
if (
    isset($_POST["usuari"]) && isset($_POST["password"])
) {
        $usuari = $_POST["usuari"];
        $password = $_POST["password"];

        if ($usuari !== $password){
            header("Location: index.html");
            exit();
        }
    $_SESSION["usuari"] = $usuari;
}
?>

<html>
<head>
<a href="pagina1.php"><button>Pàgina d'informació 1</button></a>
<a href="pagina2.php"><button>Pàgina d'informació 2</button></a>
</head>
</html>
