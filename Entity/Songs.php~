<?php

namespace PlsiRadiodjBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Songs
 *
 * @ORM\Table(name="songs", uniqueConstraints={@ORM\UniqueConstraint(name="path", columns={"path"})}, indexes={@ORM\Index(name="title", columns={"title"}), @ORM\Index(name="artist", columns={"artist"}), @ORM\Index(name="date_played", columns={"date_played"}), @ORM\Index(name="artist_played", columns={"artist_played"}), @ORM\Index(name="count_played", columns={"count_played"}), @ORM\Index(name="id_subcat", columns={"id_subcat"})})
 * @ORM\Entity
 */
class Songs
{
    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=false)
     */
    private $path;

    /**
     * @var integer
     *
     * @ORM\Column(name="enabled", type="integer", nullable=false)
     */
    private $enabled;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_played", type="datetime", nullable=true)
     */
    private $datePlayed;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="artist_played", type="datetime", nullable=true)
     */
    private $artistPlayed;

    /**
     * @var integer
     *
     * @ORM\Column(name="count_played", type="integer", nullable=false)
     */
    private $countPlayed;

    /**
     * @var integer
     *
     * @ORM\Column(name="play_limit", type="integer", nullable=false)
     */
    private $playLimit;

    /**
     * @var integer
     *
     * @ORM\Column(name="limit_action", type="integer", nullable=false)
     */
    private $limitAction;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="datetime", nullable=true)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="datetime", nullable=true)
     */
    private $endDate;

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
     * @ORM\Column(name="weight", type="float", precision=5, scale=1, nullable=false)
     */
    private $weight;

    /**
     * @var float
     *
     * @ORM\Column(name="duration", type="float", precision=11, scale=5, nullable=false)
     */
    private $duration;

    /**
     * @var string
     *
     * @ORM\Column(name="cue_times", type="string", length=255, nullable=false)
     */
    private $cueTimes;

    /**
     * @var boolean
     *
     * @ORM\Column(name="precise_cue", type="boolean", nullable=false)
     */
    private $preciseCue;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fade_type", type="boolean", nullable=false)
     */
    private $fadeType;

    /**
     * @var boolean
     *
     * @ORM\Column(name="end_type", type="boolean", nullable=false)
     */
    private $endType;

    /**
     * @var boolean
     *
     * @ORM\Column(name="overlay", type="boolean", nullable=false)
     */
    private $overlay;

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
     * @var float
     *
     * @ORM\Column(name="bpm", type="float", precision=11, scale=1, nullable=false)
     */
    private $bpm;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="text", length=65535, nullable=true)
     */
    private $comments;

    /**
     * @var string
     *
     * @ORM\Column(name="sweepers", type="string", length=250, nullable=true)
     */
    private $sweepers;

    /**
     * @var string
     *
     * @ORM\Column(name="album_art", type="string", length=255, nullable=false)
     */
    private $albumArt;

    /**
     * @var string
     *
     * @ORM\Column(name="buy_link", type="string", length=255, nullable=false)
     */
    private $buyLink;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tdate_played", type="datetime", nullable=true)
     */
    private $tdatePlayed;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tartist_played", type="datetime", nullable=true)
     */
    private $tartistPlayed;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set path
     *
     * @param string $path
     * @return Songs
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set enabled
     *
     * @param integer $enabled
     * @return Songs
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return integer 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set datePlayed
     *
     * @param \DateTime $datePlayed
     * @return Songs
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
     * Set artistPlayed
     *
     * @param \DateTime $artistPlayed
     * @return Songs
     */
    public function setArtistPlayed($artistPlayed)
    {
        $this->artistPlayed = $artistPlayed;

        return $this;
    }

    /**
     * Get artistPlayed
     *
     * @return \DateTime 
     */
    public function getArtistPlayed()
    {
        return $this->artistPlayed;
    }

    /**
     * Set countPlayed
     *
     * @param integer $countPlayed
     * @return Songs
     */
    public function setCountPlayed($countPlayed)
    {
        $this->countPlayed = $countPlayed;

        return $this;
    }

    /**
     * Get countPlayed
     *
     * @return integer 
     */
    public function getCountPlayed()
    {
        return $this->countPlayed;
    }

    /**
     * Set playLimit
     *
     * @param integer $playLimit
     * @return Songs
     */
    public function setPlayLimit($playLimit)
    {
        $this->playLimit = $playLimit;

        return $this;
    }

    /**
     * Get playLimit
     *
     * @return integer 
     */
    public function getPlayLimit()
    {
        return $this->playLimit;
    }

    /**
     * Set limitAction
     *
     * @param integer $limitAction
     * @return Songs
     */
    public function setLimitAction($limitAction)
    {
        $this->limitAction = $limitAction;

        return $this;
    }

    /**
     * Get limitAction
     *
     * @return integer 
     */
    public function getLimitAction()
    {
        return $this->limitAction;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return Songs
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return Songs
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set songType
     *
     * @param boolean $songType
     * @return Songs
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
     * @return Songs
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
     * @return Songs
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
     * Set weight
     *
     * @param float $weight
     * @return Songs
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return float 
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set duration
     *
     * @param float $duration
     * @return Songs
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
     * Set cueTimes
     *
     * @param string $cueTimes
     * @return Songs
     */
    public function setCueTimes($cueTimes)
    {
        $this->cueTimes = $cueTimes;

        return $this;
    }

    /**
     * Get cueTimes
     *
     * @return string 
     */
    public function getCueTimes()
    {
        return $this->cueTimes;
    }

    /**
     * Set preciseCue
     *
     * @param boolean $preciseCue
     * @return Songs
     */
    public function setPreciseCue($preciseCue)
    {
        $this->preciseCue = $preciseCue;

        return $this;
    }

    /**
     * Get preciseCue
     *
     * @return boolean 
     */
    public function getPreciseCue()
    {
        return $this->preciseCue;
    }

    /**
     * Set fadeType
     *
     * @param boolean $fadeType
     * @return Songs
     */
    public function setFadeType($fadeType)
    {
        $this->fadeType = $fadeType;

        return $this;
    }

    /**
     * Get fadeType
     *
     * @return boolean 
     */
    public function getFadeType()
    {
        return $this->fadeType;
    }

    /**
     * Set endType
     *
     * @param boolean $endType
     * @return Songs
     */
    public function setEndType($endType)
    {
        $this->endType = $endType;

        return $this;
    }

    /**
     * Get endType
     *
     * @return boolean 
     */
    public function getEndType()
    {
        return $this->endType;
    }

    /**
     * Set overlay
     *
     * @param boolean $overlay
     * @return Songs
     */
    public function setOverlay($overlay)
    {
        $this->overlay = $overlay;

        return $this;
    }

    /**
     * Get overlay
     *
     * @return boolean 
     */
    public function getOverlay()
    {
        return $this->overlay;
    }

    /**
     * Set artist
     *
     * @param string $artist
     * @return Songs
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
     * @return Songs
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
     * @return Songs
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
     * @return Songs
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
     * @return Songs
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
     * @return Songs
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
     * @return Songs
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
     * @return Songs
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
     * @return Songs
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
     * @return Songs
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
     * @return Songs
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
     * Set bpm
     *
     * @param float $bpm
     * @return Songs
     */
    public function setBpm($bpm)
    {
        $this->bpm = $bpm;

        return $this;
    }

    /**
     * Get bpm
     *
     * @return float 
     */
    public function getBpm()
    {
        return $this->bpm;
    }

    /**
     * Set comments
     *
     * @param string $comments
     * @return Songs
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set sweepers
     *
     * @param string $sweepers
     * @return Songs
     */
    public function setSweepers($sweepers)
    {
        $this->sweepers = $sweepers;

        return $this;
    }

    /**
     * Get sweepers
     *
     * @return string 
     */
    public function getSweepers()
    {
        return $this->sweepers;
    }

    /**
     * Set albumArt
     *
     * @param string $albumArt
     * @return Songs
     */
    public function setAlbumArt($albumArt)
    {
        $this->albumArt = $albumArt;

        return $this;
    }

    /**
     * Get albumArt
     *
     * @return string 
     */
    public function getAlbumArt()
    {
        return $this->albumArt;
    }

    /**
     * Set buyLink
     *
     * @param string $buyLink
     * @return Songs
     */
    public function setBuyLink($buyLink)
    {
        $this->buyLink = $buyLink;

        return $this;
    }

    /**
     * Get buyLink
     *
     * @return string 
     */
    public function getBuyLink()
    {
        return $this->buyLink;
    }

    /**
     * Set tdatePlayed
     *
     * @param \DateTime $tdatePlayed
     * @return Songs
     */
    public function setTdatePlayed($tdatePlayed)
    {
        $this->tdatePlayed = $tdatePlayed;

        return $this;
    }

    /**
     * Get tdatePlayed
     *
     * @return \DateTime 
     */
    public function getTdatePlayed()
    {
        return $this->tdatePlayed;
    }

    /**
     * Set tartistPlayed
     *
     * @param \DateTime $tartistPlayed
     * @return Songs
     */
    public function setTartistPlayed($tartistPlayed)
    {
        $this->tartistPlayed = $tartistPlayed;

        return $this;
    }

    /**
     * Get tartistPlayed
     *
     * @return \DateTime 
     */
    public function getTartistPlayed()
    {
        return $this->tartistPlayed;
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
