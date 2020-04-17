<?php

namespace basclaDBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Challenge
 *
 * @ORM\Table(name="challenge")
 * @ORM\Entity(repositoryClass= "basclaDBundle\Repository\Entity\ChallengeRepository")
 */
class Challenge
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_ch", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idCh;

    /**
     * @var string
     *
     * @ORM\Column(name="title_ch", type="string", length=20, nullable=false)
     */
    private $titleCh;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_ch", type="string", length=150, nullable=false)
     */
    private $descCh;

    /**
     * @var string
     *
     * @ORM\Column(name="pic_ch", type="string", length=70, nullable=false)
     */
    private $picCh;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_max_pub", type="integer", nullable=false)
     */
    private $nbrMaxPub;

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
     * @return string
     */
    public function getTitleCh()
    {
        return $this->titleCh;
    }

    /**
     * @param string $titleCh
     */
    public function setTitleCh($titleCh)
    {
        $this->titleCh = $titleCh;
    }

    /**
     * @return string
     */
    public function getDescCh()
    {
        return $this->descCh;
    }

    /**
     * @param string $descCh
     */
    public function setDescCh($descCh)
    {
        $this->descCh = $descCh;
    }

    /**
     * @return string
     */
    public function getPicCh()
    {
        return $this->picCh;
    }

    /**
     * @param string $picCh
     */
    public function setPicCh($picCh)
    {
        $this->picCh = $picCh;
    }

    /**
     * @return int
     */
    public function getNbrMaxPub()
    {
        return $this->nbrMaxPub;
    }

    /**
     * @param int $nbrMaxPub
     */
    public function setNbrMaxPub($nbrMaxPub)
    {
        $this->nbrMaxPub = $nbrMaxPub;
    }


}

