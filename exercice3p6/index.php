<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice3</title>
    </head>
    <body>
        <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et 
            les afficher: index.php?startDate=2/05/2016&endDate=27/11/2016</p>
        <a href="index.php?startDate=2/05/2016&endDate=27/11/2016">
            <button type='button'>Bouton Test</button>
        </a>
        <?php
        if (isset($_GET['startDate'])) {
            echo '<p>Date de début ' . $_GET['startDate'] . ' ';
        } else {
            echo '<p>';
        }
        if (isset($_GET['endDate'])) {
            echo ', Date de fin ' . $_GET['endDate'] . '</p>';
        } else {
            echo '</p>';
        }
        ?>
    </body>
</html>
