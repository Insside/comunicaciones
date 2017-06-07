<?php

/**
 * Este archivo registra el modulo en la lista de modulos disponibles en la
 * plataforma.
 */
echo("<li>Verificando la existencia del módulo...<ul>");
if (!empty($modulo["modulo"])) {
    echo("<li>El módulo estaba previamente registrado...</li>");
} else {
    $db = new MySQL(Sesion::getConexion());
    $sql = (""
            . "INSERT INTO `aplicacion_modulos` SET 
            `modulo`={$m->getModulo()},
            `nombre`='{$m->getNombre()}',
            `titulo`='{$m->getTitulo()}',
            `fecha`='{$hoy}',
            `hora`='{$ahora}',
            `creador`='{$usuario}'"
            . ";");
    echo($sql);
    $db->sql_query($sql);
    $db->sql_close();
    echo("<li>El módulo se registrado correctamente...</li>");
}
echo("</ul></li>");
?>