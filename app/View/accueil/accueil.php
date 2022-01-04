<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/banderole.css">
    <link rel="stylesheet" href="../css/main.css">

</head>
<body>
    <div id="banderolle">
        <div class="images"> <!-- ici il faut choisir les images souhaitées /+\ il faudra egalment voir comment faire la redirection avec les liens -->
            <a href="https://www.google.com/"><img src="../image/contact-us.png" alt="contact"></a>
            <img src="../image/agence.png" alt="agence">
            <img src="../image/bien1.jpg" alt="bien 1">
            <img src="../image/bien2.jpg" alt="bien 2">
        </div>
    </div>

     
    
    <div>
        <p id="laUne">Les nouveautés de notre agence</p>
        <h1>Nos Biens</h1>
    <div class="" id="myTopnav">
        <ul>
            
            <?php foreach ($pages as $b) : ?>
                <li>
                <h2> <?php echo $b->titre; ?></h2>
                 <?php
                        echo $b->typeannonce;
                        echo $b->prix;
                        //echo $b->descrption;
                        echo $b->ville;
                        //echo $b->codepostal;
                        // $b->modif;
                        ?>
               <a href="<?php echo Router::url("bien/view/id:{$b->id}/slug:{$b->titre}");?>" title=""> Lire la suite</a>
                </li>
            <?php endforeach; ?>
        </ul>
        </a>
    </div>
    </div>

   

</body>
</html>