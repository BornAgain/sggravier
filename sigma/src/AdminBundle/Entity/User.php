<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * User
 *
 * @ORM\Table(name="fos_user")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\UserRepository")
 */
class User implements UserInterface {

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
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;

    /**

     * @ORM\Column(name="salt", type="string", length=255)

     */
    private $salt;

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
     * @ORM\Column(name="changedPassword", type="boolean")
     */
    private $changedPassword;

    /**
     * @var bool
     *
     * @ORM\Column(name="enabled", type="boolean")
     */
    private $enabled;

    /**

     * @ORM\ManyToMany(targetEntity="AdminBundle\Entity\Roles", cascade={"persist"})
     *
     */
    private $roles;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username) {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password) {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return User
     */
    public function setFirstname($firstname) {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname() {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return User
     */
    public function setLastname($lastname) {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname() {
        return $this->lastname;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return User
     */
    public function setMail($mail) {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail() {
        return $this->mail;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return User
     */
    public function setCreateDate($createDate) {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * Get createDate
     *
     * @return \DateTime
     */
    public function getCreateDate() {
        return $this->createDate;
    }

    /**
     * Set updateDate
     *
     * @param \DateTime $updateDate
     * @return User
     */
    public function setUpdateDate($updateDate) {
        $this->updateDate = $updateDate;

        return $this;
    }

    /**
     * Get updateDate
     *
     * @return \DateTime
     */
    public function getUpdateDate() {
        return $this->updateDate;
    }

    /**
     * Set changedPassword
     *
     * @param boolean $changedPassword
     * @return User
     */
    public function setChangedPassword($changedPassword) {
        $this->changedPassword = $changedPassword;

        return $this;
    }

    /**
     * Get changedPassword
     *
     * @return boolean
     */
    public function getChangedPassword() {
        return $this->changedPassword;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return User
     */
    public function setEnabled($enabled) {
        $this->enabled = $enabled;

        return $this;
    }
       
    /**
     * Get enabled
     *
     * @return boolean
     */
    public function getEnabled() {
        return $this->enabled;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->roles = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set salt
     *
     * @param string $string
     * @return User
     */
    public function setSalt($salt) {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSalt() {
        return $this->salt;
    }
    
    
    public function __toString()
    {
    return (string) $this->description;
    }

    
    /**
     * Get erasecredentials
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function eraseCredentials() {   
    }

  

    /**
     * Add roleUser
     *
     * @param \AdminBundle\Entity\Roles $roles
     * @return User
     */
    public function addRole(\AdminBundle\Entity\Roles $role)
    {
        $this->roles[] = $role;

        return $this;
    }

    /**
     * Remove roleUser
     *
     * @param \AdminBundle\Entity\Roles $roles
     */
    public function removeRole(\AdminBundle\Entity\Roles $role)
    {
        $this->roles->removeElement($role);
    }

    /**
     * Get roles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRoles()
    {
        return $this->roles;
        //return $this->roles->toArray();
        //return array('ROLE_USER');
    }
   
    public function setRoles($roles)
    {
        $this->roles    =    $roles;
        return $this;
    }
   
   
}