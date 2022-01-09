<link rel="stylesheet" href="../css/main.css">

<div>
    <?php $title_layout = "Nos Partenaires" ?>
    <h1>Nos Partenaires</h1>
    <div class="" id="myTopnav">
        <ul>
            <?php foreach ($pages as $p) : ?>

                <li>
                    <p>
                        <?php echo 'nom: ' . $p->nom; ?> <br>
                        <?php echo 'site: ' . $p->site; ?><br>
                    <div>
                        <img style="<?php if (empty($p->url)) echo 'display: none' ?>" src="<?php echo pathinfo($_SERVER['HTTP_REFERER'], PATHINFO_DIRNAME) . "/{$p->url}"; ?>" alt="Chargement de l'image..." width="300" height="300" />
                    </div>
                    </p>
                </li>
            <?php endforeach; ?>
        </ul>
        </a>
    </div>
</div>


