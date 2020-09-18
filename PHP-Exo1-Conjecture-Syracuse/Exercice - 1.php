<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice PHP n°1</title>
</head>
<body>

    <h1>La Conjecture de Syracuse</h1>
    <p>Inventée par Lothar Collatz (1910 - 1990)</p>
    <p>Il s'agit d'une séquence très simple d'opérations sur les nombres qui ramène toujours au même endroit, le nombre 1. D'abord un amusement, cette étonnante suite est devenue troublante pour les mathématiciens qui ne se lassent pas de l'explorer sans avoir encore réussi à la domestiquer.</p>
    <p>Voir la représentation avec l'image ci-jointe.</p>
    <img src="représentation Conjecture Syracuse.jpg" alt="représentation Conjecture Syracuse">

    <h4># Ennoncé de l'exercice</h4>
    <p>Créez une fonction PHP qui prend comme argument n'importe quel nombre entier supérieur à zéro (faîtes les tests nécessaires pour garantir la validité de l'argument).</p>
    <div>Tant que ce nombre est différent de 1 :
        <ul>
            <li>S'il est pair divisez-le par 2.</li>
            <li>S'il est impair multipliez-le par 3 et ajoutez 1.</li>
        </ul>
    </div>
    <p>Au final votre fonction doit afficher une série de nombres, le dernier de ces nombres doit être obligatoirement 1. La fonction réalisera des 'echo' de chaque étape intermédiaire.</p>
    <p>Exemple :</p>
    <p style="color: red;">Valeur de départ : 25</p>
    <p>Affichage attendu :</p>
    <p style="color: green;">25 76 38 19 58 29 88 44 22 11 34 17 52 26 13 40 20 10 5 16 8 4 2 1</p>
    <ins>En savoir plus sur la conjecture de Syracuse :</ins>
    <a href="http://villemin.gerard.free.fr/Wwwgvmm/Iteration/Syracuse.htm" target="_blank">http://villemin.gerard.free.fr/Wwwgvmm/Iteration/Syracuse.htm</a>
    <hr>
    <!--Mon PHP-->
    <?php
    function laConjonctureDeSyracuse($Number){

        if ((is_int($Number)==true) AND ($Number > 0) && (is_nan($Number)==false)){

            while ($Number != 1) {

                if (( $Number % 2 )== 0) {
                    $Number = $Number / 2;
                    echo $Number." ";
                } else {
                    $Number = (($Number*3)+1);
                    echo $Number." ";
                }
                
            }//fin while
            echo "<br>";
        } else {
            echo "Ce n'est pas un nombre entier et positif <br>";
        }// fin 1er if/else
    }

    laConjonctureDeSyracuse(6);
    laConjonctureDeSyracuse("vbnfkvbfejkvbnfej");
    laConjonctureDeSyracuse(150);
    laConjonctureDeSyracuse(12.655545465);
    laConjonctureDeSyracuse(15343554931);

    
    ?>

</body>
</html>