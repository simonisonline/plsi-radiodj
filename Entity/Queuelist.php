<?php

namespace PlsiRadiodjBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Queuelist
 *
 * @ORM\Table(name="queuelist")
 * @ORM\Entity
 */
class Queuelist
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
     * @ORM\Column(name="artist", type="string", length=250, nullable=false)
     */
    private $artist;

    /**
     * @var integer
     *
     * @ORM\Column(name="swID", type="integer", nullable=false)
     */
    private $swid;

    /**
     * @var float
     *
     * @ORM\Column(name="swPlay", type="float", precision=11, scale=5, nullable=false)
     */
    private $swplay;

    /**
     * @var integer
     *
     * @ORM\Column(name="vtID", type="integer", nullable=false)
     */
    private $vtid;

    /**
     * @var float
     *
     * @ORM\Column(name="vtPlay", type="float", precision=11, scale=5, nullable=false)
     */
    private $vtplay;

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
     * @return Queuelist
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
     * Set artist
     *
     * @param string $artist
     * @return Queuelist
     */
    public function setArtist($artist)
    {
        $this->artist = $artist;

        return $this;
    }

    /**
     * Get artist
     *
     * @return string 
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * Set swid
     *
     * @param integer $swid
     * @return Queuelist
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
     * Set swplay
     *
     * @param float $swplay
     * @return Queuelist
     */
    public function setSwplay($swplay)
    {
        $this->swplay = $swplay;

        return $this;
    }

    /**
     * Get swplay
     *
     * @return float 
     */
    public function getSwplay()
    {
        return $this->swplay;
    }

    /**
     * Set vtid
     *
     * @param integer $vtid
     * @return Queuelist
     */
    public function setVtid($vtid)
    {
        $this->vtid = $vtid;

        return $this;
    }

    /**
     * Get vtid
     *
     * @return integer 
     */
    public function getVtid()
    {
        return $this->vtid;
    }

    /**
     * Set vtplay
     *
     * @param float $vtplay
     * @return Queuelist
     */
    public function setVtplay($vtplay)
    {
        $this->vtplay = $vtplay;

        return $this;
    }

    /**
     * Get vtplay
     *
     * @return float 
     */
    public function getVtplay()
    {
        return $this->vtplay;
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
