
<?php
        function suma($a,$b){
        return $a+$b;
}
function suma2($d,$e){
        return $d+$e;
}
function dividie($a,$b,$d,$e){
        $resultadosum1=suma($a,$b);
        $resultadosuma2=suma2($d,$e);
        return $resultadosum1/$resultadosuma2;
}


#codigo que se ejecuta inmediatamente
$a = pow(4,2)/2 ;
$b = 1/sqrt(4);
$d = 3;
$e = 1/2+pow(4,2);
$c = dividie($a,$b,$d,$e);
$f = sqrt($c);
        ?>

        <html>
        <head>
            <title> Funciones</title>
    </head>
    <body>
        <p> <?php echo $c; ?> </p>
      </body>
    </html>