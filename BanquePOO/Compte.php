<?php

Class Compte {
    private string $_libelle; // Nom du compte = compte courant / livret A...
    private float $_solde;
    private string $_devise;
    private Titulaire $_titulaire; // Son titulaire unique

    public function __construct(string $libelle, float $solde, string $devise, Titulaire $titulaire){
        $this -> _libelle = $libelle;
        $this -> _solde = $solde;
        $this -> _devise = $devise;
        $this -> _titulaire = $titulaire;
        $this -> _titulaire -> addCompte($this);
    }

        // Mutateurs

        public function setLibelle($libelle){
            $this -> _libelle = $libelle;
        }
    
        public function setSolde($solde){
            $this -> _solde = $solde;
        }
    
        public function setDevise($devise){
            $this -> _devise = $devise;
        }
    
        public function setTitulaire($titulaire){
            $this -> _titulaire = $titulaire;
        }
    
        // Accesseurs
    
        public function getLibelle($libelle) : string {
            return $this -> _libelle;
        }
    
        public function getSolde($solde) : float {
            return $this -> _solde;
        }
    
        public function getDevise($devise) : string {
            return $this -> _devise;
        }
    
        public function getTitulaire($titulaire) : Titulaire {
            return $this -> _titulaire;
        }
    
        // Fonction pour créditer un compte 
        public function crediterCompte(float $argent){
            $this -> _solde += $argent;
            echo "Vous avez ajouté <b>".$argent." ".$this -> _devise."</b> sur votre compte <b>".$this -> _libelle."</b><br>";
            echo "Votre nouveau solde est de : <b>".$this -> _solde." ".$this -> _devise."</b><br>";
        }

         // Fonction pour débiter un compte 
        public function debiterCompte(float $argent){
            $this -> _solde -= $argent;
            echo "Vous avez retiré <b>".$argent." ".$this -> _devise."</b> de votre compte <b>".$this -> _libelle."</b><br>";
            echo "Votre nouveau solde est de : <b>".$this -> _solde." ".$this -> _devise."</b><br>";
        }

        // Fonction pour un virement entre deux comptes 
        public function virementCompte(float $argent, Compte $compteDestinataire){
            $this -> _solde -= $argent;
            // Message de transfert de fond effectué avec succès
            echo "Virement effectué de <b>".$argent." ".$this->_devise."</b> du compte <b>".$this->_libelle."</b> de <b>".$this -> _titulaire."</b> à <b>".$compteDestinataire -> _titulaire."</b>.<br>";
            $compteDestinataire -> _solde += $argent;
            // Message de transfert de fond effectué avec succès
            echo "Virement reçu de <b>".$argent." ".$compteDestinataire ->_devise."</b> sur votre compte <b>".$compteDestinataire->_libelle."</b> de la part de <b>".$this -> _titulaire."</b>.<br>";
        }

        public function __toString() : string {
            return "<u>".$this -> _libelle."</u><br>"."Titulaire : <b>".$this -> _titulaire."</b><br>"."Solde : <b>".$this -> _solde.$this -> _devise."</b>";
        }



}