<?php

namespace ShoppingCartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bill
 *
 * @ORM\Table(name="bill")
 * @ORM\Entity
 */
class Bill
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Bill", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idBill;

    /**
     * @var float
     *
     * @ORM\Column(name="Ammount", type="float", precision=10, scale=0, nullable=false)
     */
    private $ammount;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Item", type="integer", nullable=false)
     */
    private $idItem;

    /**
     * @var float
     *
     * @ORM\Column(name="Price", type="float", precision=10, scale=0, nullable=false)
     */
    private $price;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Client", type="integer", nullable=false)
     */
    private $idClient;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="Last_Name", type="string", length=50, nullable=false)
     */
    private $lastName;

    /**
     * @return int
     */
    public function getIdBill()
    {
        return $this->idBill;
    }

    /**
     * @param int $idBill
     */
    public function setIdBill($idBill)
    {
        $this->idBill = $idBill;
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
     * @return int
     */
    public function getIdItem()
    {
        return $this->idItem;
    }

    /**
     * @param int $idItem
     */
    public function setIdItem($idItem)
    {
        $this->idItem = $idItem;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }


}

