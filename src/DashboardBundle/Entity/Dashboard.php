<?php
// src/DashboardBundle/Entity/Dashboard.php

namespace DashboardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="DashboardBundle\Entity\DashboardRepository")
 */

/**
 * Dashboard
 *
 * @ORM\Table(name="dh_dashboard")
 * @ORM\Entity(repositoryClass="DashboardBundle\Repository\DashboardRepository")
 */
class Dashboard
{
    /**
    * @ORM\OneToMany(targetEntity="DashboardBundle\Entity\Widget", mappedBy="dashboard")
    */
    private $widget;
  
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
     * @ORM\Column(name="Name", type="string", length=255)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Creation_Date", type="datetime")
     */
    private $creationDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Update_Date", type="datetime")
     */
    private $updateDate;
    
    


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
     * @return Dashboard
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
     * Set creationDate
     *
     * @param \DateTime $creationDate
     * @return Dashboard
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime 
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set updateDate
     *
     * @param \DateTime $updateDate
     * @return Dashboard
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;

        return $this;
    }

    /**
     * Get updateDate
     *
     * @return \DateTime 
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }
    
    /**
     * Set widget
     *
     * @param string $widget
     * @return Dashboard
     */
    public function setWidget($widget)
    {
        $this->widget = $widget;

        return $this;
    }
    
    /**
     * Get widget
     * 
     * @return string 
     */
    public function getWidget()
    {
        return $this->widget;
    }
}
