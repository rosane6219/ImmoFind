<div>
    <tr>
        <td> Liste des collaborateurs : en total <?php echo $total?></td>
        <td><a href="<?php echo Router::url('admin/colabo/edit') ?>">Créer un collaborateur</a></td>
    </tr>
   
</div>


<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Poste</th>
            <th>Actions</th>
        </tr>
    </thead>
   
    <tbody> 
        <?php foreach($pages as $k=>$v):?>
            <tr>
                <td><?php echo $v->id?></td>
                <td><?php echo $v->poste?></td>
                <td>
                    <?php  ?>
                    <a href="<?php echo Router::url('admin/collabo/edit/'.$v->id) ?>">modifier</a>
                    <a onclick="return confirm('Voulez vous vraiment supprimer ce contenu?')" href="<?php echo Router::url('admin/collabo/delete/'.$v->id) ;?>">supprimer</a>
                </td>
            </tr>
        <?php endforeach?>
    </tbody>
</table>