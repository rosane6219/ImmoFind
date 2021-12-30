<?php
//inclure les fichiers necessaire pour le fonctionement du projet

define('WEBROOT', dirname(__File__));
define('ROOT', dirname(WEBROOT));
define('DS',DIRECTORY_SEPARATOR);
define('CORE',ROOT.DS.'core');
define('BASE_URL',dirname(dirname($_SERVER['SCRIPT_NAME'])));

require CORE.DS.'include.php';
new Dispatcher();
?>