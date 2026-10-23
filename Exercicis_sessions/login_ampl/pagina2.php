<?php
session_start();
if (
    isset($_SESSION["usuari"])
) {
        $usuari = $_SESSION["usuari"];
?>
<html>

<body>
    <h1><?php echo htmlspecialchars($usuari); ?><a href="logout.php"><button>Deslogejar</button></a></h1>
    <p>Aquesta es la pagina d'informacio 2.</p>
</body>
</html>
<a href="login.php"><button>Tornar</button></a>
<?php
}
?>
