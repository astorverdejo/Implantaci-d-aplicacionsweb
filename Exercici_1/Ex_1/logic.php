<?php

if (
    isset($_POST["nom"]) && isset ($_POST["cognoms"]) && isset ($_POST["email"]) && isset ($_POST["missatge"]) 
) {
        $nom = $_POST["nom"];
        $cognoms = $_POST["cognoms"];
        $email = $_POST["email"];
        echo "Missatge rebut,  $nom $cognoms . Gràcies per contactar. Et respondrem a  $email ." ;
}
?>