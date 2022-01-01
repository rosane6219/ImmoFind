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
        <a href="<?php echo BASE_URL.'/agence/agence' ?>">Notre agence</a> &nbsp;
        <a href="">Recherche</a> &nbsp;
        <a href="">Se connecter</a> &nbsp;
    </div>

    <?php echo  $content_for_layout; ?>
    
    <div id="aide">
        <a href="<?php echo BASE_URL.'/contact/contact' ?>">Nous contacter</a>
    </div>

</body>

</html>