<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    
<h2>Editer un partentaire :</h2>
    
    <form action="<?php echo Router::url('admin/partner/edit/'.$id)?>" method="post" enctype="multipart/form-data">
    <?php echo $this->Form->input('id','hidden');?>
        <div class="row">
           
            <?php echo $this->Form->input('nom','Nom')?>
            
            <?php echo $this->Form->input('site','Site')?>
           
            <?php echo $this->Form->input('image','Image', array('type' => 'file'))?>
            
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