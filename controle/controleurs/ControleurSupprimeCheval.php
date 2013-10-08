<?php
require_once 'ControleurInterface.php';


/**
 * Description of ControleurInserePersonne
 *
 * @author Fabrice Missonnier
 */
class ControleurSupprimeCheval implements ControleurInterface {
   
    public function dispatch($vue, $modele, $tabParametres) {
        // insereAliment?descFR=Cantal&descAN=Cantal&numGenre=06.6
        try {
            $ok = $modele->getCheval()->supprimerUnCheval($tabParametres["nom"]);
            $vue->getCheval()->afficheSuppressionChevalOK();
        }
        catch(ModeleExceptions $ex){
            $vue->getCheval()->afficheSuppressionChevalNonOK();
        }
    }
}

?>
