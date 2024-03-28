<?php
include_once('./control/CharactersController.php');
//Kint::$enabled_mode = false;
use  Dompdf\Dompdf;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Hello Sexy</h1>
       
    </header>

    <section>

        <?php
            foreach($characters['items'] as $character) {
                //Kint::dump($character);
                echo "<h3>".$character['name']."</h3>";
                echo "<img src=".$character['image']."></img>";
                echo "<p>".$character['description']."</p>";
                echo "<a href='index.php?page=" . $character['id'] . "'>Télécharger PDF</a>";
            }

        ?>

    </section>
    <p><?php var_dump($characters) ?></p>
</body>
</html>