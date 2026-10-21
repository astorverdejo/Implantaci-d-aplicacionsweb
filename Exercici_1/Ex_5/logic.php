<?php

if (
    isset($_POST["preu"]) && isset($_POST["IVA"])
) {
        $IVA = $_POST["IVA"];
        $preu = $_POST["preu"];

        if ($IVA == "IVAg"){
            echo "El preu final queda en " . ($preu *1.21).  " €";
        }

        if ($IVA == "IVAr"){
            echo "El preu final queda en " . ($preu *1.1).  " €";
        }

        if ($IVA == "IVAs"){
            echo "El preu final queda en " . ($preu *1.04).  "€";
        }
}
?>