<?php

Class Titulaire { // Informations essentielles propres au titulaire
    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance; // On calculera l'âge à partir de sa date de naissance
    private string $ville;
    private array $comptes;
    
    public function __construct(string $nom, string $prenom, string $dateNaissance, string $ville){
        $this -> nom = $nom;
        $this -> prenom = $prenom;
        $this -> dateNaissance = new DateTime($dateNaissance);
        $this -> ville = $ville;
        $this -> comptes = [];
    }

    // Mutateurs

    public function setNom($nom){
        $this -> nom = $nom;
    }

    public function setPrenom($prenom){
        $this -> prenom = $prenom;
    }

    public function setDateNaissance($dateNaissance){
        $this -> dateNaissance = $dateNaissance;
    }

    public function setVille($ville){
        $this -> ville = $ville;
    }

    public function setComptes(array $comptes){
        $this -> comptes = $comptes;
    }

    // Accesseurs

    public function getNom($nom) : string {
        return $this -> nom;
    }

    public function getPrenom($prenom) : string {
        return $this -> prenom;
    }

    public function getDateNaissance($dateNaissance) : DateTime {
        return $this -> dateNaissance;
    }

    public function getVille($ville) : string {
        return $this -> ville;
    }

    public function getComptes(array $comptes) : array {
        return $this -> comptes;
    }

    public function addCompte(Compte $compte) {
        $this -> comptes[] = $compte;
    }
    
    // Fonction de calcul de l'âge
    public function getAge() {
        $dateActuelle =  new DateTime(); // on définit la date actuelle pour le calcul de l'âge avec la date de naissance
        $age = date_diff($this -> dateNaissance, $dateActuelle, true) -> y;
        return "Âge : <b>$age ans</b>";
    }

    public function afficherCompte() {
        $result = "<b>Espace personnel de $this</b><br>";
        $result .= $this->getAge()."<br>";
        $result .= "Ville : <b>$this->ville</b><br>";
        $result .= "<br>";
        foreach($this -> comptes as $compte) {
            $result .= "<br>".$compte->getCompteInfos()."<br>";
        }

        return $result;
    }
    
    public function __toString() :string {
        return "$this->prenom $this->nom";
    }
}
