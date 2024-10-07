<?php

Class Compte {
    private string $libelle; // Nom du compte = compte courant / livret A...
    private float $solde;
    private string $devise;
    private Titulaire $titulaire; // Son titulaire unique

    public function __construct(string $libelle, float $solde, string $devise, Titulaire $titulaire){
        $this -> libelle = $libelle;
        $this -> solde = $solde;
        $this -> devise = $devise;
        $this -> titulaire = $titulaire;
        $this -> titulaire -> addCompte($this);
    }

        // Setters

        public function setLibelle($libelle){
            $this -> libelle = $libelle;
        }
    
        public function setSolde($solde){
            $this -> solde = $solde;
        }
    
        public function setDevise($devise){
            $this -> devise = $devise;
        }
    
        public function setTitulaire($titulaire){
            $this -> titulaire = $titulaire;
        }
    
        // Getters
    
        public function getLibelle($libelle) : string {
            return $this -> libelle;
        }
    
        public function getSolde($solde) : float {
            return $this -> solde;
        }
    
        public function getDevise($devise) : string {
            return $this -> devise;
        }
    
        public function getTitulaire($titulaire) : Titulaire {
            return $this -> titulaire;
        }
    
        // Fonction pour créditer un compte 
        public function crediterCompte(float $argent) {
            $this -> solde += $argent;
            echo "Vous avez crédité <b>$argent $this->devise</b> sur votre compte <b>$this</b><br>";
            echo "Votre nouveau solde est de : <b>$this->solde $this->devise</b><br>";
        }

         // Fonction pour débiter un compte 
        public function debiterCompte(float $argent) {
            $this -> solde -= $argent;
            echo "Vous avez retiré <b>$argent $this->devise</b> de votre compte <b>$this</b><br>";
            echo "Votre nouveau solde est de : <b>$this->solde $this->devise</b><br>";
        }

        // Fonction pour un virement entre deux comptes 
        public function virementCompte(float $argent, Compte $compteDestinataire) {
            // Virement effectué = retrait d'argent du compte source
            $this -> solde -= $argent;
            echo "Virement effectué de <b>$argent $this->devise</b> depuis votre compte <b>$this</b> de <b>$this->titulaire</b> à <b>$compteDestinataire->titulaire</b>.<br>";
            // Virement reçu = crédit d'argent sur le compte cible
            $compteDestinataire -> solde += $argent;
            echo "Virement reçu de <b>$argent $compteDestinataire->devise</b> sur votre compte <b>$compteDestinataire->libelle</b> de la part de <b>$this->titulaire</b>.<br>";
        }

        // Fonction affichant les informations pour un compte, titulaire, solde et devise
        public function getCompteInfos() {
            return "<li><u>$this</u><br>
                    Titulaire : <b>$this->titulaire</b><br>
                    Solde : <b>$this->solde $this->devise</b></li>";
        }

        public function __toString() : string {
            return $this -> libelle;
        }



}