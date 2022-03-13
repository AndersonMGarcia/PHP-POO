<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetos Compostos em PHP</title>
</head>
<body>
    <?php
        require_once "Lutador.php";
        
        $lutador = array();

        $lutador[0] = new Lutador(
            "Pretty Boy", 
            "França", 
            31,
            1.75,
            68.9,
            11,
            2,
            1
        );

        $lutador[1] = new Lutador(
            "PutScript",
            "Brasil",
            29,
            1.68,
            57.8,
            14,
            2,
            3
        );

        $lutador[2] = new Lutador(
            "SnapShadow",
            "EUA",
            35,1.65,80.9,12,2,1
        );

        $lutador[3] = new Lutador(
            "Dead Code",
            "Austrália",
            28,1.93,81.6,13,0,2
        );

        $lutador[4] = new Lutador(
            "UfoCobol",
            "Brasil",
            37,1.70,119.3,5,4,3
        );

        $lutador[5] = new Lutador(
            "NerdaArt",
            "EUA",
            30,1.81,105.7,12,2,4
        );
        $lutador[0]->apresentar();
        $lutador[0]->perderLuta();
        $lutador[0]->status();
        $lutador[1]->status();
        $lutador[2]->status();
        $lutador[3]->status();
        $lutador[4]->status();
        $lutador[5]->status();
    ?>
</body>
</html>