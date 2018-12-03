<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice2</title>
    </head>
    <body>
        <p>Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas 
            l'afficher sinon le signaler : index.php?lastname=Nemare&firstname=Jean&age=32</p>
        <a href="index.php?lastname=Nemare&firstname=Jean">
            <button type='button'>Bouton Test</button>
        </a>
        <a href="index.php?lastname=Nemare&firstname=Jean&age=41">
            <button type='button'>Bouton Test avec l'age</button>
        </a>
        <?php
        if (isset($_GET['lastname'])) {
            echo '<p>Bonjour ' . $_GET['lastname'] . ' ';
        } else {
            echo '<p>';
        }
        if (isset($_GET['firstname'])) {
            echo $_GET['firstname'];
        } else {
            echo ' ';
        }
        if (isset($_GET['age'])) {
            echo ', vous avez ' . $_GET['age'] . ' ans</p>';
        } else {
            echo ', votre age n\'est pas renseigné</p>';
        }
        ?>
    </body>
</html>