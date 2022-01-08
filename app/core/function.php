<?php
function debug($var){
    if (Conf::$debug>0){
        $debug = debug_backtrace();
        echo '<p>&nbsp;</p><p><a href="#" onclick="$(this).parent().next(\'ol\').slideToggle(); return false;"><strong>'.$debug[0]['file'].' </strong> l.'. $debug[0]['line'].'</a></p>';
        echo'<ol>';//style="display:none"
        foreach ($debug as $k=>$v){if($k>0){
            echo '<li><strong>'.$v['file'].' </strong> l.'. $v['line'].'</li>';
        }}
        echo'</ol>';
        echo'<pre>';
        print_r($var);
        echo '</pre>';
    }
} 

function uploadImage($file){
    $validExtensions = array('.jpg', '.jpeg', '.gif', '.png');
                if($_FILES['image']['error'] > 0) {
                    $this->Session->setFlash(' Une erreur est survenue lors du transfert. ','ECHEC');
                    return null;
                }

                $fileName = $_FILES['image']['name'];
                $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);

                if(!in_array($fileExt, $validExtensions)){
                    $this->Session->setFlash(' Le fichier n\'est pas une image. ','ECHEC');
                    return null;
                }

                $tmpName = $_FILES['image']['tmp_name'];
                $uniqueName = md5(uniqid(rand(), true));
                $fileName = "uploads/". $uniqueName . $fileExt;
                
                if (!file_exists('uploads')) {
                    mkdir('uploads', 0777, true);
                }
                
                $result = move_uploaded_file($tmpName, $fileName);

                if($result) return $fileName;
                else return null;
}

function downloadImage($url){
    $fileExt = pathinfo($url, PATHINFO_EXTENSION);
    header('Content-type: image/'.$fileExt);
    echo readfile($url);
}
