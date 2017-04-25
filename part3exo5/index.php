<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo5p3</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="align">
            <a href="../part3exo1/index.php"><button class="button">Exercice 1</button></a>
            <a href="../part3exo2/index.php"><button class="button">Exercice 2</button></a>
            <a href="../part3exo3/index.php"><button class="button">Exercice 3</button></a>
            <a href="../part3exo4/index.php"><button class="button">Exercice 4</button></a>
            <a href="../part3exo5/index.php"><button class="button">Exercice 5</button></a>
            <a href="../part3exo6/index.php"><button class="button">Exercice 6</button></a>
            <a href="../part3exo7/index.php"><button class="button">Exercice 7</button></a>
            <a href="../part3exo8/index.php"><button class="button">Exercice 8</button></a>
        </div>
        <div class="php">
            <?php
            //déclaration de la variable
                $myVariable = 1;
                //début de la boucle
                while ($myVariable <= 15) {
                    //affichage de la boucle de 0 à 15
                    echo 'On y arrive presque'. '<br/>'. '<hr>';
                    $myVariable++;
                }
            ?>
        </div>
    </body>
</html>