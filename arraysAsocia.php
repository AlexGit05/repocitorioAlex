<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //primera parte!!!
$persona = ["nombre" => "Arthur","apellido" => "Morgan","edad" => 30, "ciudad" => "Montevideo","sexo" => "Hombre"];


// segunda parte!!!
// $nuevaPersona="Jhon";
// $persona ["nombre"] = $nuevaPersona; otra manera de hacer lo mismo :)
$persona["nombre"] = "Jhon";
$persona["apellido"] = "Marston";
$persona["ciudad"] = "Paysandu";

//tercera parte!!!
$persona["auto"]=false;
$persona["vacas"]=true;

if ($persona["auto"]== false){
$persona["auto"]="sin auto";
}else {
$persona["auto"]="con auto";
}

if ($persona["vacas"]== true){
    $persona["vacas"]="voy a vacaciones";
    }else {
    $persona["vacas"]="No voy a vacaciones";
    }
    

$persona["vacaciones"]=true;
echo "<p> Mi nombre es <b>{$persona["nombre"]}</b> <b>{$persona["apellido"]}</b> tengo  <b>{$persona["edad"]}</b> años , vivo en  <b>{$persona["ciudad"]}</b>
y soy <b>{$persona["sexo"]}</b> y ando <b>{$persona["auto"]}</b>, <b>{$persona["vacas"]}</b></p>";
?>

 
</body>
</html>