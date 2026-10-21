<?php

if (isset($_POST["majoredat"],$_POST["idioma"], $_POST["moneda"])) 
    {
        $majoredat = $_POST["majoredat"];
        $idioma = $_POST['idioma'];
        $moneda = $_POST['moneda'];

        if ($majoredat == "no"){
            echo "No et podem vendre alcohol si ets menor d’edat.";
        }
        else{        

        if($idioma == "catala" && $moneda == "euro"){
            echo "T’oferim el vi Les Terrasses a un preu de 39 €<br>";
            echo "T’oferim el vi Felton Road a un preu de 47 €";
        }
        elseif($idioma == "catala" && $moneda == "lliure"){
            echo "T’oferim el vi Les Terrasses a un preu de 32.7 £<br>";
            echo "T’oferim el vi Felton Road a un preu de 39.41 £";
        }
        elseif($idioma == "catala" && $moneda == "dolar"){
            echo "T’oferim el vi Les Terrasses a un preu de 32.7 $<br>";
            echo "T’oferim el vi Felton Road a un preu de 52.8 $";
        }

        elseif($idioma == "angles" && $moneda == "euro"){
            echo "We offer the wine Les Terrases at the price of 39 €<br>";
            echo "We offer the wine Felton Road at the price of 47 €";
        }
        elseif($idioma == "angles" && $moneda == "lliure"){
            echo "We offer the wine Les Terrases at the price of 32.7 £<br>";
            echo "We offer the wine Felton Road at the price of 39.41 £";
        }
        elseif($idioma == "angles" && $moneda == "dolar"){
            echo "We offer the wine Les Terrases at the price of 32.7 $<br>";
            echo "We offer the wine Felton Road at the price of 52.8 $";
        }

        elseif($idioma == "espanyol" && $moneda == "euro"){
            echo "Te ofrecemos el vino Les Terrasses a un precio de 39 €<br>";
            echo "Te ofrecemos el vino Felton Road a un precio de 47 €";
        }
        elseif($idioma == "espanyol" && $moneda == "lliure"){
            echo "Te ofrecemos el vino Les Terrasses a un precio de 32.7 £<br>";
            echo "Te ofrecemos el vino Felton Road a un precio de 39.41 £";
        }
        elseif($idioma == "espanyol" && $moneda == "dolar"){
            echo "Te ofrecemos el vino Les Terrasses a un precio de 32.7 $<br>";
            echo "Te ofrecemos el vino Felton Road a un precio de 52.8 $";
        }

}}
?>