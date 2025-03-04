<html>
    <head><title>ejercicio 5</title>
</head>
<body>
<?php
    
    $num1= 0;
    $num2= 1;
    echo"$num1,$num2";
    for($i=2;$i<=2048;$i++){
        $num3=$num1+$num2;
      
        echo",$num3";
        if($i%8==0){
            echo "<br>";
        }
        $num1=$num2;
        $num2=$num3;
    }
    ?>
</body>

</html>