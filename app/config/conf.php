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

?>