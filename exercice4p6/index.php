<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice4</title>
    </head>
    <body>
        <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et 
            les afficher: index.php?language=PHP&server=LAMP</p>
        <a href="index.php?language=PHP&server=LAMP">
            <button type='button'>Bouton Test</button>
        </a>
        <?php
        if (isset($_GET['language'])) {
            echo '<p>Language utilisé ' . $_GET['language'] . ' ';
        } else {
            echo '<p>';
        }
        if (isset($_GET['server'])) {
            echo ', depuis le serveur ' . $_GET['server'] . '</p>';
        } else {
            echo '</p>';
        }
        ?>
    </body>
</html>
