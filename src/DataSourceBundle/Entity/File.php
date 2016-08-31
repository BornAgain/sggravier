<?php

namespace DataSourceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * File
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="DataSourceBundle\Entity\FileRepository")
 */
class File {

    /**
     * @var integer
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
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=500)
     */
    private $url;
    
    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=500)
     */
    private $content;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="header", type="string", length=500,nullable=true)
     */
    private $header;
    /**
     * @var string
     *
     * @ORM\Column(name="file", type="string", length=500)
     * @Assert\File(maxSize="2147483648")
     * 
     */
    private $file;

    /**
     * @ORM\ManyToOne(targetEntity="DataSourceBundle\Entity\Datasource",cascade={"persist"},inversedBy="files")
     * @ORM\JoinColumn(nullable=True)
     */
    private $datasource;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return File
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
     * Set type
     *
     * @param string $type
     *
     * @return File
     */
    public function setType($type) {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return File
     */
    public function setUrl($url) {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl() {
        return $this->url;
    }




    /**
     * Set file
     *
     * @param string $file
     *
     * @return File
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set datasource
     *
     * @param \DataSourceBundle\Entity\Datasource $datasource
     *
     * @return File
     */
    public function setDatasource(\DataSourceBundle\Entity\Datasource $datasource = null)
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

    /**
     * Set content
     *
     * @param string $content
     *
     * @return File
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set header
     *
     * @param string $header
     *
     * @return File
     */
    public function setHeader($header)
    {
        $this->header = $header;

        return $this;
    }

    /**
     * Get header
     *
     * @return string
     */
    public function getHeader()
    {
        return $this->header;
    }
}
