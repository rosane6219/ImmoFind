<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
  <!--    si on veut faire la pagination : video 4 a peu près minute 22-->   
<h2>Recherche d'un bien :</h2>
    
    <form action="#" mehtod="GET">
    <div class="row">
            
            <?php echo $this->Form->input('typeannonce','Type d\'annonce ',array('type' => 'select','1' => 'Vente','2' => 'Location'))?>
           
            <?php echo $this->Form->input('typebien','Type de bien ',array('type' => 'select','1' => 'Maison','2' => 'Appartement','3' => 'Studio','4' => 'Chambre'))?>
           
            <?php echo $this->Form->input('prix','Prix ')?>
            
            <?php echo $this->Form->input('ville','Ville ')?>
         
            <?php echo $this->Form->input('codepostal','Code Postal ')?>
           
            <?php echo $this->Form->input('titre','Titre')?>
            
            <div class="col">
                    <input type="submit" name="submit" value="Rechercher"> <!-- modifier action form -->
            </div>
        </div> 
    </form>
</body>
</html>