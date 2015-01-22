<?php

namespace PlsiRadiodjBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Requests
 *
 * @ORM\Table(name="requests")
 * @ORM\Entity
 */
class Requests
{
    /**
     * @var integer
     *
     * @ORM\Column(name="songID", type="integer", nullable=false)
     */
    private $songid;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="userIP", type="string", length=50, nullable=false)
     */
    private $userip;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", length=65535, nullable=true)
     */
    private $message;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="requested", type="datetime", nullable=false)
     */
    private $requested;

    /**
     * @var integer
     *
     * @ORM\Column(name="played", type="integer", nullable=false)
     */
    private $played;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set songid
     *
     * @param integer $songid
     * @return Requests
     */
    public function setSongid($songid)
    {
        $this->songid = $songid;

        return $this;
    }

    /**
     * Get songid
     *
     * @return integer 
     */
    public function getSongid()
    {
        return $this->songid;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Requests
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set userip
     *
     * @param string $userip
     * @return Requests
     */
    public function setUserip($userip)
    {
        $this->userip = $userip;

        return $this;
    }

    /**
     * Get userip
     *
     * @return string 
     */
    public function getUserip()
    {
        return $this->userip;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return Requests
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set requested
     *
     * @param \DateTime $requested
     * @return Requests
     */
    public function setRequested($requested)
    {
        $this->requested = $requested;

        return $this;
    }

    /**
     * Get requested
     *
     * @return \DateTime 
     */
    public function getRequested()
    {
        return $this->requested;
    }

    /**
     * Set played
     *
     * @param integer $played
     * @return Requests
     */
    public function setPlayed($played)
    {
        $this->played = $played;

        return $this;
    }

    /**
     * Get played
     *
     * @return integer 
     */
    public function getPlayed()
    {
        return $this->played;
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
