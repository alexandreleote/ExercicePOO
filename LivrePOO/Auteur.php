<?php


// On crée la classe de l'objet que l'on instanciera - Ici l'Auteur

class Auteur {
    private string $nom;  // Le type de la var est un string car on attend une chaîne de caractères
    private string $prenom;
    private array $livres;

    public function __construct(string $nom, string $prenom){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->livres = [];
    }

    // Mutateurs
    public function setNom(string $nom) {
        $this->nom = $nom;
    }

    public function setPrenom(string $prenom) {
        $this->prenom = $prenom;
    }

    public function setLivres(array $livres) {
        $this->livres = $livres;
    }

    // Accesseurs
    public function getNom() : string {
        return $this->nom;
    }

    public function getPrenom() : string {
        return $this->prenom;
    }

    public function getLivres() : array {
        return $this->livres;
    }

    // Ajout d'un livre
    public function addLivre(Livre $livre) {
        $this->livres[] = $livre;
    }

    // Afficher la bibliographie de l'auteur
    public function afficherBibliographie() {
        $result = "<b>Livres de $this</b><br>";
        foreach ($this->livres as $livre) {
            $result .= $livre->getLivreInfos()."<br>"; // Appelle le __toString() de Livre avec la fonction des infos du livre en question
        }

        return $result;
    }

    public function __toString() : string {
        return "$this->prenom $this->nom";
    }
}
