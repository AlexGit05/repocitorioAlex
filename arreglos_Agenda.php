<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$agenda = [];

$agenda[] = "Dentista a las 12h";
$agenda[] = "reunion familiar 13/09";
$agenda[] = "jugar solo leveling arise";
var_dump($agenda);
echo "<br>";
$cambio = 0;

$nueva_cita = "Dentista a las 16h";

$agenda[$cambio] = $nueva_cita;

var_dump($agenda);

echo "<br>";
?>
<ul>
<?php
//foreach($agenda as $unlist)
//echo "<li>$unlist</li>"
?>
</ul>

<ul>
<?php
foreach($agenda as $unlist):?>

<li style="color:red"><?php echo $unlist;?></li>
</div>
<?php endforeach;?> 
</ul>




</body>
</html>