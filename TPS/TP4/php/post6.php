<?php 
if($_POST){
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $dni = $_POST["dni"];
    $mail = $_POST["mail"];
    $sexo = $_POST["sexo"];
    $calle = $_POST["calle"];
    $numero = $_POST["numero"];
    $viveEn = $_POST["viveEn"];
    $pais = $_POST["pais"];
    $provincia = $_POST["provincia"];
    $localidad = $_POST["localidad"];
    $edad = $_POST["edad"];
    $estado = $_POST["estado"];
    $hijos = $_POST["hijos"];
    $hobbies = $_POST["hobbies"];
    
    echo "<table border = 1 px solid";
    echo "style = margin-left=10px;margin-right=10px;";
    echo "<thead>
        <th>Nombre</th>
        <th>apellido</th>
        <th>dni</th>
        <th>mail</th>
        <th>sexo</th>
        <th>calle</th>
        <th>numero</th> 
        <th>vive en</th>
        <th>Pais</th>
        <th>provincia</th>
        <th>localidad</th>
        <th>Edad</th>
        <th>estado</th> 
        <th>hijos</th> 
        <th>hobbies</th
    </thead>";
    echo "<tr>
        <td>$nombre</td>
        <td>$apellido</td>
        <td>$dni</td>
        <td>$mail</td>
        <td>$sexo</td>
        <td>$calle</td>
        <td>$numero</td>
        <td>$viveEn</td>  
        <td>$pais</td>
        <td>$provincia</td>
        <td>$localidad</td>
        <td>$edad</td>
        <td>$estado</td>
        <td>$hijos</td>
        <td>$hobbies</td>    
    </tr>";
}

?>
