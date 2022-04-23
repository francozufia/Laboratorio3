<?php
$numero = $_POST["numero"];
echo "<table border = 1","<br>";
echo "<tr>Tabla del $numero </tr>";
for($i=1;$i<=10;$i++){
    $producto = $numero * $i;
    echo "<tr><tr>";
    echo "<td> $i x $numero</td>";
    echo "<td> $producto </td>";       
}       
?>