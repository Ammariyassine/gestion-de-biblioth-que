<?php 
    class Auteur {
        private $id;
        private $nom;
        /** @var Livre[] */
        private $livres = [];
    
        // ... getters et setters ...
    
        public function addLivre(Livre $livre): void {
            $this->livres[] = $livre;
            $livre->setAuteur($this);
        }
    }
    
    class Livre {
        private $id;
        private $titre;
        private $auteur; // Un objet Auteur
    
        // ... getters et setters ...
    }
?>