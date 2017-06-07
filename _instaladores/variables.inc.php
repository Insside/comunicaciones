<?php
/** Variables **/
$hoy=Fechas::getDate();
$ahora=Fechas::getNow();
$usuario= Sesion::getUser();
$m=new Comunicaciones_Modulos();
$modulo= $m->consultar($m->getModulo());
?>