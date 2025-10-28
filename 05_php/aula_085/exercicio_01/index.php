<?php


echo "<h1>Horário padrão: (" . date("H:i:s - d/m/Y") . ")</h1> <hr>"; 
date_default_timezone_set("Asia/Tokyo");
echo "<h1>Horário de Tóquio: (" . date("H:i:s - d/m/Y") . ")</h1>"; 
date_default_timezone_set("Europe/Lisbon");
echo "<h1>Horário de Lisboa: (" . date("H:i:s - d/m/Y") . ")</h1>"; 
date_default_timezone_set("America/Sao_Paulo");
echo "<h1>Horário de São Paulo: (" . date("H:i:s - d/m/Y") . ")</h1>";
date_default_timezone_set("America/New_York");
echo "<h1>Horário de Nova Iorque: (" . date("H:i:s - d/m/Y") . ")</h1>";

?>