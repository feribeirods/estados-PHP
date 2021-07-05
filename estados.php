<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        

    </style>

</head>
<body>
    

    <?php

        $e = $_GET["estado"];

        switch ($e) {

            case 1: 
            case 3:
            case 4:
            case 14:
            case 22:
            case 23:
            case 27:
                echo "Você mora na Região Norte";
                break;

            case 2:
            case 5:
            case 6:
            case 10:
            case 15:
            case 17:
            case 18:
            case 20:
            case 26:
                echo "Você mora na Região Nordeste";
                break;

            case 7:
            case 9:
            case 11:
            case 12:
                echo "Você mora na Região Centro-Oeste";
                break;

            case 8:
            case 13:
            case 19:
            case 25:
                echo "Você mora na Região Sudeste";
                break;                
            
            case 16:
            case 21:
            case 24:
                echo "Você mora na Região Sul";
                break;            
            
            
        }


    ?>



</body>
</html>