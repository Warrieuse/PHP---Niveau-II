<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercice 4</title>
</head>
<body>
<h1>La suite Fibonacci</h1>
<p style="font-style: italic;">Leonardo Pisano (Fibonacci) (1175 - 1250)</p>
<h4>*Enoncé*</h4>
<p>tiré de l'ouvrage Liber Abaci de Leonardo Pisano écrit en 1202.</p>
<p>« Possédant initialement un couple de lapins, combien de couples obtient-on en douze mois si chaque couple engendre tous les mois un nouveau couple à compter du second mois de son existence ? »</p>    
<p>En d'autres termes : la suite de Fibonacci est une suite d'entiers dans laquelle chaque terme est la somme des deux termes qui le précèdent. Elle commence par les termes 0 et 1 et ses premiers termes sont : 0, 1, 1, 2, 3, 5, 8, 13, 21, etc</p>
<p>Creez donc une fonction qui prend un paramètre de type entier, cela correspondra à la durée en mois de la reproduction des lapins, votre fonction doit retourner le nombre de couples que vous afficherez à l'aide d'un echo.</p>
<p>Pour comprendre, de manière imagée, le fonctionnement de la suite de Fibonacci avec la reproduction des lapins, vous pouvez consulter l'image fournie dans le dossier.</p>
<img src="lapin-fibonacci.png" alt="La suite de Finonacci">
<br>
<p>Exemple</p>
<p>fibonacci(12) ;</p>
<p>Devra afficher le résultat suivant : 144</p>
<hr>
<!--PHP-->
<?php
function laSuiteDeFibonacci($theDurationInMonthsOfRabbitReproduction){
    // condition que le nombre soit un nombre entier et positif.
    if ((is_int($theDurationInMonthsOfRabbitReproduction)==true) AND ($theDurationInMonthsOfRabbitReproduction > 0) && (is_nan($theDurationInMonthsOfRabbitReproduction)==false)) {
        $f0 = 0; // je commence avec les termes 0
        echo $f0." - ";
        $f1 = 1; // et  1.
        echo $f1." - ";
        // boucle for ou j'enlève 1 a ma var car je veut des lapins adultes(enfin à maturités) et 1 faut 1 mois pour qu'il le soit.
        for ($i=0; $i < ($theDurationInMonthsOfRabbitReproduction-1); $i++) { 
            $fN = $f0 + $f1; // ma suite est ma somme des 2 premiers chiffres.
            echo $fN." - ";
            $f0 = $f1; // je transforme la valeur de mes variables pour faire ma suite de nombres.
            $f1 = $fN;
        }
       // echo pour afficher a chaque fois mes variables si je fait un return la boucle stop....  
    } else {
        echo "Veuillez entrez un nombre entier et positif.<br>";
    } // j'affiche le resultat de ma fonction 
    echo "<br> Graçe à la suite de Mr Fibonacci nous savons qu'au bout de ".$theDurationInMonthsOfRabbitReproduction." mois, nous nous retrouverons avec ".$fN." couples de lapins adultes.<br>"; 

}

laSuiteDeFibonacci(12);
laSuiteDeFibonacci(14);
laSuiteDeFibonacci(26);
laSuiteDeFibonacci(100);
?>
<hr>
<p>Pour aller plus loin :</p>
<p>Renseignez-vous sur le principe de récursivité et essayez de programmer une seconde version de la fonction de calcul de la suite de Fibonacci de manière récursive.</p>
<p>Culture : Cette suite est fortement liée au nombre d'or, φ (phi). Ce nombre intervient dans l'expression du terme général de la suite. Inversement, la suite de Fibonacci intervient dans l'écriture des réduites de l'expression de φ en fraction continue : les quotients de deux termes consécutifs de la suite de Fibonacci sont les meilleures approximations du nombre d'or. Et plus on tend vers l'infini, plus l'approximation sera précise. Amusez-vous à calculer ce quotient (valeur au rang n / valeur au rang (n-1)) sur plusieurs valeurs pour constater cette approximation.</p>
<p>Définition :</p>
<p>Un algorithme récursif est un algorithme qui résout un problème en calculant des solutions d'instances plus petites du même problème. L'approche récursive est un des concepts de base en informatique.</p>
<?php
function nombreDor($n1,$n2){
    $gold = ($n1 / $n2 ) ;
    echo "Le nombre d'or est ".$gold.".<br>";
}
nombreDor(121393,75025);
nombreDor(2584,1597);
nombreDor(1304969544928657,806515533049393);
nombreDor(144,89);

?>

</body>
</html>