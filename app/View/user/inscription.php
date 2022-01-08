<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    
<h2>Créez votre compte:</h2>
    
<form action="<?php echo Router::url('user/inscription')?>" method="post">
        <div class="row">
        <?php echo $this->Form->input('nom','Nom ')?>
            <!--<div class="col">
                <div class="form-group">
                    <label>Nom</label> 
                    <input type="text" name="nom">
                </div>
            </div>-->
            <?php echo $this->Form->input('prenom','Prenom ')?>
            <!--<div class="col">
                <div class="form-group">
                    <label>Prenom</label> 
                    <input type="text" name="prenom">
                </div>
            </div>-->
            <?php echo $this->Form->input('mail','Adresse e-mail ')?>
            <!--<div class="col">
                <div class="form-group">
                    <label>Adresse e-mail</label> 
                    <input type="text" name="email">
                </div>
            </div>-->
            <?php echo $this->Form->input('pass','Mot de passe ')?>
            <!--<div class="col">
                <div class="form-group">
                    <label>Mot de Passe</label> 
                    <input type="password" name="mdp">
                </div>
            </div>-->
            <br>
            <div class="action">
                    <input type="submit"  value="Valider"> <!-- modifier action form -->
            </div>
        </div>
    </form>

</body>
</html>