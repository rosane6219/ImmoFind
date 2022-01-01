<div>

    <!--?php $title_layout = $page->titre ?-->
    <h1>Details du Bien</h1>
    
    <div><h3> <?php echo $page->titre ?> </h3></div> 
    <p> <?php echo $page->type;  ?> <br>
        <?php echo $page->prix; ?> <br>
        <?php echo $page->descrption; ?> <br>
        <?php echo $page->ville; ?> <br>
        <?php echo $page->codepostal; ?> <br>
        <?php echo $page->modif; ?> <br>
    </p>

</div>