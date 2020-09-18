<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" content-type="text/html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercice 5 </title>
</head>
<body>
    <h1>Conjugaison</h1>
    <figure>
    <img  style="height: 500px" src="bescherelle-la-conjugaison.jpg" alt="bescherelle-la-conjugaison">
    <figcaption>Ceci est un bescherelle</figcaption>
    </figure>
    <h4>Enoncé :</h4>
    <p>Créez une fonction qui prend une string en paramètre. Ce paramètre sera un verbe régulier du premier groupe (finissant par "er" tels que parler, trier, chanter, coder, programmer, ...). Votre fonction doit conjuguer ce verbe au présent de l'indicatif et l'afficher à l'écran.</p>
    <h4>Contrainte</h4>
    <p>La chaîne passée en paramètre ne doit pas dépasser 15 caractères ni contenir d'espaces.</p>
    <p>Vérifiez que la chaîne passée en paramètre se termine bien par "er".</p>
    <div style="text-align: center; font-style:italic">
    <p>Exemple :</p>
    <p>En entrée : "programmer"</p>
    <p>En sortie : </p>
    <p>je programme</p>
    <p>tu programmes</p>
    <p>il programme</p>
    <p>nous programmons</p>
    <p>vous programmez</p>
    <p>ils programment</p>
    </div>
    <br>
    <div>
        <p>Réfléchissez bien à la manière dont vous allez vous y prendre ! Vous pouvez notamment :</p>
        <ul>
            <li>supprimer des bouts de chaines de caractères</li>
            <li>concaténer (rajouter à la fin) de nouvelles chaines</li>
            <li>remplacer un bout de chaine par un autre
... une fois que vous savez comment vous allez vous y prendre, recherchez s'il n'existe pas déjà des fonctions toute prêtes en PHP pouvant vous aider.</li>
        </ul>   
    </div>
    <p>Testez ensuite votre code sur de nombreux verbes pour vous assurer que ça fonctionne bien.</p>
    <p>Pour aller plus loin :</p>
    <p>Essayez de prendre en compte les verbes demandant des traitements particuliers tels que "manger".</p>
    <hr>
<!--PHP-->
<?php
function conjugation($verb){
    $verb = strtolower($verb);
    
    if (  ($verb !== null) AND (strlen($verb) <= 15) && (strpos($verb," ") == FALSE) && (substr($verb,-2) === "er" )) {
 // si le verbes contient quelque chose - fait moins de 16 lettres - ne possède pas d'espaces - et la fin du mot contient "er" - pas besoin de bloquer les nombres car "er" condition
// au début j'ai pas fait l'espaces mais avec le compteur de mot qui devais en contenir 1 seul mais lorsqu'il y a un accent il le considère comme un espace donc autre méthode.      

    $startVerb = rtrim($verb,"er"); // suppression fin du verbe
    $vowel = ["a","e","i","o","u","y"]; // tableau voyelle   
    $firtsLetterVerb = substr($verb,0,1); // je sort la 1er lettre du verbe
        // si le verbe commence par une voyelle alors ....
        if( in_array($firtsLetterVerb,$vowel) === TRUE ){echo "<div style = \"text-align : center \">j' ".$startVerb."e <br>";}
        else {echo "<div style = \"text-align : center \"> je ".$startVerb."e <br>";}

        echo "tu ".$startVerb."es <br>";

        echo "il ".$startVerb."e <br>";
        // si fin du verbe fini par ger alors ...
        if(substr($verb,-3)==="ger"){echo "nous ".$startVerb."eons <br>";}
        else{echo "nous ".$startVerb."ons <br>";}

        echo "vous ".$startVerb."ez <br>";

        echo "ils ".$startVerb."ent <br>";

        echo "</div><br>";
    } else {
        echo "La chaîne passée en paramètre ne doit pas dépasser 15 caractères ni contenir d'espaces.<br>"; 
    }
    
}

conjugation("progrAMmer");
conjugation("pro grammer");
conjugation("programmir");
conjugation("essayer");
conjugation("coder");
conjugation("apéroter");
conjugation("perçer");
conjugation("manger");
conjugation("agronomger");






?>

</body>
</html>