<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$productos = ["Manzana" => 1.2,"banana" => 0.5,"Naranja" => 0.8];
foreach($productos as $frutas => $frutas2){
    echo "Producto: <b>$frutas</b> | precio:  <b>$frutas2</b> <br>";
}
?>
</body>
</html>