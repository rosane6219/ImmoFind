    <link rel="stylesheet" href="../css/main.css">

    <div class="container">
        <?php $title_layout = "Nos collaborateurs" ?>
        <h1>Nos Collaborateurs</h1>
        <div class="row" id="myTopnav">
            <?php foreach ($pages as $p) : ?>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <p>
                        <?php echo 'nom: ' . $p->nom; ?> <br>
                        <?php echo 'poste: ' . $p->poste; ?><br>
                    <div>
                        <img style="<?php if (empty($p->url)) echo 'display: none' ?>" src="<?php echo pathinfo($_SERVER['HTTP_REFERER'], PATHINFO_DIRNAME) . "/{$p->url}"; ?>" alt="Chargement de l'image..." width="300" height="300" />
                    </div>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>