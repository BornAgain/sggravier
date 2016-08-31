<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProfilesRoles
 *
 * @ORM\Table(name="profiles_roles")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\ProfilesRolesRepository")
 */
class ProfilesRoles
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
     * @var \DateTime
     *
     * @ORM\Column(name="createDate", type="datetime")
     */
    private $createDate;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updateDate", type="datetime")
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
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return ProfilesRoles
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
}

