<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice6</title>
    </head>
    <body>
        <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et 
            les afficher: index.php?building=12&room=101</p>
        <a href="index.php?building=12&room=101">
            <button type='button'>Bouton Test</button>
        </a>
        <?php
        if (isset($_GET['building'])) {
            echo '<p>Bâtiment ' . $_GET['building'] . ' ';
        } else {
            echo '';
        }
        if (isset($_GET['room'])) {
            echo ',chambre ' . $_GET['room'] . '</p> ';
        } else {
            echo '</p>';
        }
        ?>
    </body>
</html>
