<?php

namespace TestApp\Lib\Class;


class Utilitaire {
    // Gestion des erreurs
        public function getErr1(){
            throw new \Exception("Error ... Message : Ce type de fichier n'est pas pris en charge", 1);
        }

        public function getErr2(){
            throw new \Exception("Error ... Message", 1);
        }

        public function getErr3(){
            throw new \Exception("Error ... Message", 1);
        }

        // try {
        //
        // } catch(e) {
        //
        // } finally {
        //
        // }
}
