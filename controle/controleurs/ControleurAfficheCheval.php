<?php
require_once 'ControleurInterface.php';


/**
 * Description of ControleurAffichePersonne
 *
 * @author Fabrice Missonnier
 */
class ControleurAfficheCheval implements ControleurInterface {
   
    public function dispatch($vue, $modele, $tabParametres) {
        try {
            //on va chercher les infos dans le modèle
            $result = $modele->getCheval()->getLesChevaux();
            //on les affiche à la vue
            $vue->getCheval()->afficheLesChevaux($result);
        }
        catch(ModeleExceptions $ex){
            $vue->getGeneral()->afficheException($ex->getMessageErreur());
        }       
    }
}

?>
