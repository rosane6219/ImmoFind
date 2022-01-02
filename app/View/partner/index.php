<link rel="stylesheet" href="../css/main.css">

<div>
    <?php $title_layout = "Nos Partenaires"?>
    <h1>Nos Partenaires</h1>
    <div class="" id="myTopnav">
        <ul>
            <?php foreach ($pages as $p) : ?>
                <li>
                <p> <?php echo 'nom: '.$p->nom ; echo ' ;  site: '.$p->site;?></p>    
            </li>
            <?php endforeach; ?>
        </ul>
        </a>
    </div>
</div>


<!--a href="<?php echo BASE_URL . '/partner/index/' . $p->id ?>" title="<?php echo $p->nom; ?>"><?php echo $p->nom ?></a-->
 <!--?php $all = $this->request('partner', 'getAll'); ?-->