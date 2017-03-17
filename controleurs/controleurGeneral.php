<?php

//********************************************Contrôleur connexion*****************//
class ControleurGeneral {

    public function __construct() {
        ob_start();             // démarre le flux de sortie
        require_once '/vues/v_header.php';
        require_once '/vues/v_menu.php';
    }
    
    static public function Acceuil(){
        require_once '/vues/v_acceuil.php';
        require_once '/vues/v_pied.php';
        return ob_get_clean();
    }
    
     static public   function BTS(){
        require_once '/vues/v_BTS.php';
        require_once '/vues/v_pied.php';
        return ob_get_clean();
    }


    
}

?>