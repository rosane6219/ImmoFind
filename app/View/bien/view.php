<div>

    <?php $title_layout = $page->titre ?>
    <h1>Nos Biens</h1>
    <div class="" id="myTopnav">
        <ul>
            <?php foreach ($pages as $b) : ?>
                <li><a href="<?php echo BASE_URL . '/bien/view/' . $b->id ?>" title="<?php echo $b->titre; ?>">
                        <?php
                        echo $b->type;
                        echo $b->prix;
                        echo $b->descrption;
                        echo $b->ville;
                        echo $b->codepostal;
                        echo $b->modif;
                        ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        </a>
    </div>
    <div><h3> <?php echo $page->titre ?> </h3></div> 
    <p> <?php echo $page->type;  ?> <br>
        <?php echo $page->prix; ?> <br>
        <?php echo $page->descrption; ?> <br>
        <?php echo $page->ville; ?> <br>
        <?php echo $page->codepostal; ?> <br>
        <?php echo $page->modif; ?> <br>
    </p>

</div>