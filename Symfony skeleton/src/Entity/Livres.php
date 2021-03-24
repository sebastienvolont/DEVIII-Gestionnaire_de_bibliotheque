<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livres
 *
 * @ORM\Table(name="livres", indexes={@ORM\Index(name="Auteur", columns={"Auteur"}), @ORM\Index(name="id_bibli", columns={"id_bibli"})})
 * @ORM\Entity
 */
class Livres
{
    /**
     * @var int
     *
     * @ORM\Column(name="idLivre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlivre;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=false)
     */
    private $titre;

    /**
     * @var int
     *
     * @ORM\Column(name="anneeParution", type="integer", nullable=false)
     */
    private $anneeparution;

    /**
     * @var string
     *
     * @ORM\Column(name="maisonEdition", type="string", length=255, nullable=false)
     */
    private $maisonedition;

    /**
     * @var string
     *
     * @ORM\Column(name="synopsis", type="text", length=65535, nullable=false)
     */
    private $synopsis;

    /**
     * @var string
     *
     * @ORM\Column(name="genreLitteraire", type="string", length=255, nullable=false)
     */
    private $genrelitteraire;

    /**
     * @var string
     *
     * @ORM\Column(name="premiereDeCouverture", type="string", length=255, nullable=false)
     */
    private $premieredecouverture;

    /**
     * @var \Bibliotheque
     *
     * @ORM\ManyToOne(targetEntity="Bibliotheque")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_bibli", referencedColumnName="id_bibli")
     * })
     */
    private $idBibli;

    

    public function getIdlivre(): ?int
    {
        return $this->idlivre;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getAnneeparution(): ?int
    {
        return $this->anneeparution;
    }

    public function setAnneeparution(int $anneeparution): self
    {
        $this->anneeparution = $anneeparution;

        return $this;
    }

    public function getMaisonedition(): ?string
    {
        return $this->maisonedition;
    }

    public function setMaisonedition(string $maisonedition): self
    {
        $this->maisonedition = $maisonedition;

        return $this;
    }

    public function getSynopsis(): ?string
    {
        return $this->synopsis;
    }

    public function setSynopsis(string $synopsis): self
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    public function getGenrelitteraire(): ?string
    {
        return $this->genrelitteraire;
    }

    public function setGenrelitteraire(string $genrelitteraire): self
    {
        $this->genrelitteraire = $genrelitteraire;

        return $this;
    }

    public function getPremieredecouverture(): ?string
    {
        return $this->premieredecouverture;
    }

    public function setPremieredecouverture(string $premieredecouverture): self
    {
        $this->premieredecouverture = $premieredecouverture;

        return $this;
    }

    public function getIdBibli(): ?Bibliotheque
    {
        return $this->idBibli;
    }

    public function setIdBibli(?Bibliotheque $idBibli): self
    {
        $this->idBibli = $idBibli;

        return $this;
    }

    public function getAuteur(): ?Auteurs
    {
        return $this->auteur;
    }

    public function setAuteur(?Auteurs $auteur): self
    {
        $this->auteur = $auteur;

        return $this;
    }


}
