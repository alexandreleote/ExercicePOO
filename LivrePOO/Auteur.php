<?php


// On crée la classe de l'objet que l'on instanciera - Ici l'Auteur

class Auteur {
    private string $_nom;  // Le type de la var est un string car on attend une chaîne de caractères
    private string $_prenom;
    private array $_livres;

    public function __construct(string $nom, string $prenom, array $livres = []){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_livres = $livres;
    }

    // Mutateurs
    public function setNom(string $nom) {
        $this->_nom = $nom;
    }

    public function setPrenom(string $prenom) {
        $this->_prenom = $prenom;
    }

    public function setLivres(array $livres) {
        $this->_livres = $livres;
    }

    // Accesseurs
    public function getNom() : string {
        return $this->_nom;
    }

    public function getPrenom() : string {
        return $this->_prenom;
    }

    public function getLivres() : array {
        return $this->_livres;
    }

    // Ajout d'un livre
    public function addLivre(Livre $livre) : void {
        $this->_livres[] = $livre;
    }

    // Afficher la bibliographie de l'auteur
    public function afficherBibliographie() : void {
        echo "<b>Livres de " . $this->_prenom . " " . $this->_nom . "</b><br>";
        foreach ($this->_livres as $livre) {
            echo $livre . "<br>"; // Appelle le __toString() de Livre
        }
    }

    public function __toString() : string {
        return $this->_nom;
    }
}
