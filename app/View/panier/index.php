<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>

    <!-- require la connexion !!!!! -->

    <h2>Mon panier</h2>
    <!-- une liste avec les biens recupere dans la table -->
    <div class="" id="myTopnav">
            <ul>
                <?php foreach ($panier as $bien) : ?>
                    <li>
                        <h2> <?php echo $bien->titre; ?></h2>
                        <?php
                        echo $bien->typebien;
                        echo $bien->prix;
                        //echo $bien->descrption;
                        echo $bien->ville;
                        //echo $bien->codepostal;
                        // $bien->modif;
                        ?>
                        <!--a href="<?php echo BASE_URL . '/bien/view/' . $bien->id ?>" title=""> Lire la suite</a-->
                        <a href="<?php echo Router::url("panier/delete/id:{$bien->id}");?>" title="">Retirer du panier</a>
                        <a href="<?php echo Router::url("bien/view/id:{$bien->id}/slug:{$bien->slug}");?>" title=""> Lire la suite</a>
                    </li>
                <?php endforeach; ?>
            </ul>
            </a>
        </div>
</body>
</html>
