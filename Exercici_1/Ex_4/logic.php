<?php

if (isset($_POST["estil"])) 
    {
        $estil = $_POST["estil"];

        if ($estil == "clasica"){
            echo "Així que t'agrada la música clàsica. Bon gust músical.";
        }
        if ($estil == "reggeaton"){
            echo "Així que t'agrada el reggeaton. Bon gust músical.";
        }
        if ($estil == "tecno"){
            echo "Així que t'agrada la música tecno. Bon gust músical.";
        }
        if ($estil == "pop"){
            echo "Així que t'agrada la música pop. Bon gust músical.";
        }
        if ($estil == "rock"){
            echo "Així que t'agrada el rock. Bon gust músical.";
        }

        echo "" ;
}
?>