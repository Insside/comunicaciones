<?php
error_reporting(E_ALL);
if(!defined("ROOT")){define('ROOT', dirname(__FILE__) . '/../../../');}
if(!defined("ROOT_MODULE_COMUNICACIONES")){define('ROOT_MODULE_COMUNICACIONES', dirname(__FILE__) . '/../');}
$ROOT = (!isset($ROOT)) ? ROOT:$ROOT;
require_once(ROOT . "librerias/Configuracion.cnf.php");
/** Requires **/
$RMC=ROOT_MODULE_COMUNICACIONES;
$RMCL=$RMC."librerias/";
// Librerias Del Modulo
require_once($RMCL. "Comunicaciones_Permisos.class.php");
require_once($RMCL. "Comunicaciones_Modulos.class.php");
?>