<?php
$semana = [
    "Lunes ",
    "Martes ",
    "Miercoles ",
    "Jueves ",
    "Viernes ",
    "Sabado ",
    "Domingo "
    ];

    
    
 //var_dump ($semana); 

  //echo $semana[0]; 
  //echo $semana[5];

   $planetas = [];
  $planetas [] = "Marte";
 $planetas [] = "Tierra";
  $planetas [] = "Venus";

//var_dump($planetas);
   

foreach($semana as $dia){
    echo $dia . "<br>";

}

foreach($planetas as $unPlaneta){
    echo $unPlaneta . "<br>";

}

print_r ($dia)
?>