<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    
<h2>Créez votre compte:</h2>
    
    <form action="#" mehtod="GET">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>Nom</label> 
                    <input type="text" name="nom">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Prenom</label> 
                    <input type="text" name="prenom">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Adresse e-mail</label> 
                    <input type="text" name="email">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Mot de Passe</label> 
                    <input type="password" name="mdp">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Confirmer</label> 
                    <input type="password" name="cfmdp">
                </div>
            </div>
            <br>
            <input type="submit" name="createCompte" value="Créer mon compte"> <!-- modifier action du form -->
        </div>
    </form>

</body>
</html>