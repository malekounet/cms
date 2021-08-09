<?php
class utilisateur{
    
    private $nom;
    private $prenom;
    private $email;
    private $pass

    public function __construct($nom, $prenom, $email, $pass){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->$email = $email;
        $this->pass = $pass;
    }
}



class connect{

    $id_utlisateur;

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

}

    

}