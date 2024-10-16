<?php

class Auteur {
    // on déclare nos attributs pour caractériser un livre lambda
    private string $_nom;
    private string $_prenom;
    private array $_livres; // la collection de livres écrites par l'auteur sous forme d'un tableau rempli d'objets 'livres'

    // on construit notre fonction __construct
    public function __construct (string $nom, string $prenom) {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_livres = []; // le tableau est vide, l'auteur n'a rien écrit pour le moment :
                             // il va se remplir au fur et à mesure par des éléments qui seront des objets de la classe Livre.
    }

    public function getNom () : string
    {
        return $this->_nom;
    }

    public function setNom (string $nom)
    {
        $this->_nom = $nom;

        return $this;
    }

    public function getPrenom () : string
    {
        return $this->_prenom;
    }

    public function setPrenom (string $prenom)
    {
        $this->_prenom = $prenom;

        return $this;
    }

    public function getLivres () : array
    {
        return $this->_livres;
    }


    // setter peu utile car nous n'allons pas écraser d'objets 'livre'
    public function setLivres (array $livres)
    {
        $this->_livres = $livres;

        return $this;
    }


    public function addLivre (Livre $livre) {
        $this->_livres[] = $livre; // on range un objet livre dans le tableau '_livres' de l'auteur.
    }


    public function afficherBibliographie () {

        $result = "<h2>Livres de $this</h2><ul>";

        foreach ($this->_livres as $livre) {
            $result .= "<li>".$livre->getTitre()." (".$livre->getAnneeParution()->format("Y").") : ".$livre->getNbPages()." pages / ".$livre->getPrix(). " euros</li>";
        }

        $result .= "</ul>";

        return $result;
    }

    // permet d'afficher le prénom et le nom de l'auteur quand on souhaite afficher l'objet 'auteur'
    public function __toString () {
        return $this->_prenom." ".$this->_nom;
    }
}

    