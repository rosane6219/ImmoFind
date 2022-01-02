<!DOCTYPE html>
<!-- banderolle + bien à la une + menu pour acceder aux autres pages?-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--link rel="stylesheet" href="../css/banderolle.css"-->
    <style type="text/css">
        <?php echo $style_for_content; ?>
    </style>
</head>

<body>
    
    <title> <?php echo isset($title_layout) ? $title_layout : 'ImmoFind'; ?></title>
    <h1> la phrase acceuil : <b>Agence Immobilliere</b> </h1>
    <div id="boutonAcceuil">
        <a href="<?php echo Router::url("accueil/index");?>">Accueil</a> &nbsp;
        <a href="<?php echo Router::url("agence/agence");?>">Notre agence</a> &nbsp;
        <a href="<?php echo Router::url("bien/search");?>">Recherche</a> &nbsp;
        <a href="<?php echo Router::url("connexion/connect");?>">Se connecter</a> &nbsp;
        <a href="<?php echo Router::url("contact/contact");?>">Nous contacter</a>
    </div>

    <?php echo  $content_for_layout; ?>
    
    <div id="aide">
        
    </div>

</body>

</html>