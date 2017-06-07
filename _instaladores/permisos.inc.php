<?php

/**
 * Este archivo ocntiene  todos los permisos especificados para la implementación
 * del modulo, los permisos se definen uno por uno en proceso tipo instalación.
 * Este archivo representa la instalación de los permisos en la plataforma.
 */
$permisos = new Comunicaciones_Permisos();
echo("<li>Verificando la existencia de los permisos requeridos...<ul>");
/** SOCIAL-MODULO-ACCEDER * */
$permisos->crear(array(
    "modulo" =>$modulo["modulo"],
    "permiso" => "SOCIAL-MODULO-ACCEDER",
    "nombre" => "Acceso Modulo Social",
    "descripcion" => "Este permiso se utiliza para conceder acceso al módulo.",
    "fecha" =>$hoy,
    "hora" =>$ahora,
    "creador" =>$usuario
        )
);
echo("</ul></li>");
?>