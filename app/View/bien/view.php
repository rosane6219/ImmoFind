<div>

    <!--?php $title_layout = $page->titre ?-->
    <h1>Details du Bien</h1>

    <div>
        <h3> <?php echo $page->titre ?> </h3>
    </div>
    <div>
        <img src="<?php echo $_SERVER['SERVER_NAME'].'/image/download/'.$page->url ?>" alt="Chargement de l'image..."/>
    </div>
    <p> <?php echo $page->typeannonce;  ?> <br>
        <?php echo $page->typebien;  ?> <br>
        <?php echo $page->prix; ?> <br>
        <?php echo $page->descrption; ?> <br>
        <?php echo $page->ville; ?> <br>
        <?php echo $page->codepostal; ?> <br>
        <?php echo $page->modif; ?> <br>
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
    
    <a id="btnImprime" onclick="printPdf(<?php $_SESSION['PATH_INFO']?>)"> Impression </a> 

    <!-- script de la fonction pour impression -->
    
    <!--?php  debug($page);?-->
</div>