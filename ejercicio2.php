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
        $base= 5;
        $altura= 7;
        $diagonalMayor= 6;
        $diagonalMenor= 3;
        $radio= 2;
        $PI= 3.14;

        $areaTriangulo= ($base * $altura)/2;
        $areaCuadrado= $base * $altura; 
        $areaRombo= ($diagonalMayor * $diagonalMenor);
        


               printf("<p>El area del triangulo es %s</p>", $areaTriangulo);

    
        echo ("El área del cuadrado es $areaCuadrado");
        

    ?>
</body>
</html>
