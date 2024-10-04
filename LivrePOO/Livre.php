<?php

// On crée la classe de l'objet que l'on instanciera - Ici le Livre
Class Livre  {
    private string $_titre; // On attend une chaîne de caractères
    private DateTime $_annee; // On attend une année (YYYY) de parution du livre
    private int $_nbPages; // On attend un nombre entier de pages
    private float $_prix; // On attend un prix défini, ici un float avec 2 décimales
    private Auteur $_auteur; // On attend l'auteur de l'ouvrage

/* Je veux créer un objet Livre qui contient ces attributs ci-dessus
De ce fait je dois construire l'objet avec les valeurs indiquées */

    public function __construct(string $titre, string $annee, int $nbPages, float $prix, Auteur $auteur){
        $this -> _titre = $titre;
        $this -> _annee = new DateTime($annee); // On convertit l'année en DateTime
        $this -> _nbPages = $nbPages;
        $this -> _prix = $prix;
        $this -> _auteur = $auteur;
        $this -> _auteur -> addLivre($this); // On ajoute le livre à la bibliographie de l'auteur
    }

    // Mutateurs - on définit nos objets initiliasés

    public function setTitre($titre) {
        $this -> _titre = $titre;
    }
    
    public function setAnnee($annee) {
        $this -> _annee = $annee;
    }
    
    public function setNbPages($nbPages) {
        $this -> _nbPages = $nbPages;
    }
    
    public function setPrix($prix) {
        $this -> _prix = $prix;
    }

    public function setAuteur($auteur) {
        $this -> _auteur = $auteur;
    }


    // Accesseurs - on récupère les informations de nos objets initialisés

    public function getTitre($titre) : string {
        return $this -> _titre;
    }

    public function getAnnee($annee) : DateTime {
        return $this -> _annee;
    }

    public function getNbPages($nbPages) : int {
        return $this -> _nbPages;
    }

    public function getPrix($prix) : float {
        return $this -> _prix;
    }

    public function getAuteur($auteur) : Auteur {
        return $this -> _auteur;
    }


    // On retourne à l'écran l'affichage du livre en question
    public function __toString() : string {
        return $this -> _titre." (".$this -> _annee->format("Y").") : ".$this -> _nbPages." pages / ".$this -> _prix." €";
    }
}


//"l'encapsulation en programmation" ;
/* Il s'agit de définir trois niveaux de visibilité / accessibilité pour nos propriétés, méthodes et constantes avec public, private, ptrotected
Ainsi on définit quel élément peut être modifier par l'extérieur de la Classe ou non (source = Pierre Giraud) */