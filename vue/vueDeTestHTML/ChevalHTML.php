<?php
require_once 'GeneralHTML.php';

/**
 * Description of PersonneHTML
 *
 * @author Fabrice Missonnier
 */
 class ChevalHTML {
    private $general;
    
    function __construct() {
       $this->general = new GeneralHTML();
    }

    
    public function afficheLesChevaux ($tabElements){
        $this->general->getDebutPage("Affichage des chevaux");
        
        $nb = count ($tabElements);
        
        for($i=0;$i<$nb;$i++ ){
            echo($tabElements[$i]["IdC"]." ". $tabElements[$i]["NomC"]." "
                 .$tabElements[$i]["CouleurRobeC"]."</br> ");
            
        }
        $this->general->getRetourAccueil();
        $this->general->getFinPage();
    } //fonctionne
    
    
    public function afficheFormInsertionCheval(){
        $this->general->getDebutPage("Insertion d'un cheval");
        //attention : dans le formulaire, l'action envoyée est 
        //de la forme do.php?action=inserePersonne&nomP=MyTaylorIsRich&Prenom=Very&sexeP="M"
        //pour envoyer le paramètre inserePersonne, il faut le placer dans un input caché
        
        ?>
            <form action="do.php" method="GET">
                    Nom 
                    <input type="text" name="nom" size="20" ><BR/><BR/>
                    Couleur de la robe 
                    <input type="text" name="couleurRobe" size="20" ><BR/><BR/> 
                    <input type="hidden" name="action" value="insereCheval">
                    <input type="submit" value="Envoyer" >
                    <input type="reset" value="Annuler" >
                </form>
        <?php
        
        $this->general->getFinPage();
    } //fonctionne
    
    public function afficheFormModificationCheval(){
        $this->general->getDebutPage("Modification d'un cheval");
        //attention : dans le formulaire, l'action envoyée est 
        //de la forme do.php?action=inserePersonne&nomP=MyTaylorIsRich&Prenom=Very&sexeP="M"
        //pour envoyer le paramètre inserePersonne, il faut le placer dans un input caché
        
        ?>
             <form action="do.php" method="GET">
                 Nom: <br/>
                 <input type="text" name="nom" size="20" ><BR/><BR/>
                 Nouveau nom : <br/>
                 <input type="text" name="newNom" size="20" ><BR/><BR/>
                 <input type="hidden" name="action" value="modifieCheval">
                 <input type="submit" value="Modifier" >
                 <input type="reset" value="Annuler" >
           </form>

        <?php
        
        $this->general->getFinPage();
    }
    
    public function afficheFormSuppressionCheval(){
        $this->general->getDebutPage("Suppression d'un cheval");
        //attention : dans le formulaire, l'action envoyée est 
        //de la forme do.php?action=inserePersonne&nomP=MyTaylorIsRich&Prenom=Very&sexeP="M"
        //pour envoyer le paramètre inserePersonne, il faut le placer dans un input caché
        
        ?>
             <form action="do.php" method="GET">
                 Nom :
                 <input type="text" name="nom" size="20" ><BR/><BR/>
                 <input type="hidden" name="action" value="supprimeCheval">
                 <input type="submit" value="Supprimer" >
                 <input type="reset" value="Annuler" >
           </form>

        <?php
        
        $this->general->getFinPage();
    }
  
    public function afficheSuppressionChevalOK(){
        $this->general->getDebutPage("Suppression OK");
        ?>
        Le cheval a bien été supprimé de la base
        <?php
        $this->general->getRetourAccueil();
        $this->general->getFinPage();
    }
    
    public function afficheSuppressionChevalNonOK(){
        $this->general->getDebutPage("Suppression annulée");
        ?>
        Le cheval n'a pas été supprimé de la base
        <?php
        $this->general->getRetourAccueil();
        $this->general->getFinPage();
    }
    
    public function afficheInsertChevalOK(){
        $this->general->getDebutPage("Insertion OK");
        ?>
        Le cheval est bien inséré dans la base
        <?php
        $this->general->getRetourAccueil();
        $this->general->getFinPage();
    }
     
    public function afficheInsertChevalNonOK(){
        $this->general->getDebutPage("Insertion pas bien déroulée");
        ?>
        Le cheval n'a pas été inséré dans la base
        <?php
        $this->general->getRetourAccueil();
        $this->general->getFinPage();
    }
    
}
?>
