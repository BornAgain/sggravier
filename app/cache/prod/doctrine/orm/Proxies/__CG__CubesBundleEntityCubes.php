<?php

namespace Proxies\__CG__\CubesBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Cubes extends \CubesBundle\Entity\Cubes implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'CubesBundle\\Entity\\Cubes' . "\0" . 'id', '' . "\0" . 'CubesBundle\\Entity\\Cubes' . "\0" . 'contract', '' . "\0" . 'CubesBundle\\Entity\\Cubes' . "\0" . 'locContract', '' . "\0" . 'CubesBundle\\Entity\\Cubes' . "\0" . 'aCCTDATE', '' . "\0" . 'CubesBundle\\Entity\\Cubes' . "\0" . 'aMTLCY');
        }

        return array('__isInitialized__', '' . "\0" . 'CubesBundle\\Entity\\Cubes' . "\0" . 'id', '' . "\0" . 'CubesBundle\\Entity\\Cubes' . "\0" . 'contract', '' . "\0" . 'CubesBundle\\Entity\\Cubes' . "\0" . 'locContract', '' . "\0" . 'CubesBundle\\Entity\\Cubes' . "\0" . 'aCCTDATE', '' . "\0" . 'CubesBundle\\Entity\\Cubes' . "\0" . 'aMTLCY');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Cubes $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setContract($contract)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContract', array($contract));

        return parent::setContract($contract);
    }

    /**
     * {@inheritDoc}
     */
    public function getContract()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContract', array());

        return parent::getContract();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocContract($locContract)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocContract', array($locContract));

        return parent::setLocContract($locContract);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocContract()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocContract', array());

        return parent::getLocContract();
    }

    /**
     * {@inheritDoc}
     */
    public function setACCTDATE($aCCTDATE)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setACCTDATE', array($aCCTDATE));

        return parent::setACCTDATE($aCCTDATE);
    }

    /**
     * {@inheritDoc}
     */
    public function getACCTDATE()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getACCTDATE', array());

        return parent::getACCTDATE();
    }

    /**
     * {@inheritDoc}
     */
    public function setAMTLCY($aMTLCY)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAMTLCY', array($aMTLCY));

        return parent::setAMTLCY($aMTLCY);
    }

    /**
     * {@inheritDoc}
     */
    public function getAMTLCY()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAMTLCY', array());

        return parent::getAMTLCY();
    }

}