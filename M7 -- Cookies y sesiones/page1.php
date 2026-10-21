<?php

session_start(); // start the session
header("Cache-control: private");
$_SESSION = array();
session_destroy();
echo "<strong>Se ha destruído esta sesión </strong><br />";
if($_SESSION['name']){

echo “La sesión está todavía activa";

} else {

echo "Ok, la sesión ya no está activa! <br />";
echo "<a href=\"page1.php\"><< Vuelta atrás</a>";

}

?>