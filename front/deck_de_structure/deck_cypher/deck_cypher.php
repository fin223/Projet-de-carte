<?php
    // défini l'UTF-8 comme encodage par défaut (à placer dans le fichier de configuration par exemple)
    
    
    $host = 'localhost';
    $dbname = 'yu-gi-oh';
    $username = 'Lucas';
    $password = 'Maig-3399';
  
    $number = 1;
    $dsn = "mysql:host=$host;dbname=$dbname"; 

    $sql1 = "SELECT * FROM `card` WHERE $number ";
    utf8_encode($sql1);
    $sql2 = "SELECT * FROM `card` WHERE 1";
    
    try{
        $pdo = new PDO($dsn, $username, $password);
        

        $stmt = $pdo->prepare($sql1);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if($stmt === false){
         die("Erreur");
        }
       }catch (PDOException $e){
         echo $e->getMessage();
       }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> carte yu-gi-oh </title>
    <link rel="shortcut icon" type="image/png" href="yugioh.ico" sizes="196x196">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <div class="container-xl-6 container-lg-3 container-md-2 text-center">
    <?php

// On récupère tout le contenu de la table jeux_video

$reponse = $pdo->query('SELECT * FROM `card`');

// On affiche chaque entrée une à une

while ($donnees = $reponse->fetch())

{
   
    echo "<img src='https://www.otk-expert.fr/cartes/yugioh_ext/SDCR/SDCR-" . $donnees['idCard'] . ".jpg' alt='imagePGO" . $donnees['idCard'] . "'>" 
    . "<a href='https://www.otk-expert.fr/cartes/yugioh_ext/SDCR/SDCR-" . $donnees['idCard'] . ".jpg' download>Télécharger image " . $donnees['idCard'] . " </a>"
    . utf8_encode($donnees['name']) . ' <br> ';
    if($donnees['effect'] == ' ')
    {
        echo '';
    }
    else
    {
        echo utf8_encode($donnees['effect']) . ' <br> '; 
    }
    echo $donnees['attribut'] . ' <br> ' . 
    $donnees['niveau'] .  ' <br> ' . 
    $donnees['type'] . ' <br> ' . 
    $donnees['attaque'] . ' <br> ' . 
    $donnees['defence'] . '<br> <br>';
            
    

?>
    
<?php

}



$reponse->closeCursor(); // Termine le traitement de la requête

?>
</div>
       
    
    <script src="js/FileSaver.min.js"></script>
    <script src="js/scripte.js"></script>
</body>
</html>