<?php
error_reporting(E_ALL);
define("PATH", dirname(__FILE__));
define('ROOT', PATH . "/../../../");
require_once(ROOT . "modulos/comunicaciones/librerias/Configuracion.cnf.php");
Sesion::init();
$cadenas=new Cadenas();
$fechas=new Fechas();
$sesion=new Sesion();
/** Includes **/
echo("<h1>Instalando Modulo de Comunicaciones</h1>");
echo("<ul>");
require_once(PATH . "/variables.inc.php");
require_once(PATH . "/modulo.inc.php");
require_once(PATH . "/permisos.inc.php");
echo("</ul>");
?>