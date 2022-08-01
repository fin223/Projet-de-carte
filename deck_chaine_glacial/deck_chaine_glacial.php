<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> carte yu-gi-oh </title>
    <link rel="shortcut icon" type="image/png" href="yugioh.ico" sizes="196x196">
    
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <div>
        <?php 

        
        
        for($i = 1; $i < 40; $i++)
        {
            
            https://www.otk-expert.fr/cartes/yugioh_ext/SDFC/SDFC-" . $i . ".jpg

            echo "<img src='https://www.otk-expert.fr/cartes/yugioh_ext/SDFC/SDFC-" . $i . ".jpg' alt='imagePGO" . $i . "'> <br>";

            echo "<a href='https://www.otk-expert.fr/cartes/yugioh_ext/SDFC/SDFC-" . $i . ".jpg' download>Télécharger image " . $i . " </a> <br>";

        }

        ?>
       
    </div>
    <script src="js/FileSaver.min.js"></script>
    <script src="js/scripte.js"></script>
</body>
</html>