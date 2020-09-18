<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice n°3 PHP</title>
    <style>
        p{text-align: center;}
    </style>
</head>
<body>
    <h1>Le Triangle</h1>
    <h4>Enoncé</h4>
    <p>Créez une fonction qui prend un paramètre de type entier, cela déterminera la hauteur (en lignes) d'un triangle isocèle rempli d'étoiles qu'il faudra afficher à l'écran. Le sommet du triangle sera toujours constitué de 2 étoiles comme dans l'exemple ci-dessous.</p>
    <br>
    <p>Exemple</p>
    <p>display_triangle(10) ;</p>
    <p>Produira le résultat suivant :</p>
    <div >
    <p>**<br>
    ****<br> 
    ******<br> 
    ********<br> 
    **********<br> 
    ************<br> 
    **************<br> 
    ****************<br> 
    ******************<br> 
    ********************<br>
    </div>
    <br>
    <p>Le triangle fait 10 lignes de haut. Vous trouverez comment faire pour que le résultat s'affiche bien comme ça en HTML.</p>
    <hr>
<!--PHP-->
<?php
function displayTriangle($etoile){
    echo $etoile;
    echo "<p style=\"text-align:center;\">";
    for ($i=0; $i < 10 ; $i++) { 
        $etoile = $etoile."**";
        echo $etoile."<br>";
        
    }
    echo "</p>";
}
displayTriangle(" ");
?>

</body>
</html>