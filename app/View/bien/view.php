<div>

    <!--?php $title_layout = $page->titre ?-->
    <h1>Details du Bien</h1>

    <div>
        <h3> Titre : <?php echo $page->titre ?> </h3>
    </div>
    <div>
        <img src="<?php echo pathinfo($_SERVER['HTTP_REFERER'], PATHINFO_DIRNAME)."/{$page->url}";?>" alt="Chargement de l'image..."/>
    </div>
    <p> Type d'annonce : <?php echo $page->typeannonce;  ?> <br>
        Type du bien : <?php echo $page->typebien;  ?> <br>
        Prix du bien : <?php echo $page->prix; ?> <br>
        Ville : <?php echo $page->ville; ?> <br>
        Code postal :<?php echo $page->codepostal; ?> <br>
        Description du bien : <?php echo $page->descrption; ?> <br>
        Emis le : <?php echo $page->modif; ?> <br>
    </p>
    <!--<a href="<?php
                if (isset($_SESSION['User'])) echo Router::url("panier/add/userid:{$_SESSION['User']->id}/bienid:{$page->id}");
                else echo '#'; ?>" title="">
        <?php if (isset($_SESSION['User'])) echo 'Ajouter au panier'; ?>
    </a>-->
    <script>
        printPdf = function (pdfUrl) {
            //On désactive les éléments que l'on ne souhaite pas voir sur le pdf
            document.getElementById("btnImprime").style.display = "none";
            window.print();
            //On réactive les éléments cachés
            document.getElementById("btnImprime").style.display = "block";
        }
    </script>
    
   

    <!--a id="btnImprime" onclick="printPdf(<?php $_SERVER['PATH_INFO']?>)"> Impression </a--> 
        <button id="btnImprime" onclick="printPdf(<?php $_SERVER['PATH_INFO']?>)"> Imprimer </button> 
    <!-- script de la fonction pour impression -->
    
   
</div>