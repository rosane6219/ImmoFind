<link rel="stylesheet" href="../css/main.css">

<div class="container">
    <?php $title_layout = "Nos Partenaires" ?>
    <h1>Nos Partenaires</h1>
    <div class="row" id="myTopnav">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            
                <?php foreach ($pages as $p) : ?>

                    
                        <p>
                            <?php echo 'nom: ' . $p->nom; ?> <br>
                            <?php echo 'site: ' . $p->site; ?><br>
                        <div>
                            <img style="<?php if (empty($p->url)) echo 'display: none' ?>" src="<?php echo pathinfo($_SERVER['HTTP_REFERER'], PATHINFO_DIRNAME) . "/{$p->url}"; ?>" alt="Chargement de l'image..." width="300" height="300" />
                        </div>
                        </p>
                    
                <?php endforeach; ?>
            
        </div>
    </div>
</div>


