
<?php
        function suma($div,$d){
        return $div+$d;
}


$x=2;
$y=4;
$div=1/$x;
$d=($x+$y)/3;
$c=suma($div,$d);
$e= $c+(2*($x/$y));

function divicion($numer,$denomer){
return $numer/$denomer;
}

$x1=3;
$numer=(0.5*$x1)+((3+$x1)/2)*(2*pow($x1,2));
$denomer=(2+3)*$x1;
$z=divicion($numer,$denomer);

function suma2($ec,$ec1){
    return $ec+$ec1;
}
$t=pow((2*$x),2)+pow(3,2);
$ec=sqrt($t)/5;
$ec1=sqrt(pow($x,2));
$ds=suma2($ec,$ec1);


function incisod($frac,$fracraiz){
    return $frac/$fracraiz;
}
$frac=((1/2)+(1/4)+(1/8))*(pow($x,1/3));
$fracraiz=(sqrt($x)/2)+((3*pow($x,2))/4);
$ind=incisod($frac,$fracraiz);

$sud=((pow($y,2)/2)+(1/(sqrt($y))));
$sufr=3+((1/2)*(pow($y,3)));
$res=sqrt($sud/$sufr);
        ?>

        <html>
        <head>
            <title> Expresiones </title>
    </head>
    <body>
        <p> <img src="ina.jpeg" alt="Imagen" width="300" height="70" style="vertical-align: middle;"> = <?php echo  $e; ?> </p>
        <p> <img src="inb.jpeg" alt="Imagen" width="300" height="150" style="vertical-align: middle;"> = <?php echo $z; ?> </p>
        <p> <img src="inc.jpeg" alt="Imagen" width="300" height="150" style="vertical-align: middle;"> = <?php echo $ds; ?> </p>
        <p> <img src="ind.jpeg" alt="Imagen" width="300" height="150" style="vertical-align: middle;"> = <?php echo number_format($ind,3); ?> </p>
        <p> <img src="ine.jpeg" alt="Imagen" width="300" height="130" style="vertical-align: middle;"> = <?php echo number_format($res,4); ?> </p>
      </body>
    </html>