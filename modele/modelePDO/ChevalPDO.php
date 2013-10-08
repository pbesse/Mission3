<?php




/**
 * Description of PersonnePDO
 *
 * @author Fabrice Missonnier
 */

 class ChevalPDO {
    
    public function getLesChevaux(){
        $maConnexion = new ConnexionBD();
        
        $select = $maConnexion->getConnexion()->query("SELECT * FROM Cheval");

        //mode de récupération par défaut
        $select->setFetchMode(PDO::FETCH_OBJ);
        $i=0;
        //traite les résultats en boucle
        $enregistrement = $select->fetch();
        
        $tabElem = NULL;
        while($enregistrement )
        { 
            $tabElem[$i]["IdC"] = $enregistrement->id;
            $tabElem[$i]["NomC"] = $enregistrement->nom;
            $tabElem[$i]["CouleurRobeC"] = $enregistrement->couleurRobe ;
            $enregistrement = $select->fetch();
            $i++;
        }
       
        if ($tabElem == NULL){
            throw new ModeleExceptions (0);
        }
        else
        {     
            return $tabElem;
        }
    }
    
    public function getLesNoms(){
    $maConnexion = new ConnexionBD();
        
        $select = $maConnexion->getConnexion()->query("SELECT nom FROM Cheval");

        //mode de récupération par défaut
        $select->setFetchMode(PDO::FETCH_OBJ);
        $i=0;
        //traite les résultats en boucle
        $enregistrement = $select->fetch();
        
        $tabElem = NULL;
        while($enregistrement )
        { 
            $tabElem[$i]["NomC"] = $enregistrement->nom;
            $enregistrement = $select->fetch();
            $i++;
        }
       
        if ($tabElem == NULL){
            throw new ModeleExceptions (0);
        }
        else
        {     
            return $tabElem;
        }
    }
    
    public function getLesCouleurDeRobes(){
    $maConnexion = new ConnexionBD();
        
        $select = $maConnexion->getConnexion()->query("SELECT couleurRobe FROM Cheval");

        //mode de récupération par défaut
        $select->setFetchMode(PDO::FETCH_OBJ);
        $i=0;
        //traite les résultats en boucle
        $enregistrement = $select->fetch();
        
        $tabElem = NULL;
        while($enregistrement )
        { 
            $tabElem[$i]["CouleurRobeC"] = $enregistrement->couleurRobe;
            $enregistrement = $select->fetch();
            $i++;
        }
       
        if ($tabElem == NULL){
            throw new ModeleExceptions (0);
        }
        else
        {     
            return $tabElem;
        }
    }
    
    public function setUnCheval($nomC, $couleurRobeC){
        $maConnexion = new ConnexionBD();

        //applique la méthode query sur l’objet $connection
        $req2 = "INSERT INTO Cheval (nom, couleurRobe) VALUES
        ('".$nomC."','".$couleurRobeC."');";
        
        $res = $maConnexion->getConnexion()->exec($req2);

        if (!$res){
            throw new ModeleExceptions (1);
        }
    }
        
    public function modifierUnCheval($nomC,$newNom){
        $maConnexion = new ConnexionBD();

        //applique la méthode query sur l’objet $connection
        $reqModif = "UPDATE Cheval SET nom='".$newNom."' WHERE nom='".$nomC."';";
        
        $res = $maConnexion->getConnexion()->exec($reqModif);

        if (!$res){
            throw new ModeleExceptions(1);
        }
    }
     
    public function supprimerUnCheval($nomC){
        $maConnexion = new ConnexionBD();

        //applique la méthode query sur l’objet $connection
        $reqSup = "DELETE FROM Cheval WHERE nom ='".$nomC."';";
        
        $res = $maConnexion->getConnexion()->exec($reqSup);

        if (!$res){
            throw new ModeleExceptions(1);
        }   
    }
 }
?>
