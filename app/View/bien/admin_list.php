<div>
    Liste des biens : en total <?php echo $total?>
</div>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Actions</th>
        </tr>
    </thead>
   
    <tbody> 
        <?php foreach($pages as $k=>$v):?>
            <tr>
                <td><?php echo $v->id?></td>
                <td><?php echo $v->titre?></td>
                <td>
                    <?php  ?>
                    <a href="<?php echo Router::url('admin/bien/edit/'.$v->id) ?>">modifier</a>
                    <a onclick="return confirm('Voulez vous vraiment supprimer ce contenu?')" href="<?php echo Router::url('admin/bien/delete/'.$v->id) ?>">supprimer</a>
                </td>
            </tr>
        <?php endforeach?>
    </tbody>
</table>