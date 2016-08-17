<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Roles
 *
 * @ORM\Table(name="ds_roles")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\RolesRepository")
 */
class Roles
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
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createDate", type="datetime")
     */
    private $createDate;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updateDate", type="datetime", nullable=true)
     */
    private $updateDate;
    
    /**
     * @var bool
     *
     * @ORM\Column(name="enabled", type="boolean")
     */
    private $enabled;



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
     * Set description
     *
     * @param string $description
     *
     * @return Roles
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
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return Roles
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }
    
            /**
     * Set createdate
     *
     * @param datetime $createdate
     *
     * @return Roles
     */
        public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;

        return $this;
    }
    /**
     * Get createdate
     *
     * @return \Datetime
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }
            /**
     * Set updateDate
     *
     * @param \Datetime $updateDate
     *
     * @return Roles
     */
        public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;

        return $this;
    }
    /**
     * Get updateDate
     *
     * @return datetime
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }
    
}
