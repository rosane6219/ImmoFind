<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
       
<h2>Recherche d'un bien :</h2>
    
    <form action="#" mehtod="GET">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>Type d'annonce</label> 
                    <select id="type" name="typeDannonce">
                        <?php
                        //achat - location - viager - etc...
                        //affichageEcole();
                        ?>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Type de bien</label> 
                    <select id="type" name="typeDeBien">
                        <?php
                        //maison - appartement - etc...
                        //affichageEcole();
                        ?>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Prix min</label> 
                    <input type="text" name="prixMin">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Prix max</label> 
                    <input type="text" name="prixMax">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Ville</label> 
                    <input type="text" name="ville">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Code postal</label> 
                    <input type="text" name="codePostal">
                </div>
            </div>
            <div class="col">
                    <button onclick="location.href='./eleveConnection.php'" type="button">Annuler</button> <!-- modifier href -->
            </div>
            <div class="col">
                    <input type="submit" name="submit" value="Modifier l'annonce"> <!-- modifier action form -->
            </div>
        </div> 
    </form>
</body>
</html>