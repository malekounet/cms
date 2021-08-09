<?php
class utilisateur{
    
    private $nom;
    private $email;
    private $pass

    public function __construct($nom, $email, $pass){
        $this->nom = $nom;
        $this->$email = $email;
        $this->pass = $pass;
    }

    public function insertion_utilisateur(){
        try
{
	$bdd = new PDO('mysql:host=localhost;dbname=market;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}   
    $reponse = $bdd->prepare("INSERT INTO utilisateur (nom, email, pass) VALUES (?, ?, ?);");
    $insertion = execute(array($nom, $email, $pass));
    return $insertion;

}
}