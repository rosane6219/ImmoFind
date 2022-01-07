<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    
<h2>Editer l'annonce d'un bien :</h2>
    
    <form action="<?php echo Router::url('admin/collabo/edit/'.$id)?>" method="post">
    <?php echo $this->Form->input('id','hidden');?>
        <div class="row">
           
            <?php echo $this->Form->input('nom','Nom')?>
            
            <?php echo $this->Form->input('poste','Poste ')?>
            <div class="col">
                <div class="form-group">
                    
                    <label>image</label> 
                    <input type="text" name="url">
                </div>
            </div>
            <div class="col">
                    <button onclick="location.href='./eleveConnection.php'" type="button">Annuler</button> <!--modifier href -->
            </div>
            <div class="action">
                    <input type="submit"  value="Valider"> <!-- modifier action form -->
            </div>
        </div> 
    </form>

</body>
</html>