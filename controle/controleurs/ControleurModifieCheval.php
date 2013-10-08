<?php
require_once 'ControleurInterface.php';


/**
 * Description of ControleurInserePersonne
 *
 * @author Fabrice Missonnier
 */
class ControleurModifieCheval implements ControleurInterface {
   
    public function dispatch($vue, $modele, $tabParametres) {
        // insereAliment?descFR=Cantal&descAN=Cantal&numGenre=06.6
        
        try {
            $ok = $modele->getCheval()->modifierUnCheval($tabParametres["nom"],$tabParametres["newNom"]);
            $vue->getCheval()->afficheInsertChevalOK();
        }
        catch(ModeleExceptions $ex){
            $vue->getCheval()->afficheInsertChevalNonOK();
        }
    }
}

?>
