<?php
class Bien extends Model {
   
    var $validate = array(
        'titre' => array(
            'rule' => 'noEmpty',
            'message' => 'Vous devez préciser un titre'
        ),
        'ville' => array(
            'rule' => 'noEmpty',
            'message' => 'Vous devez préciser un ville'
        ),
        'codepostal' => array(
            'rule' => 'noEmpty',
            'message' => 'Vous devez préciser un code postal'
        ),
        'typeannonce' => array(
            'rule' => 'noEmpty',
            'message' => 'Vous devez préciser un type d\'annonce'
        ),
        'typebien' => array(
            'rule' => 'noEmpty',
            'message' => 'Vous devez préciser un type de bien'
        ),
        'prix' => array(
            'rule' => 'noEmpty',
            'message' => 'Vous devez préciser un prix'
        ),
        'prix' => array(
            'rule' => 'isNumeric',
            'message' => 'Le prix doit être un nombre'
        ),
    ); 

    function validates($data){
         $errors = array();
         foreach($this->validate as $k=>$v){
             if (!isset($data->$k)){
                 $errors[$k] = $v['message'];
             }else{
                 if($v['rule'] == 'noEmpty')  {
                     if(empty($data->$k)){
                        $errors[$k] = $v['message'];
                     }
                 }elseif($v['rule'] == 'isNumeric'){
                     if(!is_numeric($data->$k)){
                        $errors[$k] = $v['message'];
                     }
                 }elseif(!preg_match('/^'.$v['rule'].'$/',$data->$k)){
                    $errors[$k] = $v['message'];
                 }
             }
         }
         $this->errors = $errors;
         if(isset($this->Form)){
             $this->Form->errors = $errors;
         }
         if (empty($errors)){
             return true;
         }
         return false;
    }
}

?>