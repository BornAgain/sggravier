<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Role\RoleInterface;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Roles
 *
 * @ORM\Table(name="ds_roles")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\RolesRepository")
 */
class Roles implements RoleInterface
{
    
    public function __construct()
    {
        $this->user = new ArrayCollection();
    }
    
    
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
     * @ORM\ManyToMany(targetEntity="AdminBundle\Entity\User")
     *
     */
    private $user;

    
    
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
     * @return datetime
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }
            /**
     * Set updateDate
     *
     * @param datetime $updateDate
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
    
    public  function get(){
        return $this->user;
    }
    
    public function setUser($user){
        $this->user = $user;
        return $this;
    }
    
    public function getRole() {
       return $this->description;
    }

    /**
     * Add user
     *
     * @param \AdminBundle\Entity\User $user
     * @return Roles
     */
    public function addUser(\AdminBundle\Entity\User $user)
    {
        $this->user[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \AdminBundle\Entity\User $user
     */
    public function removeUser(\AdminBundle\Entity\User $user)
    {
        $this->user->removeElement($user);
    }
}
