<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $texto =
        "En el último rincón del universo, una estrella moribunda lanzó su último destello. Al hacerlo, despertó a un viajero estelar que dormía en una cápsula de tiempo. Al abrir los ojos, vio un planeta azul, un hogar olvidado. Y entonces supo que el fin de la estrella era su nuevo comienzo.";
        print_r($texto);
        $cantidad = explode(" ",$texto);
        print_r($cantidad);
        if(count($cantidad)>=99){
            echo "Tiene mas de 100 palabras";
        }
        else {
            echo "Tiene menos de 100 palabras";
        }
    ?>
</body>
</html>