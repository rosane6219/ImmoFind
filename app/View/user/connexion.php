<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    
    <h2>Connectez-vous</h2>
    
    <form id="userConnection" action="<?php echo Router::url('user/connexion')?>" method="post">    
        
        <!--input type="text" name="log"/-->
        <?php echo $this->Form->input('mail','Mail')?>
        <br> <br>
        
        <!--input type="password" name="psw"/-->
        <?php echo $this->Form->input('pass','Mot de passe',array('type'=> 'password'))?>
        <br><br>
        <!--div class="admin">
            <label>Je suis administrateur</label> 
            <input type="checkbox" name="iAmAdmin">
        </div-->
        <br>
        <div class="action">
        <input type="submit" name="connexion" value="Se connecter">
        </div>
    </form>
    <!-- <button onclick="location.href='../../accueil.html'" type="button">Home</button> -->
    <br>
    <button onclick="location.href='../../accueil.php'" type="button">Home</button> <!-- href a modifier --> 
    <a href="<?php echo Router::url("accueil/index");?>" title=""> Home</a>
    <br> <br>
    <span>Vous n'avez pas encore de compte ?</span> <a href="<?php echo Router::url("user/inscription");?>">Créez-en un maintenant !</a>


</body>
</html>