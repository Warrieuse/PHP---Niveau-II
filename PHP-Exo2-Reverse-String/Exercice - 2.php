<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice n°2 PHP</title>
</head>
<body>
    <h1>Inverser une chaîne de caractères</h1>
    <p>Créez une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine de caractères mais exactement inversée. Vous afficherez le résultat à l'aide d'un echo pour contrôler.</p>
    <p>Exemple :</p>
    <p>reverse_string("abcdef GHI") ;</p>
    <p>doit afficher "IHG fedcba" ;</p>
    <h4>Indications:</h4>
    <div>
        <ul>
            <li>Vous pouvez parcourir la première chaine de caractères et concaténer les caractères lus "à gauche" de la nouvelle chaine de caractères</li>
            <li>Ou alors vous pouvez parcourir la première chaine "à l'envers" (en partant de la fin) et construire la nouvelle chaine en concaténant normalement les caractères lus.</li>
        </ul>
    </div>
    <hr>
<!--PHP-->
<?php

function reversetext($myText){
    $myText = strrev($myText);
    echo $myText."<br>";
}

reversetext("a cuba, Anna a bu ca");
reversetext("C'est sec");
reversetext("Eh ! ca va la vache ?");
reversetext("kayak");
reversetext("anticonstitutionnellement");
reversetext("Voila, exercice fini");


?>
<p>À Cuba, Anna a bu ça</p>
<p>C'est sec</p>
<p>Eh ! ça va la vache ?</p>
<p>kayak</p>
<p>anticonstitutionnellement</p>
<p>Voila, exercice fini</p>


</body>
</html>