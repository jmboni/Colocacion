<?php

namespace Proxies\__CG__\Dsg\agenciaBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Afiliados extends \Dsg\agenciaBundle\Entity\Afiliados implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'Dsg\\agenciaBundle\\Entity\\Afiliados' . "\0" . 'id', '' . "\0" . 'Dsg\\agenciaBundle\\Entity\\Afiliados' . "\0" . 'url', '' . "\0" . 'Dsg\\agenciaBundle\\Entity\\Afiliados' . "\0" . 'email', '' . "\0" . 'Dsg\\agenciaBundle\\Entity\\Afiliados' . "\0" . 'token', '' . "\0" . 'Dsg\\agenciaBundle\\Entity\\Afiliados' . "\0" . 'activado', '' . "\0" . 'Dsg\\agenciaBundle\\Entity\\Afiliados' . "\0" . 'creado', '' . "\0" . 'Dsg\\agenciaBundle\\Entity\\Afiliados' . "\0" . 'categoria'];
        }

        return ['__isInitialized__', '' . "\0" . 'Dsg\\agenciaBundle\\Entity\\Afiliados' . "\0" . 'id', '' . "\0" . 'Dsg\\agenciaBundle\\Entity\\Afiliados' . "\0" . 'url', '' . "\0" . 'Dsg\\agenciaBundle\\Entity\\Afiliados' . "\0" . 'email', '' . "\0" . 'Dsg\\agenciaBundle\\Entity\\Afiliados' . "\0" . 'token', '' . "\0" . 'Dsg\\agenciaBundle\\Entity\\Afiliados' . "\0" . 'activado', '' . "\0" . 'Dsg\\agenciaBundle\\Entity\\Afiliados' . "\0" . 'creado', '' . "\0" . 'Dsg\\agenciaBundle\\Entity\\Afiliados' . "\0" . 'categoria'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Afiliados $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setUrl($url)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUrl', [$url]);

        return parent::setUrl($url);
    }

    /**
     * {@inheritDoc}
     */
    public function getUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUrl', []);

        return parent::getUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setToken($token)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setToken', [$token]);

        return parent::setToken($token);
    }

    /**
     * {@inheritDoc}
     */
    public function getToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getToken', []);

        return parent::getToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setActivado($activado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActivado', [$activado]);

        return parent::setActivado($activado);
    }

    /**
     * {@inheritDoc}
     */
    public function getActivado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActivado', []);

        return parent::getActivado();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreado($creado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreado', [$creado]);

        return parent::setCreado($creado);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreado', []);

        return parent::getCreado();
    }

    /**
     * {@inheritDoc}
     */
    public function addCategoria(\Dsg\agenciaBundle\Entity\Categoria $categoria)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCategoria', [$categoria]);

        return parent::addCategoria($categoria);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCategoria(\Dsg\agenciaBundle\Entity\Categoria $categoria)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCategoria', [$categoria]);

        return parent::removeCategoria($categoria);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategoria()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategoria', []);

        return parent::getCategoria();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreadoValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreadoValue', []);

        return parent::setCreadoValue();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function addCategorium(\Dsg\agenciaBundle\Entity\Categoria $categoria)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCategorium', [$categoria]);

        return parent::addCategorium($categoria);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCategorium(\Dsg\agenciaBundle\Entity\Categoria $categoria)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCategorium', [$categoria]);

        return parent::removeCategorium($categoria);
    }

    /**
     * {@inheritDoc}
     */
    public function setTokenValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTokenValue', []);

        return parent::setTokenValue();
    }

}
