<?php

namespace SiteProstooremonteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menu
 *
 * @ORM\Table(name="menu")
 * @ORM\Entity(repositoryClass="SiteProstooremonteBundle\Repository\MenuRepository")
 */
class Menu
{

    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="menu_id_seq", initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, unique=true)
     */
    private $url;

    /**
     * @var int
     *
     * @ORM\Column(name="parent_id", type="integer", options={"default" : -1})
     */
    private $parentId;

    /**
     * @var string
     *
     * @ORM\Column(name="seo_name", type="string", length=255, nullable=true)
     */
    private $seoName;

    /**
     * @var string
     *
     * @ORM\Column(name="seo_description", type="text", nullable=true)
     */
    private $seoDescription;

    /**
     * @var float
     *
     * @ORM\Column(name="seo_rating", type="float", options={"default" : -1})
     */
    private $seoRating;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_date_modified", type="date")
     */
    private $lastDateModified;


    public function __construct()
    {
        $this->lastDateModified = new \DateTime("now");
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Menu
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
     * Set description
     *
     * @param string $description
     *
     * @return Menu
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Menu
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set parentId
     *
     * @param integer $parentId
     *
     * @return Menu
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Get parentId
     *
     * @return int
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set seoName
     *
     * @param string $seoName
     *
     * @return Menu
     */
    public function setSeoName($seoName)
    {
        $this->seoName = $seoName;

        return $this;
    }

    /**
     * Get seoName
     *
     * @return string
     */
    public function getSeoName()
    {
        return $this->seoName;
    }

    /**
     * Set seoDescription
     *
     * @param string $seoDescription
     *
     * @return Menu
     */
    public function setSeoDescription($seoDescription)
    {
        $this->seoDescription = $seoDescription;

        return $this;
    }

    /**
     * Get seoDescription
     *
     * @return string
     */
    public function getSeoDescription()
    {
        return $this->seoDescription;
    }

    /**
     * Set seoRating
     *
     * @param float $seoRating
     *
     * @return Menu
     */
    public function setSeoRating($seoRating)
    {
        $this->seoRating = $seoRating;

        return $this;
    }

    /**
     * Get seoRating
     *
     * @return float
     */
    public function getSeoRating()
    {
        return $this->seoRating;
    }

    /**
     * Get lastDateModified
     *
     * @return \DateTime
     */
    public function getLastDateModified()
    {
        return $this->lastDateModified;
    }
}

