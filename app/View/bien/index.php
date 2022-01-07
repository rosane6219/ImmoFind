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


    <div>
        <h1>Nos Biens</h1>
        <div class="" id="myTopnav">
            <ul>
                <?php foreach ($pages as $b) : ?>
                    <li>
                        <h2> <?php echo $b->titre; ?></h2>
                        <?php
                        echo $b->typebien;
                        echo $b->prix;
                        //echo $b->descrption;
                        echo $b->ville;
                        //echo $b->codepostal;
                        // $b->modif;
                        ?>
                        <!--a href="<?php echo BASE_URL . '/bien/view/' . $b->id ?>" title=""> Lire la suite</a-->
                        <!--<a href="<?php echo Router::url("panier/add/panierid:{TODO}/bienid:{$b->id}");?>" title="">Ajouter au panier</a>-->
                        <a href="<?php echo Router::url("bien/view/id:{$b->id}/slug:{$b->titre}");?>" title=""> Lire la suite</a>

                    </li>
                <?php endforeach; ?>
            </ul>
            </a>
        </div>

        <div >
            <ul>
                <?php for ($i = 1; $i <= $page; $i++): ?>
                <a href="?page=<?php echo $i; ?>"> <?php echo $i; ?></a>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
    <?php debug($b);?>



</body>

</html>