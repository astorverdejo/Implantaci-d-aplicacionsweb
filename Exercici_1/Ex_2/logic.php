<?php

if (
    isset($_POST["euro"]) 
) {
        $euro = $_POST["euro"];
        $dolar = $_POST["euro"]*1.14;
        echo "Aquesta quantitat $euro € són $dolar $." ;
}
?>