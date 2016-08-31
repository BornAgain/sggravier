<?php

namespace DataSourceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Datasource
 *
 * @ORM\Table(name="datasource")
 * @ORM\Entity(repositoryClass="DataSourceBundle\Repository\DatasourceRepository")
 */
class Datasource {

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
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var bool
     *
     * @ORM\Column(name="enabled", type="boolean")
     */
    private $enabled;
    
    /**
     * @var bool
     *
     * @ORM\Column(name="notbuild", type="boolean")
     */
    private $notBuild;
    
    
    
    /**
     * @ORM\OneToMany(targetEntity="DataSourceBundle\Entity\DatasourceDetail", mappedBy="datasource")
     */
    private $datasourcesDetails;

    
    /**
     * @ORM\OneToMany(targetEntity="DataSourceBundle\Entity\File", mappedBy="datasource", cascade={"remove", "persist"})
     * 
     */
    protected $files;
    
    
    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Datasource
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Datasource
     */
    public function setTitle($title) {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return Datasource
     */
    public function setEnabled($enabled) {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return bool
     */
    public function getEnabled() {
        return $this->enabled;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->DatasourceDetails = new \Doctrine\Common\Collections\ArrayCollection();
        $this->setNotBuild(false);
    }

    /**
     * Add datasourcesDetail
     *
     * @param \DataSourceBundle\Entity\DatasourceDetails $datasourcesDetail
     *
     * @return Datasource
     */
    public function addDatasourcesDetail(\DataSourceBundle\Entity\DatasourceDetails $datasourcesDetail) {
        $this->DatasourceDetails[] = $datasourcesDetail;
        $datasourcesDetail->setDatasource($this);

        return $this;
    }

    /**
     * Remove datasourcesDetail
     *
     * @param \DataSourceBundle\Entity\DatasourceDetails $datasourcesDetail
     */
    public function removeDatasourcesDetail(\DataSourceBundle\Entity\DatasourceDetails $datasourcesDetail) {
        $datasourcesDetail->setDatasource(null);
        $this->DatasourceDetails->removeElement($datasourcesDetail);
    }

    /**
     * Get DatasourceDetails
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDatasourceDetails() {
        return $this->DatasourceDetails;
    }

    /**
     * Add DatasourceDetails
     *
     * @param \DatasourceBundle\Entity\DatasourceDetails $datasourceDetails
     * @return Datasource
     */
    public function addDatasourceDetail(\DatasourceBundle\Entity\DatasourceDetails $datasourceDetails) {
        $this->DatasourceDetails[] = $datasourceDetails;

        return $this;
    }

    /**
     * Remove DatasourceDetails
     *
     * @param \DatasourceBundle\Entity\DatasourceDetails $datasourceDetails
     */
    public function removeDatasourceDetail(\DatasourceBundle\Entity\DatasourceDetails $datasourceDetails) {
        $this->DatasourceDetails->removeElement($datasourceDetails);
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return Datasource
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
     * @return Datasource
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
     * Get datasourcesDetails
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDatasourcesDetails()
    {
        return $this->datasourcesDetails;
    }

    /**
     * Set notBuild
     *
     * @param boolean $notBuild
     *
     * @return Datasource
     */
    public function setNotBuild($notBuild)
    {
        $this->notBuild = $notBuild;

        return $this;
    }

    /**
     * Get notBuild
     *
     * @return boolean
     */
    public function getNotBuild()
    {
        return $this->notBuild;
    }

    /**
     * Add file
     *
     * @param \DataSourceBundle\Entity\File $file
     *
     * @return Datasource
     */
    public function addFile(\DataSourceBundle\Entity\File $file)
    {
        $file->setDatasource($this);
        $this->files[] = $file;

        return $this;
    }

    /**
     * Remove file
     *
     * @param \DataSourceBundle\Entity\File $file
     */
    public function removeFile(\DataSourceBundle\Entity\File $file)
    {
        $file->setDatasource(null);
        $this->files->removeElement($file);
    }

    /**
     * Get files
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFiles()
    {
        return $this->files;
    }
}
