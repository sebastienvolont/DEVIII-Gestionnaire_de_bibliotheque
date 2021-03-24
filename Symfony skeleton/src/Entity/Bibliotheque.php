<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bibliotheque
 *
 * @ORM\Table(name="bibliotheque", indexes={@ORM\Index(name="id_user", columns={"id_user"})})
 * @ORM\Entity
 */
class Bibliotheque
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_bibli", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBibli;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_bibli", type="string", length=255, nullable=false)
     */
    private $nomBibli;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;

    public function getIdBibli(): ?int
    {
        return $this->idBibli;
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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getIdUser(): ?User
    {
        return $this->idUser;
    }

    public function setIdUser(?User $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }


}
