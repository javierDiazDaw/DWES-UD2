<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola mundo</title>
</head>
<body>

    <?php
        $pPantalon= 29.99;
        $nPantalon= 3;
        $pCamisa= 25.99;
        $nCamisa= 2;
        define ("DESCUENTO", 8);
        
        $tPantalon= $pPantalon * $nPantalon;
        $tCamisa= $pCamisa * $nCamisa;

        $total = $tPantalon + $tCamisa;

        $tDescuento = $total * (1-DESCUENTO/100);

           
        echo("<p>El precio de un pantalón es de $pPantalon</p>");
        echo("<p>El precio de una camisa es de $pCamisa</p>");
        echo("<p>El precio total sin descuento es de $total</p>");
        printf("<p>El precio total sin descuento es de %.2f</p>", $tDescuento);


        $pZapatos= 45.99;
        $descuentoZ= 12;

        $pZapatosCon += $pZapatos*(1- $descuentoZ/100);

        $tCompra = $pZapatosCon + $tDescuento;

        echo("<p>El precio de los zapatos sin descuento es de $pZapatos</p>");
        printf("<p>El precio total de los zapatos con descuento es de %.2f</p>", $pZapatosCon);
        printf("<p>El precio total de la compra es de %.2f</p>", $tCompra);



        

    ?>
</body>
</html>
