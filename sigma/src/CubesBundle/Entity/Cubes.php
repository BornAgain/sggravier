<?php

namespace CubesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cubes
 *
 * @ORM\Table(name="cubes")
 * @ORM\Entity(repositoryClass="CubesBundle\Repository\CubesRepository")
 */
class Cubes
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
     * @ORM\Column(name="Contract", type="string", length=255)
     */
    private $contract;

    /**
     * @var string
     *
     * @ORM\Column(name="Loc_Contract", type="string", length=255)
     */
    private $locContract;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ACCT_DATE", type="datetime")
     */
    private $aCCTDATE;

    /**
     * @var string
     *
     * @ORM\Column(name="AMT_LCY", type="decimal", precision=10, scale=0)
     */
    private $aMTLCY;


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
     * Set contract
     *
     * @param string $contract
     * @return Cubes
     */
    public function setContract($contract)
    {
        $this->contract = $contract;

        return $this;
    }

    /**
     * Get contract
     *
     * @return string 
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Set locContract
     *
     * @param string $locContract
     * @return Cubes
     */
    public function setLocContract($locContract)
    {
        $this->locContract = $locContract;

        return $this;
    }

    /**
     * Get locContract
     *
     * @return string 
     */
    public function getLocContract()
    {
        return $this->locContract;
    }

    /**
     * Set aCCTDATE
     *
     * @param \DateTime $aCCTDATE
     * @return Cubes
     */
    public function setACCTDATE($aCCTDATE)
    {
        $this->aCCTDATE = $aCCTDATE;

        return $this;
    }

    /**
     * Get aCCTDATE
     *
     * @return \DateTime 
     */
    public function getACCTDATE()
    {
        return $this->aCCTDATE;
    }

    /**
     * Set aMTLCY
     *
     * @param string $aMTLCY
     * @return Cubes
     */
    public function setAMTLCY($aMTLCY)
    {
        $this->aMTLCY = $aMTLCY;

        return $this;
    }

    /**
     * Get aMTLCY
     *
     * @return string 
     */
    public function getAMTLCY()
    {
        return $this->aMTLCY;
    }
}
