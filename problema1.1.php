<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="problema1.1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3> Verduleria Pepe </h3>
<br>
<br>
<br>
<br>
    <h1> Consumo final </h1>
    <p> A continuación se detallan los totales de su compra</p>
    <?php 
    $bananas=2;
    $manzanas=1;
    $bananaskg=100;
    $manzanaskg=200;

    $totalbananas=$bananas*$bananaskg;
    $totalmanzana=$manzanas*$manzanaskg;
    $total=$totalbananas+$totalmanzana;
    ?>

    <div id="a1">
<ul><li>El precio del kilo de banana es: <?php echo $bananaskg;?></li>
<li>El precio del kilo de manzana es: <?php echo $manzanaskg;?></li></ul>
</div>

<div id="a2">
<ul><li><?php echo $bananas;?> kg de bananas $<?php echo $bananaskg;?></li>
<li><?php echo $manzanas;?> kg de manzana $<?php echo $manzanaskg;?></li></ul>
<echo>Total: <?php echo $total; ?> 
</div>


    

   
 
   

</body>
</html>