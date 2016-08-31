<?php

namespace DataSourceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DatasourceDetails
 *
 * @ORM\Table(name="datasource_details")
 * @ORM\Entity(repositoryClass="DataSourceBundle\Repository\DatasourceDetailsRepository")
 */
class DatasourceDetails
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdDate", type="datetime")
     */
    private $createdDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="upatedDate", type="datetime")
     */
    private $upatedDate;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="rank", type="integer")
     */
    private $rank;

    /**
     * @var bool
     *
     * @ORM\Column(name="enabled", type="boolean")
     */
    private $enabled;

    /**

   * @ORM\ManyToOne(targetEntity="DataSourceBundle\Entity\Datasource")

   * @ORM\JoinColumn(nullable=false)

   */
      private $datasource;
      
      
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return DatasourceDetails
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
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return DatasourceDetails
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime 
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set upatedDate
     *
     * @param \DateTime $upatedDate
     * @return DatasourceDetails
     */
    public function setUpatedDate($upatedDate)
    {
        $this->upatedDate = $upatedDate;

        return $this;
    }

    /**
     * Get upatedDate
     *
     * @return \DateTime 
     */
    public function getUpatedDate()
    {
        return $this->upatedDate;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return DatasourceDetails
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set rank
     *
     * @param integer $rank
     * @return DatasourceDetails
     */
    public function setRank($rank)
    {
        $this->rank = $rank;

        return $this;
    }

    /**
     * Get rank
     *
     * @return integer 
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return DatasourceDetails
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set datasource
     *
     * @param \DataSourceBundle\Entity\Datasource $datasource
     * @return DatasourceDetails
     */
    public function setDatasource(\DataSourceBundle\Entity\Datasource $datasource)
    {
        $this->datasource = $datasource;

        return $this;
    }

    /**
     * Get datasource
     *
     * @return \DataSourceBundle\Entity\Datasource 
     */
    public function getDatasource()
    {
        return $this->datasource;
    }
}
