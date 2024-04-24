<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $amigos = [
    "Alexander ",
    "Agustin ",
    "Sebastian ",

    ];
    echo $amigos[0] . "se va de viaje";
    
    $ciudades = [
        "Montevideo ",
        "Paysandu",
        "San Jose ",
    
        ];
    echo "<br>" . $amigos[1]. "se va de viaje a " . $ciudades[0] . "<br>";
    
     
     shuffle( $amigos);
     foreach ($amigos as $unamigo){
        echo $unamigo . "<br>";
     }
    ?>


</body>
</html>