<?php

$Tableau = [
    0 =>['nom', 'Bryan', 'age' ,'ville', 'passions'=> ['passion1','passion2']],
    1 =>['nom', 'Andre', 'age' ,'ville', 'passions'=> ['passion1','passion2']],
    2 =>['nom', 'Dodo', 'age' ,'ville', 'passions'=> ['passion1','passion2']],
    3 =>['nom', 'prenom', 'age' ,'ville', 'passions'=> ['passion1','passion2']],
    4 =>['nom', 'prenom', 'age' ,'ville', 'passions'=> ['passion1','passion2']],
    5 =>['nom', 'prenom', 'age' ,'ville', 'passions'=> ['passion1','passion2']],
    6 =>['nom', 'prenom', 'age' ,'ville', 'passions'=> ['passion1','passion2']],
    7 =>['nom', 'prenom', 'age' ,'ville', 'passions'=> ['passion1','passion2']]
];

foreach ($Tableau as $keys) {
    echo "Prenom : " . $keys[1] . " " . $keys[0] . "<a href='exo1.php?nom=$keys[0]&amp;prenom=$keys[1]&amp;
            age=$keys[2]&amp;ville=$keys[3]&amp;'>Yo</a>" . "<br>";
}