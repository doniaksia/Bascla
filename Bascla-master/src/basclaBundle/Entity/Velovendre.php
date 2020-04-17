<?php

namespace basclaBundle\Entity;


use Symfony\Component\Validator\Constraints as Assert;


use Doctrine\ORM\Mapping as ORM;

/**
 * Velovendre
 *
 * @ORM\Table(name="velovendre", indexes={@ORM\Index(name="categorie", columns={"categorie"})})
 * @ORM\Table(name="velovendre", indexes={@ORM\Index(name="type", columns={"type"})})
 * @ORM\Entity
 */
class Velovendre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
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
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param int $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return string
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param string $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    /**
     * @return string
     */
    public function getPathPhoto()
    {
        return $this->pathPhoto;
    }

    /**
     * @param string $pathPhoto
     */
    public function setPathPhoto($pathPhoto)
    {
        $this->pathPhoto = $pathPhoto;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param int $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return \Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param \Categorie $categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }
    /**
     * @var integer

     * @ORM\Column(name="views", type="integer", nullable=false)
     */
    private $views;

    /**
     * @return int
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * @param int $views
     */
    public function setViews($views)
    {
        $this->views = $views;
    }
    /**
     * @var integer
     * @Assert\NotBlank(message="le champs est oblig")
     * @ORM\Column(name="prix", type="integer", nullable=false)
     */
    private $prix;

    /**
     * @var string
     * @Assert\NotBlank(message="le champs est oblig")

     * @ORM\Column(name="marque", type="string", length=20, nullable=false)
     */
    private $marque;

    /**
     * @var string

     * @ORM\Column(name="Path_photo", type="string", length=200, nullable=false)
     */
    private $pathPhoto;

    /**
     * @var string
     * @Assert\NotBlank(message="le champs est oblig")
     * @ORM\Column(name="description", type="string", length=200, nullable=false)
     */
    private $description;

    /**
     * @var integer
     * @Assert\NotBlank(message="le champs est oblig")
     * @ORM\Column(name="nombre", type="integer", nullable=false)
     */
    private $nombre;

    /**
     * @var \type
     * @Assert\NotBlank(message="le champs est oblig")
     * @ORM\ManyToOne(targetEntity="type")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type", referencedColumnName="nom")
     * })
     */
    private $type = 'velo';

    /**
     * @var \Categorie
     * @Assert\NotBlank(message="le champs est oblig")

     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categorie", referencedColumnName="nom")
     * })
     */
    private $categorie;

    /**
     * @return int
     */
    public function getVerif()
    {
        return $this->verif;
    }

    /**
     * @param int $verif
     */
    public function setVerif($verif)
    {
        $this->verif = $verif;
    }

    /**
     * @var integer

     * @ORM\Column(name="verif", type="integer", nullable=false)
     */
    private $verif;
}

