<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Bibliotheque
 * @ApiResource()
 * @ORM\Table(name="bibliotheque", indexes={@ORM\Index(name="id_user", columns={"id_user"})})
 * @ORM\Entity(repositoryClass="App\Repository\BibliothequeRepository")
 */
class Bibliotheque
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_biblio", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBiblio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_crea", type="date", nullable=false)
     */
    private $dateCrea;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_bibli", type="string", length=25, nullable=false)
     */
    private $nomBibli;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;

    public function getIdBiblio(): ?int
    {
        return $this->idBiblio;
    }

    public function getDateCrea(): ?\DateTimeInterface
    {
        return $this->dateCrea;
    }

    public function setDateCrea(\DateTimeInterface $dateCrea): self
    {
        $this->dateCrea = $dateCrea;

        return $this;
    }

    public function getNomBibli(): ?string
    {
        return $this->nomBibli;
    }

    public function setNomBibli(string $nomBibli): self
    {
        $this->nomBibli = $nomBibli;

        return $this;
    }

    public function getIdUser(): ?Users
    {
        return $this->idUser;
    }

    public function setIdUser(?Users $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }


}
