<?php

namespace PlsiRadiodjBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * History
 *
 * @ORM\Table(name="history", indexes={@ORM\Index(name="artist", columns={"artist"}), @ORM\Index(name="title", columns={"title"}), @ORM\Index(name="date_played", columns={"date_played"})})
 * @ORM\Entity
 */
class History
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_played", type="datetime", nullable=true)
     */
    private $datePlayed;

    /**
     * @var boolean
     *
     * @ORM\Column(name="song_type", type="boolean", nullable=false)
     */
    private $songType;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_subcat", type="integer", nullable=false)
     */
    private $idSubcat;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_genre", type="integer", nullable=false)
     */
    private $idGenre;

    /**
     * @var float
     *
     * @ORM\Column(name="duration", type="float", precision=11, scale=5, nullable=false)
     */
    private $duration;

    /**
     * @var string
     *
     * @ORM\Column(name="artist", type="string", length=255, nullable=false)
     */
    private $artist;

    /**
     * @var string
     *
     * @ORM\Column(name="original_artist", type="string", length=255, nullable=false)
     */
    private $originalArtist;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="album", type="string", length=255, nullable=false)
     */
    private $album;

    /**
     * @var string
     *
     * @ORM\Column(name="composer", type="string", length=255, nullable=false)
     */
    private $composer;

    /**
     * @var string
     *
     * @ORM\Column(name="year", type="string", length=4, nullable=false)
     */
    private $year;

    /**
     * @var integer
     *
     * @ORM\Column(name="track_no", type="smallint", nullable=false)
     */
    private $trackNo;

    /**
     * @var integer
     *
     * @ORM\Column(name="disc_no", type="smallint", nullable=false)
     */
    private $discNo;

    /**
     * @var string
     *
     * @ORM\Column(name="publisher", type="string", length=255, nullable=false)
     */
    private $publisher;

    /**
     * @var string
     *
     * @ORM\Column(name="copyright", type="string", length=255, nullable=false)
     */
    private $copyright;

    /**
     * @var string
     *
     * @ORM\Column(name="isrc", type="string", length=255, nullable=false)
     */
    private $isrc;

    /**
     * @var integer
     *
     * @ORM\Column(name="listeners", type="integer", nullable=true)
     */
    private $listeners;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set datePlayed
     *
     * @param \DateTime $datePlayed
     * @return History
     */
    public function setDatePlayed($datePlayed)
    {
        $this->datePlayed = $datePlayed;

        return $this;
    }

    /**
     * Get datePlayed
     *
     * @return \DateTime 
     */
    public function getDatePlayed()
    {
        return $this->datePlayed;
    }

    /**
     * Set songType
     *
     * @param boolean $songType
     * @return History
     */
    public function setSongType($songType)
    {
        $this->songType = $songType;

        return $this;
    }

    /**
     * Get songType
     *
     * @return boolean 
     */
    public function getSongType()
    {
        return $this->songType;
    }

    /**
     * Set idSubcat
     *
     * @param integer $idSubcat
     * @return History
     */
    public function setIdSubcat($idSubcat)
    {
        $this->idSubcat = $idSubcat;

        return $this;
    }

    /**
     * Get idSubcat
     *
     * @return integer 
     */
    public function getIdSubcat()
    {
        return $this->idSubcat;
    }

    /**
     * Set idGenre
     *
     * @param integer $idGenre
     * @return History
     */
    public function setIdGenre($idGenre)
    {
        $this->idGenre = $idGenre;

        return $this;
    }

    /**
     * Get idGenre
     *
     * @return integer 
     */
    public function getIdGenre()
    {
        return $this->idGenre;
    }

    /**
     * Set duration
     *
     * @param float $duration
     * @return History
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return float 
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set artist
     *
     * @param string $artist
     * @return History
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
     * Set originalArtist
     *
     * @param string $originalArtist
     * @return History
     */
    public function setOriginalArtist($originalArtist)
    {
        $this->originalArtist = $originalArtist;

        return $this;
    }

    /**
     * Get originalArtist
     *
     * @return string 
     */
    public function getOriginalArtist()
    {
        return $this->originalArtist;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return History
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set album
     *
     * @param string $album
     * @return History
     */
    public function setAlbum($album)
    {
        $this->album = $album;

        return $this;
    }

    /**
     * Get album
     *
     * @return string 
     */
    public function getAlbum()
    {
        return $this->album;
    }

    /**
     * Set composer
     *
     * @param string $composer
     * @return History
     */
    public function setComposer($composer)
    {
        $this->composer = $composer;

        return $this;
    }

    /**
     * Get composer
     *
     * @return string 
     */
    public function getComposer()
    {
        return $this->composer;
    }

    /**
     * Set year
     *
     * @param string $year
     * @return History
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return string 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set trackNo
     *
     * @param integer $trackNo
     * @return History
     */
    public function setTrackNo($trackNo)
    {
        $this->trackNo = $trackNo;

        return $this;
    }

    /**
     * Get trackNo
     *
     * @return integer 
     */
    public function getTrackNo()
    {
        return $this->trackNo;
    }

    /**
     * Set discNo
     *
     * @param integer $discNo
     * @return History
     */
    public function setDiscNo($discNo)
    {
        $this->discNo = $discNo;

        return $this;
    }

    /**
     * Get discNo
     *
     * @return integer 
     */
    public function getDiscNo()
    {
        return $this->discNo;
    }

    /**
     * Set publisher
     *
     * @param string $publisher
     * @return History
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;

        return $this;
    }

    /**
     * Get publisher
     *
     * @return string 
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * Set copyright
     *
     * @param string $copyright
     * @return History
     */
    public function setCopyright($copyright)
    {
        $this->copyright = $copyright;

        return $this;
    }

    /**
     * Get copyright
     *
     * @return string 
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * Set isrc
     *
     * @param string $isrc
     * @return History
     */
    public function setIsrc($isrc)
    {
        $this->isrc = $isrc;

        return $this;
    }

    /**
     * Get isrc
     *
     * @return string 
     */
    public function getIsrc()
    {
        return $this->isrc;
    }

    /**
     * Set listeners
     *
     * @param integer $listeners
     * @return History
     */
    public function setListeners($listeners)
    {
        $this->listeners = $listeners;

        return $this;
    }

    /**
     * Get listeners
     *
     * @return integer 
     */
    public function getListeners()
    {
        return $this->listeners;
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
