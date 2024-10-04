<?php

Class Titulaire { // Informations essentielles propres au titulaire
    private string $_nom;
    private string $_prenom;
    private DateTime $_dateNaissance; // On calculera l'âge à partir de sa date de naissance
    private string $_ville;
    private array $_comptes;
    
    public function __construct(string $nom, string $prenom, string $dateNaissance, string $ville, array $comptes = []){
        $this -> _nom = $nom;
        $this -> _prenom = $prenom;
        $this -> _dateNaissance = new DateTime($dateNaissance);
        $this -> _ville = $ville;
        $this -> _comptes = $comptes;
    }

    // Mutateurs

    public function setNom($nom){
        $this -> _nom = $nom;
    }

    public function setPrenom($prenom){
        $this -> _prenom = $prenom;
    }

    public function setDateNaissance($dateNaissance){
        $this -> _dateNaissance = $dateNaissance;
    }

    public function setVille($ville){
        $this -> _ville = $ville;
    }

    public function setComptes(array $comptes){
        $this -> _comptes = $comptes;
    }

    // Accesseurs

    public function getNom($nom) : string {
        return $this -> _nom;
    }

    public function getPrenom($prenom) : string {
        return $this -> _prenom;
    }

    public function getDateNaissance($dateNaissance) : DateTime {
        return $this -> _dateNaissance;
    }

    public function getVille($ville) : string {
        return $this -> _ville;
    }

    public function getComptes(array $comptes) : array {
        return $this -> _comptes;
    }

    public function addCompte(Compte $compte) {
        $this -> _comptes[] = $compte;
    }
    
    public function afficherCompte(){
        echo "<b>Espace personnel de ".$this -> _nom." ".$this -> _prenom."</b><br>";
        $dateActuelle =  new DateTime(); // on définit la date actuelle pour le calcul de l'âge avec la date de naissance
        $age = date_diff($this -> _dateNaissance, $dateActuelle, true) -> y;
        echo "Âge : <b>".$age." ans</b><br>";
        echo "Ville : <b>".$this->_ville."</b><br>";
        foreach($this -> _comptes as $compte){
            echo "<br>".$compte."<br>";
        }
    }

    public function __toString() :string {
        return $this -> _nom." ".$this -> _prenom;
    }
}
