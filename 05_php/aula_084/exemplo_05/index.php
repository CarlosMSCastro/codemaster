<?php


echo date("Y") . "<br>";
echo date("m") . "<br>";
echo date("d") . "<br>";

echo date("H") . "<br>";
echo date("i") . "<br>";
echo date("s") . "<br>";

echo "<hr>";

date_default_timezone_set("Europe/Lisbon");
echo date("H:i:s - d/m/Y") . "<br>";

date_default_timezone_set("Asia/Tokyo");
echo date("H:i:s - d/m/Y") . "<br>";

date_default_timezone_set("America/Sao_Paulo");
echo date("H:i:s - d/m/Y") . "<br>";






?>