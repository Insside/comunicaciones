<?php

if (!class_exists("Comunicaciones_Modulos")) {
    require_once(ROOT . "modulos/aplicacion/librerias/Aplicacion_Modulos.class.php");

    class Comunicaciones_Modulos extends Aplicacion_Modulos {

        private static $modulo = "611";
        private static $nombre = "Comunicaciones";
        private static $titulo = "Módulo de Comunicaciones  ";
        private static $descripcion = "Módulo de comunicaciones internas y externas. ";

        /**
         * Retorna la referencia del modulo definido.
         * @return type
         */
        public static function getModulo() {
            return(self::$modulo);
        }

        public static function getNombre() {
            return(self::$nombre);
        }

        public static function getTitulo() {
            return(self::$titulo);
        }

        public static function getDescripcion() {
            return(self::$descripcion);
        }

    }

}
?>