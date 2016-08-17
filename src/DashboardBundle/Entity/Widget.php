<?php
// src/DashboardBundle/Entity/Widget.php

namespace DashboardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="DashboardBundle\Entity\WidgetRepository")
 */

/**
 * Dashboard
 *
 * @ORM\Table(name="widget")
 * @ORM\Entity(repositoryClass="DashboardBundle\Repository\WidgetRepository")
 */
class Widget
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
     * @ORM\Column(name="Type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="Query", type="string", length=3000)
     */
    private $query;

    /**
     * @var int
     *
     * @ORM\Column(name="Position", type="integer")
     */
    private $position;
    
   /**
   * @ORM\ManyToOne(targetEntity="DashboardBundle\Entity\Dashboard")
   * @ORM\JoinColumn(nullable=false)
   */
    private $dashboard;
    
    
    

    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Widget
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
     * Set query
     *
     * @param string $query
     * @return Widget
     */
    public function setQuery($query)
    {
        $this->query = $query;

        return $this;
    }

    /**
     * Get query
     *
     * @return string 
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Set position
     *
     * @param integer $position
     * @return Widget
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer 
     */
    public function getPosition()
    {
        return $this->position;
    }
    


    /**
     * Set dashboard
     *
     * @param \DashboardBundle\Entity\Dashboard $dashboard
     * @return Widget
     */
    public function setDashboard(\DashboardBundle\Entity\Dashboard $dashboard)
    {
        $this->dashboard = $dashboard;

        return $this;
    }

    /**
     * Get dashboard
     *
     * @return \DashboardBundle\Entity\Dashboard 
     */
    public function getDashboard()
    {
        return $this->dashboard;
    }
}
