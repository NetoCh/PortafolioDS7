<?php

$provincia=$_POST['provincia'];


    if ($provincia==1) {
        echo "La provincia seleccionada es Bocas del Toro <br>";
        echo '<meta http-equiv="Refresh" content="5; url=https://es.wikipedia.org/wiki/Provincia_de_Bocas_del_Toro" />';

    } elseif ($provincia==2) {
        echo "La provincia seleccionada es Coclé <br>";
        echo '<meta http-equiv="Refresh" content="5; url=https://es.wikipedia.org/wiki/Provincia_de_Cocl%C3%A9" />';
    } elseif ($provincia==3) {
        echo "La provincia seleccionada es Colón <br>";
        echo '<meta http-equiv="Refresh" content="5; url=https://es.wikipedia.org/wiki/Provincia_de_Col%C3%B3n" />';
    } elseif ($provincia==4) {
        echo "La provincia seleccionada es Chiriquí <br>";
        echo '<meta http-equiv="Refresh" content="5; url=https://es.wikipedia.org/wiki/Provincia_de_Chiriqu%C3%AD" />';
    } elseif ($provincia==5) {
        echo "La provincia seleccionada es Darién <br>";
        echo '<meta http-equiv="Refresh" content="5; url=https://es.wikipedia.org/wiki/Provincia_de_Dari%C3%A9n" />';
    } elseif ($provincia==6) {
        echo "La provincia seleccionada es Herrera <br>";
        echo '<meta http-equiv="Refresh" content="5; url=https://es.wikipedia.org/wiki/Provincia_de_Herrera" />';
    } elseif ($provincia==7) {
        echo "La provincia seleccionada es Los Santos<br>";
        echo '<meta http-equiv="Refresh" content="5; url=https://es.wikipedia.org/wiki/Provincia_de_Los_Santos" />';
    } elseif ($provincia==8) {
        echo "La provincia seleccionada es Panamá <br>";
        echo '<meta http-equiv="Refresh" content="5; url=https://es.wikipedia.org/wiki/Provincia_de_Panam%C3%A1" />';
    } elseif ($provincia==9) {
        echo "La provincia seleccionada es Veraguas <br>";
        echo '<meta http-equiv="Refresh" content="5; url=https://es.wikipedia.org/wiki/Provincia_de_Veraguas" />';
    } elseif ($provincia==10) {
        echo "La provincia seleccionada es Guna Yala <br>";
        echo '<meta http-equiv="Refresh" content="5; url=https://es.wikipedia.org/wiki/Guna_Yala" />';
    } elseif ($provincia==11) {
        echo "La provincia seleccionada es Emberá-Wounaan <br>";
        echo '<meta http-equiv="Refresh" content="5; url=https://es.wikipedia.org/wiki/Comarca_Ember%C3%A1-Wounaan" />';
    } elseif ($provincia==12) {
        echo "La provincia seleccionada es Ngäbe-Buglé <br>";
        echo '<meta http-equiv="Refresh" content="5; url=https://es.wikipedia.org/wiki/Comarca_Ng%C3%A4be-Bugl%C3%A9" />';
    } elseif ($provincia==13) {
        echo "La provincia seleccionada es Panamá Oeste <br>";
        echo '<meta http-equiv="Refresh" content="5; url=https://es.wikipedia.org/wiki/Provincia_de_Panam%C3%A1_Oeste" />';
    }


    echo  '<img src="imagenes/time.gif" alt="Tiempo de espera" style="width:300px;height:325px;">';

/*
Redireccionar con PHP
<?php
header ("Location: http://www.utp.ac.pa");
?>

*/

?>