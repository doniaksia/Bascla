<?php


namespace basclaBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Views
 *
 * @ORM\Table(name="views")
 * @ORM\Entity
 */

class Views
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
     * @var integer

     * @ORM\Column(name="userid", type="integer", nullable=false)
     */
    private $user;
    /**
     * @var integer

     * @ORM\Column(name="veloid", type="integer", nullable=false)
     */
    private $velo;

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
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param int $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return int
     */
    public function getVelo()
    {
        return $this->velo;
    }

    /**
     * @param int $velo
     */
    public function setVelo($velo)
    {
        $this->velo = $velo;
    }

}