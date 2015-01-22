<?php

namespace PlsiRadiodjBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subcategory
 *
 * @ORM\Table(name="subcategory")
 * @ORM\Entity
 */
class Subcategory
{
    /**
     * @var integer
     *
     * @ORM\Column(name="parentid", type="integer", nullable=false)
     */
    private $parentid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set parentid
     *
     * @param integer $parentid
     * @return Subcategory
     */
    public function setParentid($parentid)
    {
        $this->parentid = $parentid;

        return $this;
    }

    /**
     * Get parentid
     *
     * @return integer 
     */
    public function getParentid()
    {
        return $this->parentid;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Subcategory
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
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
