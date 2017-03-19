<?php
date_default_timezone_set('Europe/Paris');

if(isset($_REQUEST['page'])){ 
    $page = $_REQUEST['page']; }
    else{
    $page = 'acceuil'; 
    }

        require_once dirname(__FILE__).'/vues/v_header.php';
        require_once dirname(__FILE__).'/vues/v_menu.php';

switch($page){
   case 'acceuil':
        require_once dirname(__FILE__).'/vues/v_acceuil.php';
        break;
    
   case 'BTS' :
        require_once dirname(__FILE__).'/vues/v_BTS.php';
        break;
    
    
    case 'PPE1' :
        require_once dirname(__FILE__).'/vues/v_ppe1.php';
        break;
    
    
    case 'PPE2M1' :
        require_once dirname(__FILE__).'/vues/v_ppe2m1.php';
        break; 
    
    case 'PPE2M2' :
        require_once dirname(__FILE__).'/vues/v_ppe2m2.php';
        break;
   
    
    case 'PPE2M3' :
        require_once dirname(__FILE__).'/vues/v_ppe2m3.php';
        break;
    
    
    case 'GLPI' :
        require_once dirname(__FILE__).'/vues/v_GLPI.php';
        break;  
    
    case 'Auto' :
        require_once dirname(__FILE__).'/vues/v_Auto.php';
        break;
   
    
    case 'Banque' :
        require_once dirname(__FILE__).'/vues/v_Banque.php';
        break;
   
    
    case 'Commercial' :
        require_once dirname(__FILE__).'/vues/v_Commercial.php';
        break;
    
    case 'Contact' :
        require_once dirname(__FILE__).'/vues/v_contact.php';
        break;
    
    case 'Stage1' :
        require_once dirname(__FILE__).'/vues/v_stage1.php';
        break;
    
    case 'Stage2' :
        require_once dirname(__FILE__).'/vues/v_stage2.php';
        break;
    }
    
    
require_once dirname(__FILE__).'/vues/v_pied.php';   
    

?>