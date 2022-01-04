<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    
<h2>Modifier l'annonce d'un bien :</h2>
    
    <form action="<?php echo Router::url('admin/bien/edit')?>" method="post">
    <?php echo $this->Form->input('id','hidden');?>
        <div class="row">
            <!--div class="col">
                <div class="form-group">
                    <label>Type d'annonce</label> 
                    <select id="type" name="typeDannonce">
                        <?php
                        //achat - location - viager - etc...
                        //affichageEcole();
                        ?>
                        <option></option>
                        <option></option>
                        <option></option>
                    </select>
                </div>
            </div-->
            <?php echo $this->Form->input('typeannonce','Type d\'annonce ',array('type' => 'select','1' => 'Vente','2' => 'Location'))?>
            <!--div class="col">
                <div class="form-group">
                    <label>Type de bien</label> 
                    <select id="type" name="typeDeBien">
                        <?php
                        //maison - appartement - etc...
                        //affichageEcole();
                        ?>
                    </select>
                </div>
            </div-->
            <?php echo $this->Form->input('typebien','Type de bien ',array('type' => 'select','1' => 'Maison','2' => 'Appartement','3' => 'Studio','4' => 'Chambre'))?>
            <!--div class="col">
                <div class="form-group">
                    <label>Prix</label> 
                    <input type="text" name="prix" value="<?php echo $bien->prix?>">
                </div>
            </div-->
            <?php echo $this->Form->input('prix','Prix ')?>
            <!--div class="col">
                <div class="form-group">
                    <label>Ville</label> 
                    <input type="text" name="ville" value="<?php echo $bien->ville?>">
                </div>
            </div-->
            <?php echo $this->Form->input('ville','Ville ')?>
            <!--div class="col">
                <div class="form-group">
                    <label>Code postal</label> 
                    <input type="text" name="codePostal" value="<?php echo $bien->codepostal?>">
                </div>
            </div-->
            <?php echo $this->Form->input('codepostal','Code Postal ')?>
            <!--div class="col">
                <div class="form-group">
                    <label>Titre</label> 
                    <input type="text" name="titre" value="<?php echo $bien->titre?>">
                </div>
            </div-->
            <?php echo $this->Form->input('titre','Titre')?>
            <!--div class="col">
                <div class="form-group">
                    <label>Description</label> 
                    <input type="text" name="description" value="<?php echo $bien->descrption?>">
                </div>
            </div-->
            <?php echo $this->Form->input('descrption','Description ',array('type' => 'textarea','rows' => 5,'cols' => 10))?>
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
                    <input type="submit"  value="Modifier l'annonce"> <!-- modifier action form -->
            </div>
        </div> 
    </form>

</body>
</html>