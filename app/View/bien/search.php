<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <!--    si on veut faire la pagination : video 4 a peu près minute 22-->
    <h2>Recherche d'un bien :</h2>

    <form action="<?php echo Router::url('bien/search') ?>" method="POST">
        <div class="row">

            <?php echo $this->Form->input('typeannonce', 'Type d\'annonce ', array('type' => 'select', '1' => 'Vente', '2' => 'Location')) ?>

            <?php echo $this->Form->input('typebien', 'Type de bien ', array('type' => 'select', '1' => 'Maison', '2' => 'Appartement', '3' => 'Studio', '4' => 'Chambre')) ?>

            <?php echo $this->Form->input('prix', 'Prix ') ?>

            <?php echo $this->Form->input('ville', 'Ville ') ?>

            <?php echo $this->Form->input('codepostal', 'Code Postal ') ?>

            <?php echo $this->Form->input('titre', 'Titre') ?>

            <div class="col">
                <input type="submit" name="submit" id="search" value="Rechercher"> <!-- modifier action form -->
                
            </div>
            <!--<tbody id="output">

            </tbody>-->
            <!--img src="loader.gif" id="loader" style="display: none;"-->
        </div>
    </form>
    <br>
    <!--<script type="text/javascript">
        $(document).ready(function() {
            $('#search').keypress(function() {
                $.ajax({
                    type: 'POST',
                    url: 'results.php',
                    data: {
                        typeannonce: $('#typeannonce').val(),
                        typebien: $('#typebien').val(),
                        prix: $('#prix').val(),
                        ville: $('#ville').val(),
                        codepostal: $('#codepostal').val(),
                        titre: $('#titre').val(),
                    },
                    beforeSend: function() {
                        $("#output").hide();
                    },
                    success: function(data) {
                        $('#output').html(data);
                        $("#output").show();
                    }
                });
            });
        });
    </script>-->
    <h1>Nos biens</h1>
    <div class="" id="myTopnav">
        <ul>
            <?php foreach ($pages as $b) : ?>
                <li>
                    <h2> <?php echo $b->titre; ?></h2>
                    <?php echo $b->typebien; ?> <br>
                    <?php echo $b->prix; ?> <br>
                    <?php echo $b->ville; ?> <br>
                    <?php echo $b->codepostal; ?> <br>
                    <a href="<?php
                                if (isset($_SESSION['User'])) echo Router::url("panier/add/userid:{$_SESSION['User']->id}/bienid:{$b->id}");
                                else echo '#'; ?>" title="">
                        <?php if (isset($_SESSION['User'])) echo 'Ajouter au panier'; ?>
                    </a>
                    <a href="<?php echo Router::url("bien/view/id:{$b->id}/slug:{$b->titre}"); ?>" title=""> Lire la suite</a>

                </li>
            <?php endforeach; ?>
        </ul>
        </a>
    </div>
    <!--<script type="text/javascript">
        $(document).ready(function() {
            $('#table').dataTable();
        });
    </script>-->
</body>

</html>