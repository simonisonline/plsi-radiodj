<?php

namespace PlsiRadiodjBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Playlists
 *
 * @ORM\Table(name="playlists", uniqueConstraints={@ORM\UniqueConstraint(name="ID", columns={"ID"}), @ORM\UniqueConstraint(name="name", columns={"name"})})
 * @ORM\Entity
 */
class Playlists
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
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
     * Set name
     *
     * @param string $name
     * @return Playlists
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
