<?php

namespace PlsiRadiodjBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CartsList
 *
 * @ORM\Table(name="carts_list", uniqueConstraints={@ORM\UniqueConstraint(name="ID", columns={"ID"})})
 * @ORM\Entity
 */
class CartsList
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pID", type="integer", nullable=false)
     */
    private $pid;

    /**
     * @var integer
     *
     * @ORM\Column(name="swID", type="integer", nullable=false)
     */
    private $swid;

    /**
     * @var integer
     *
     * @ORM\Column(name="swButton", type="integer", nullable=false)
     */
    private $swbutton;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=100, nullable=false)
     */
    private $color;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set pid
     *
     * @param integer $pid
     * @return CartsList
     */
    public function setPid($pid)
    {
        $this->pid = $pid;

        return $this;
    }

    /**
     * Get pid
     *
     * @return integer 
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Set swid
     *
     * @param integer $swid
     * @return CartsList
     */
    public function setSwid($swid)
    {
        $this->swid = $swid;

        return $this;
    }

    /**
     * Get swid
     *
     * @return integer 
     */
    public function getSwid()
    {
        return $this->swid;
    }

    /**
     * Set swbutton
     *
     * @param integer $swbutton
     * @return CartsList
     */
    public function setSwbutton($swbutton)
    {
        $this->swbutton = $swbutton;

        return $this;
    }

    /**
     * Get swbutton
     *
     * @return integer 
     */
    public function getSwbutton()
    {
        return $this->swbutton;
    }

    /**
     * Set color
     *
     * @param string $color
     * @return CartsList
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string 
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
