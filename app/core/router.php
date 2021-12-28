<?php
class Router
{

    // on a un seul router donc pas besoin de l'instancier 
    /**
     * permet de parser une url 
     * @param $url url à parser
     * @return tableau contenant les parametres 
     */
    static function parse($url, $request)
    {
        $url = trim($url, '/'); //eliminer les premiers // inutiles
        $params = explode('/', $url);
        //print_r($params);
        $request->controller = $params[0];
        $request->action = isset($params[1]) ? $params[1] : 'index';
        //print_r($r);
        $request->params = array_slice($params, 2);

        return true;
    }
}
