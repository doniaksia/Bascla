<?php


namespace basclaBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="type", indexes={@ORM\Index(name="nom", columns={"nom"})})
 * @ORM\Entity
 */
class type
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)

     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @var string
     * @ORM\Id
     * @ORM\Column(name="nom", type="string", length=20, nullable=false)
     */
    private $nom;
    public function __toString()
    {


        return $this->getNom() ;
    }





}