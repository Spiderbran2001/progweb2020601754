<?php
ini_set("display_errors",E_ALL);
include_once "Persona.php";
$lista = [
    new Persona("Fulano","1969-11-13","5595999509"),
    new Persona("vaka","1977-5-11","550987657"),
    new Persona("juan","1988-6-23","557645289"),
    new Persona("Alfonso","1999-1-22","5596797516"),
    new Persona("Brandon","1968-7-28","550976189"),
    new Persona("Viera","1966-8-30","5567894653"),
    new Persona("Valdepeña","1999-9-27","5567509721"),
    new Persona("Machorro","1964-10-02","556778393"),
    new Persona("Alex","1959-11-04","5543783935"),
    new Persona("Carlos","1989-5-07","55356484"),
    new Persona("Victor","1979-9-06","557584903"),
];

?>
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Laita de personas</title>
<style>
    td{
        background-color:cyan;
    }
    </style>
</head>
        <body>
         <h1>Lista de Personas</h1>
         <table border>
         <thead>
         </thead>   
            <tr>
<th>Nombre</th>
<th>Fecha de Nacimineto</th>
<th>Edad Actual</th>
<th>Telefono</th>

</tr>

<tbody>
    <?php foreach($lista as $p):?>
        <tr>
<td><?php echo $p->getNombre()?></td>
<td><?php echo $p->getFecNac()?></td>
<td><?php echo $p->getEdad()?></td>
<td><?php echo $p->getTel()?></td>
    </tr>
<?php endforeach ?>
</tbody>
</table>
</body>
    </head>
</html>
