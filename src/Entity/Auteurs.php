<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Auteurs
 *
 * @ORM\Table(name="auteurs", indexes={@ORM\Index(name="nom_auth", columns={"nom_auth"})})
 * @ORM\Entity
 */
class Auteurs
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_auth", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAuth;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_auth", type="string", length=255, nullable=false)
     */
    private $nomAuth;


}
