<?php
require_once 'ControleurInterface.php';


/**
 * Description of ControleurInserePersonne
 *
 * @author Fabrice Missonnier
 */
class ControleurInsereCheval implements ControleurInterface {
   
    public function dispatch($vue, $modele, $tabParametres) {
        // insereAliment?descFR=Cantal&descAN=Cantal&numGenre=06.6
        try {
            $ok = $modele->getCheval()->setUnCheval($tabParametres["nom"], $tabParametres["couleurRobe"]);
            $vue->getCheval()->afficheInsertChevalOK();
        }
        catch(ModeleExceptions $ex){
            $vue->getCheval()->afficheInsertChevalNonOK();
        }
    }
}

?>
