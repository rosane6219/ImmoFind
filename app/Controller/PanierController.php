<?php

class PanierController extends Controller{
 
    

    public function index($id) {
        $this->loadModel('Panier');
        $d['panier']= $this->Panier->find(array(
            'condition' => array('id_client' => $id),
            'join' => array(
                array('panier_bien', 'id_panier', 'id'),
                array('bien', 'id', 'id_bien')
            )
        ));
        if(empty($d['panier'])){
            $this->e404('Page introuvable');
        }
        $this->set($d);
    }

    public function delete($id){
        $this->loadModel('PanierBien');
        $this->Panier->delete($id);
        $this->Session->setFlash(' Le bien a été supprimé du panier','SUCCES');
        $this->redirect('panier/list');
    }

    public function add($panierid, $bienid){
        $this->loadModel('PanierBien');
        $data = new stdClass();
        $data->id_panier = $panierid;
        $data->id_bien = $bienid;
        $this->PanierBien->save($data);
        $this->Session->setFlash(' Le bien a été ajouté dans le panier','SUCCES');
        //$id = $this->PanierBien->id; 
        //$this->set($data);
    }
}
