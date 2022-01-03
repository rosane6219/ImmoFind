<?php
class Conf
{
    static $debug = 1 ;
    static $databases = array(
        'default' => array(
            'host' => 'localhost',
            'port' => '5432',
            'database' => 'immofind',
            'login' => 'postgres',
            'password' => '1234',
            )
        );

}
/**
 * Admin
 */

Router::prefix('cockpit','admin');

/**
 * User
 */
Router::connect('bien/:slug-:id','bien/view/id:([0-9]+)/slug:([a-z0-9\-]+)');//+= 1..* /* =0..* slug:([a-z0-9\-]+)=> a-z ou 0-9 ou -
Router::connect('collaborateurs','collabo/index');
Router::connect('partenaires','partner/index');
Router::connect('notre-agence','agence/agence');
Router::connect('nous-contacter','contact/contact');
Router::connect('accueil','accueil/index');
Router::connect('connexion','connexion/connect');
Router::connect('inscription','connexion/inscription');
Router::connect('recherche','bien/search');







?>