<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="problema1.1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumo de Frutas</title>
</head>
<body>
    <div id="a1">
        <h3>Verduleria Pepe</h3>
        <h1>Consumo final</h1>
        <div class="info">
            <p>El precio del kilo de banana es: $100</p>
            <p>El precio del kilo de manzana es: $200</p>
        </div>
        <p>A continuación ingresa las cantidades de bananas y manzanas:</p>

        <form method="post" action="">
            <label for="bananas">Cantidad de kilos de bananas:</label>
            <input type="number" id="bananas" name="bananas" min="0" required>
            <br>
            <label for="manzanas">Cantidad de kilos de manzanas:</label>
            <input type="number" id="manzanas" name="manzanas" min="0" required>
            <br>
            <button type="submit">Calcular Total</button>
        </form>

        <?php
        if (isset($_POST["bananas"]) && isset($_POST["manzanas"])) {
            $bananas = $_POST["bananas"];
            $manzanas = $_POST["manzanas"];
            $bananaskg = 100;
            $manzanaskg = 200;

            $totalbananas = $bananas * $bananaskg;
            $totalmanzanas = $manzanas * $manzanaskg;
            $total = $totalbananas + $totalmanzanas;
        ?>
        </div>
        <div id="a2">
            <ul>
                <li><?php echo $bananas; ?> kg de bananas $<?php echo $totalbananas; ?></li>
                <li><?php echo $manzanas; ?> kg de manzana $<?php echo $totalmanzanas; ?></li>
                <li>Total: $<?php echo $total; ?></li>
            </ul>
        </div>
        <?php } ?>
    </div>
</body>
</html>
