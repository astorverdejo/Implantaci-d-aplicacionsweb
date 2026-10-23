<?php
session_start();
if (isset($_POST["afegir50"], $_POST["50"])) {
$_SESSION["tv50"] = $_POST["50"];

    header("Location: index.html");
}

if (isset($_POST["afegir85"], $_POST["85"])) {
$_SESSION["tv85"] = $_POST["85"];

    header("Location: index.html");
}
if (isset($_POST["finalitzar"])) {
$tv50 = $_SESSION["tv50"]?? 0;
$tv85 = $_SESSION["tv85"]?? 0;
echo "Productes afegits a la cistella: TV 50\" $tv50, TV 85\" $tv85<br>";
echo "Preu total: " . ($tv50 * 339 + $tv85 * 968) . " €<br>";
}
?>
<html>
    <a href="logout.php"><button>Pagar</button></a>
</html>