<?php




class connect{

    private $id_utlisateur;    

    public function __construct($id){
        $this->id_utilisateur = $id;
    }

    public function affichage_utilisateur(){
        try
{
	$bdd = new PDO('mysql:host=localhost;dbname=market;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}   
    $reponse = $bdd->query("SELECT * FROM utilisateur WHERE pseudo='".$id_utlisateur."';");
    return $reponse;

}

    

}