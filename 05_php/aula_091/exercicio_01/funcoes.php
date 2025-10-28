<?php



function converter($temp){
    $k = $temp + 273.15;
    $f = ($temp * 1.8) + 32;
    echo "<br><br>$temp ºC<br><br>";
    echo "$f ºF<br><br>";
    echo "$k K<br><br>";
}

?>