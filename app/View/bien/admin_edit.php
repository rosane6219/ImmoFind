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
    
    <form action="<?php echo Router::url('admin/bien/edit/'.$id)?>" method="post" enctype="multipart/form-data">
    <?php echo $this->Form->input('id','hidden');?>
        <div class="row">
            
            <?php echo $this->Form->input('typeannonce','Type d\'annonce ',array('type' => 'select','1' => 'Vente','2' => 'Location'))?>
            
            <?php echo $this->Form->input('typebien','Type de bien ',array('type' => 'select','1' => 'Maison','2' => 'Appartement','3' => 'Studio','4' => 'Chambre'))?>
          
            <?php echo $this->Form->input('prix','Prix ')?>
           
            <?php echo $this->Form->input('ville','Ville ')?>
            
            <?php echo $this->Form->input('codepostal','Code Postal ')?>
            
            <?php echo $this->Form->input('titre','Titre')?>
           
            <?php echo $this->Form->input('descrption','Description ',array('type' => 'textarea','rows' => 5,'cols' => 10))?>
           
            <?php echo $this->Form->input('image','Image', array('type' => 'file'))?>
            <div class="col">
                    <button onclick="location.href=''" type="button">Annuler</button> <!--modifier href -->
            </div>
            <div class="action">
                    <input type="submit"  value="Valider"> <!-- modifier action form -->
            </div>
        </div> 
    </form>

</body>
</html>