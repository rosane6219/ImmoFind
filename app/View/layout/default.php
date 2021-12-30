<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--link rel="stylesheet" href="../css/banderolle.css"-->
    <style type="text/css"> <?php echo $style_for_content; ?></style>
</head>
<body>
    <title> <?php echo isset($title_layout) ? $title_layout : 'ImmoFind'; ?></title>
    <div  id="banderolle">
        <div class="images"> <!-- ici il faut choisir les images souhaitées -->
            <img src="../../image/contact-us.png" alt="contact"> 
            <img src="../../image/agence.png" alt="agence">
            <img src="../../image/bien1.jpg" alt="bien 1">
            <img src="../../image/bien2.jpg" alt="bien 2">
        </div>
    </div>

    <p> la phrase acceuil : <b>LEBLED BLADNA OU NDIRO RAYNA !!!!!!</b> </p>  
    <?php echo  $content_for_layout; ?>  

</body>

</html>