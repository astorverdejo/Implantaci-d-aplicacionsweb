<?php

$contador = 1;
$comprat=false;

if (isset($_COOKIE['contador'])){
$contador = $_COOKIE['contador'];
}

if(isset($_COOKIE['comprat'])){
$comprat =true;
}

setcookie("contador",$contador + 1 );


?>
<HTML>
Descomptes
<input type="text" name="descomptes" value="">
<button>Compra</button>


<?php
echo "<BR>Cantidad de accesos a esta página : $contador <BR>";
?>


</HTML>


<?php
if ($contador >= 5 && $contador < 10 && !$comprat) {
    echo 'Oferta exclusiva! Utilitza el codi BOTIGA20 per obtenir un 20% de descompte en les teves primeres compres a la botiga';
}
elseif ($contador >= 10 && !$comprat) {
    echo 'Oferta exclusiva sols per a tu! Utilitza el codi BOTIGA50 per obtenir un 50% de descompte en les teves primeres compres a la botiga';
}
else {
    echo 'No tens cap descompte';
}
?>