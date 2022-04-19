<body>
    <?php
        $numero = 2;
        echo "<table border = 1","<br>";
        echo "<tr>Tabla del 2</tr>";
        for($i=1;$i<=10;$i++){
            $producto = $numero * $i;
            echo "<tr><tr>";
            echo "<td> $i x 2</td>";
            echo "<td> $producto </td>";       
        }       
        $numero=3;
        $i=1;
        echo "<table border = 1","<br>";
        echo "<tr>Tabla del 3</tr>";
        do{
            $producto = $numero * $i;
            echo "<tr><tr>";
            echo "<td> $i x 3</td>";
            echo "<td> $producto </td>";   
            $i++;
        }while($i<=10);

        $numero=7;
        $i=1;
        echo "<table border = 1","<br>";
        echo "<tr>Tabla del 7</tr>";
        while($i<=10 && $i>=1){
            $producto = $numero * $i;
            echo "<tr><tr>";
            echo "<td> $i x 7</td>";
            echo "<td> $producto </td>";   
            $i++;
        }          

    ?>
        
</body>


