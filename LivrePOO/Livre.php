<?php

// On crée la classe de l'objet que l'on instanciera - Ici le Livre
Class Livre  {
    private string $titre; // On attend une chaîne de caractères
    private int $annee; // On attend une année (YYYY) de parution du livre
    private int $nbPages; // On attend un nombre entier de pages
    private float $prix; // On attend un prix défini, ici un float avec 2 décimales
    private Auteur $auteur; // On attend l'auteur de l'ouvrage

/* Je veux créer un objet Livre qui contient ces attributs ci-dessus
De ce fait je dois construire l'objet avec les valeurs indiquées */

    public function __construct(string $titre, int $annee, int $nbPages, float $prix, Auteur $auteur){
        $this -> titre = $titre;
        $this -> annee = $annee; // On convertit l'année en DateTime
        $this -> nbPages = $nbPages;
        $this -> prix = $prix;
        $this -> auteur = $auteur;
        $this -> auteur -> addLivre($this); // On ajoute le livre à la bibliographie de l'auteur
    }

    // Mutateurs - on définit nos objets initiliasés

    public function setTitre($titre) {
        $this -> titre = $titre;
    }
    
    public function setAnnee($annee) {
        $this -> annee = $annee;
    }
    
    public function setNbPages($nbPages) {
        $this -> nbPages = $nbPages;
    }
    
    public function setPrix($prix) {
        $this -> prix = $prix;
    }

    public function setAuteur($auteur) {
        $this -> auteur = $auteur;
    }


    // Accesseurs - on récupère les informations de nos objets initialisés

    public function getTitre($titre) : string {
        return $this -> titre;
    }

    public function getAnnee($annee) : int {
        return $this -> annee;
    }

    public function getNbPages($nbPages) : int {
        return $this -> nbPages;
    }

    public function getPrix($prix) : float {
        return $this -> prix;
    }

    public function getAuteur($auteur) : Auteur {
        return $this -> auteur;
    }

    public function getLivreInfos() {
        return $this." (".$this -> annee.") : ".$this -> nbPages." pages / ".$this -> prix." €";
    }

    // On retourne à l'écran l'affichage du livre en question
    public function __toString() : string {
        return $this -> titre;
    }
}


//"l'encapsulation en programmation" ;
/* Il s'agit de définir trois niveaux de visibilité / accessibilité pour nos propriétés, méthodes et constantes avec public, private, ptrotected
Ainsi on définit quel élément peut être modifier par l'extérieur de la Classe ou non (source = Pierre Giraud) */