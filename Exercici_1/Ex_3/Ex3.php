<?php

date_default_timezone_set("Europe/Madrid");

if ( date("H")>= 5 && date("H")< 14){
    echo "La hora actual és " . date("H:i:s") . ". Bon dia";
}
elseif ( date("H")>= 14 && date("H")<= 19){
    echo "La hora actual és " . date("H:i:s") . ". Bona tarda";
}
else{
    echo "La hora actual és " . date("H:i:s") . ". Bona nit";
}
?>