<?php

class Livre {
    // on déclare nos attributs pour caractériser un livre lambda
    private string $_titre;
    private int $_nbPages;
    private DateTime $_anneeParution;
    private float $_prix;
    private Auteur $_auteur;

    // on construit notre fonction __construct
    public function __construct (string $titre, int $nbPages, string $anneeParution, float $prix, Auteur $auteur) {
        $this->_titre = $titre;
        $this->_nbPages = $nbPages;
        $this->_anneeParution = new DateTime ($anneeParution);
        $this->_prix = $prix;
        $this->_auteur = $auteur;
        $this->_auteur->addLivre($this);
    }


    public function getTitre () : string
    {
        return $this->_titre;
    }

    public function setTitre (string $titre)
    {
        $this->_titre = $titre;

        return $this;
    }

    public function getNbPages () : int
    {
        return $this->_nbPages;
    }

    public function setNbPages (int $nbPages)
    {
        $this->_nbPages = $nbPages;

        return $this;
    }

    public function getAnneeParution () : DateTime
    {
        return $this->_anneeParution;
    }

    public function setAnneeParution (string $anneeParution)
    {
        $this->_anneeParution = new DateTime ($anneeParution);

        return $this;
    }

    public function getPrix () : float
    {
        return $this->_prix;
    }

    public function setPrix (float $prix)
    {
        $this->_prix = $prix;

        return $this;
    }

    public function getAuteur () : Auteur
    {
        return $this->_auteur;
    }

    public function setAuteur (Auteur $auteur)
    {
        $this->_auteur = $auteur;

        return $this;
    }

    public function __toString () {
        return $this->_titre." de ".$this->_auteur;
    }

    /* autre possibilité si je veux faire un chainage complet de l'auteur :

    public function __toString () {
        return $this->_titre." de ".$this->_auteur->getPrenom()." ".$this->_auteur->getNom();
    }
    */

}