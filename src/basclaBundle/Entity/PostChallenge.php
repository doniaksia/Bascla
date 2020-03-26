<?php

namespace basclaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PostChallenge
 *
 * @ORM\Table(name="post_challenge")
 * @ORM\Entity
 */
class PostChallenge
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_pc", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPc;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_ch", type="integer", nullable=false)
     */
    private $idCh;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_client", type="integer", nullable=false)
     */
    private $idClient;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_pc", type="string", length=50, nullable=false)
     */
    private $descPc;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=50, nullable=false)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="map_circ", type="string", length=20, nullable=false)
     */
    private $mapCirc;

    /**
     * @var string
     *
     * @ORM\Column(name="pic_client", type="string", length=50, nullable=false)
     */
    private $picClient;

    /**
     * @var integer
     *
     * @ORM\Column(name="nmb_reaction", type="integer", nullable=false)
     */
    private $nmbReaction;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_client", type="string", length=20, nullable=false)
     */
    private $nomClient;

    /**
     * @return int
     */
    public function getIdPc()
    {
        return $this->idPc;
    }

    /**
     * @param int $idPc
     */
    public function setIdPc($idPc)
    {
        $this->idPc = $idPc;
    }

    /**
     * @return int
     */
    public function getIdCh()
    {
        return $this->idCh;
    }

    /**
     * @param int $idCh
     */
    public function setIdCh($idCh)
    {
        $this->idCh = $idCh;
    }

    /**
     * @return int
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * @param int $idClient
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;
    }

    /**
     * @return string
     */
    public function getDescPc()
    {
        return $this->descPc;
    }

    /**
     * @param string $descPc
     */
    public function setDescPc($descPc)
    {
        $this->descPc = $descPc;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getMapCirc()
    {
        return $this->mapCirc;
    }

    /**
     * @param string $mapCirc
     */
    public function setMapCirc($mapCirc)
    {
        $this->mapCirc = $mapCirc;
    }

    /**
     * @return string
     */
    public function getPicClient()
    {
        return $this->picClient;
    }

    /**
     * @param string $picClient
     */
    public function setPicClient($picClient)
    {
        $this->picClient = $picClient;
    }

    /**
     * @return int
     */
    public function getNmbReaction()
    {
        return $this->nmbReaction;
    }

    /**
     * @param int $nmbReaction
     */
    public function setNmbReaction($nmbReaction)
    {
        $this->nmbReaction = $nmbReaction;
    }

    /**
     * @return string
     */
    public function getNomClient()
    {
        return $this->nomClient;
    }

    /**
     * @param string $nomClient
     */
    public function setNomClient($nomClient)
    {
        $this->nomClient = $nomClient;
    }


}

