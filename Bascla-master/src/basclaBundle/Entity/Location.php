<?php

namespace basclaBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;



use Doctrine\ORM\Mapping as ORM;

/**
 * Location
 *
 * @ORM\Table(name="location", indexes={@ORM\Index(name="location_ibfk_1", columns={"idlocation"})})
 * @ORM\Entity
 */
class Location
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="datetime", nullable=true)
     */
    private $dateDebut = 'NULL';

    /**
     * @var \DateTime
     * @Assert\GreaterThanOrEqual(propertyPath="dateDebut",message="la date debut doit debut < date fin")

     * @ORM\Column(name="date_fin", type="datetime", nullable=true)
     */
    private $dateFin = 'NULL';

    /**
     * Location constructor.
     */
    public function __construct()
    {
        $this->dateDebut = new \DateTime('now');
        $this->dateFin = new \DateTime('now');
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param \DateTime $dateDebut
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    /**
     * @param \DateTime $dateFin
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    }

    /**
     * @param \Velolouer $idlocation
     */
    public function setIdlocation($idlocation)
    {
        $this->idlocation = $idlocation;
    }


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * @return \Velolouer
     */
    public function getIdlocation()
    {
        return $this->idlocation;
    }



    /**

     * @ORM\Column(name="idlocation", type="integer", nullable=false)
     */
    private $idlocation;


}

