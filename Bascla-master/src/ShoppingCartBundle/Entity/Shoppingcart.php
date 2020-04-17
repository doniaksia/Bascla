<?php

namespace ShoppingCartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Shoppingcart
 *
 * @ORM\Table(name="shoppingcart")
 * @ORM\Entity
 */
class Shoppingcart
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Panier", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idPanier;



    /**
     * @var float
     *
     * @ORM\Column(name="Ammount", type="float", precision=10, scale=0, nullable=false)
     */
    private $ammount;

    /**
     * @var Velovendre
     *
     * @ORM\ManyToOne(targetEntity="Velovendre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ide_produit", referencedColumnName="id")
     * })
     */
    private $ideProduit;

    /**
     * @return int
     */
    public function getIdPanier()
    {
        return $this->idPanier;
    }

    /**
     * @param int $idPanier
     */
    public function setIdPanier($idPanier)
    {
        $this->idPanier = $idPanier;
    }

    /**
     * @return float
     */
    public function getAmmount()
    {
        return $this->ammount;
    }

    /**
     * @param float $ammount
     */
    public function setAmmount($ammount)
    {
        $this->ammount = $ammount;
    }

    /**
     * @return mixed
     */
    public function getIdeProduit()
    {
        return $this->ideProduit;
    }

    /**
     * @param \Velovendre $ideProduit
     */
    public function setIdeProduit($ideProduit)
    {
        $this->ideProduit = $ideProduit;
    }









}

