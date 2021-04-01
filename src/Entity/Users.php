<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Users
 * @ApiResource()
 * @ORM\Table(name="users", indexes={@ORM\Index(name="id_bibliotheque", columns={"id_bibliotheque"})})
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class Users
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_user", type="string", length=40, nullable=false)
     */
    private $nomUser;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_user", type="string", length=25, nullable=false)
     */
    private $prenomUser;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudo", type="string", length=25, nullable=false)
     */
    private $pseudo;

    /**
     * @var int
     *
     * @ORM\Column(name="id_bibliotheque", type="integer", nullable=false)
     */
    private $idBibliotheque;

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function getNomUser(): ?string
    {
        return $this->nomUser;
    }

    public function setNomUser(string $nomUser): self
    {
        $this->nomUser = $nomUser;

        return $this;
    }

    public function getPrenomUser(): ?string
    {
        return $this->prenomUser;
    }

    public function setPrenomUser(string $prenomUser): self
    {
        $this->prenomUser = $prenomUser;

        return $this;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getIdBibliotheque(): ?int
    {
        return $this->idBibliotheque;
    }

    public function setIdBibliotheque(int $idBibliotheque): self
    {
        $this->idBibliotheque = $idBibliotheque;

        return $this;
    }


}
