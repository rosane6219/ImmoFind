<div>

    <?php $title_layout = $page->nom ?>
    <h1>Nos Collaborateurs</h1>
    <div class="" id="myTopnav">
        <ul>
            <?php $all = $this->request('collabo', 'getAll'); ?>
            <?php foreach ($all as $p) : ?>
                <li><a href="<?php echo BASE_URL . '/collabo/view/' . $p->id ?>" title="<?php echo $p->nom; ?>"><?php echo $p->nom ?></a></li>

            <?php endforeach; ?>
        </ul>
        </a>
    </div>
    <div class="" id="myTopnav">
        <ul>
            <?php foreach ($all as $p) : ?>
                <li><a href="<?php echo BASE_URL . '/collabo/view/' . $p->id ?>" title="<?php echo $p->nom; ?>"> </a>
                    <p> <?php echo 'nom: '.$p->nom ; echo '    poste: '.$p->poste;?></p>
                    <p> <?php  ?> </p>
                </li>
            <?php endforeach; ?>
        </ul>
        </a>
    </div>
</div>