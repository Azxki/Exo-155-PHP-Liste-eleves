<?php

echo "<a href='index.php'>Revenir a l'accueil. <br></a>";


if (isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['age']) && isset($_GET['ville'])) {
        echo "Hello " . $_GET['prenom'] . " " .  $_GET['nom'] . " tu as " . $_GET['age'] . " et tu habites à " .
            $_GET['ville'];
}