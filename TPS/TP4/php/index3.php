<body>
<?php 
    echo date("l") ," " ,date("d") ," ",date("M") ," ",date("Y"),"<br>";
        
    
    
    echo date("l") , " ",date("d") , " ",date("G:i a"),"<br>";
    
    if(date("d")>=1 && date("d")<=7){
        echo "Primera semana del mes de ",date("M");
    }          
    if(date("d")>7 && date("d")<=14){
        echo "Segunda semana del mes de ",date("M");             
    }
                    
    if(date("d")>14 && date("d")<=21){
        echo "Tercera semana del mes de ",date("M");
    }
    if(date("d")>21 && date("d")<=31){
        echo "Cuarta semana del mes de ",date("M");
    }


?>
</body>







