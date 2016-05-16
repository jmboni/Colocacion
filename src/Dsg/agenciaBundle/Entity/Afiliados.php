<?php

namespace Dsg\agenciaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Afiliados
 */
class Afiliados
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $token;

    /**
     * @var boolean
     */
    private $activado;

    /**
     * @var \DateTime
     */
    private $creado;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $categoria;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categoria = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set url
     *
     * @param string $url
     * @return Afiliados
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Afiliados
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set token
     *
     * @param string $token
     * @return Afiliados
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string 
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set activado
     *
     * @param boolean $activado
     * @return Afiliados
     */
    public function setActivado($activado)
    {
        $this->activado = $activado;

        return $this;
    }

    /**
     * Get activado
     *
     * @return boolean 
     */
    public function getActivado()
    {
        return $this->activado;
    }

    /**
     * Set creado
     *
     * @param \DateTime $creado
     * @return Afiliados
     */
    public function setCreado($creado)
    {
        $this->creado = $creado;

        return $this;
    }

    /**
     * Get creado
     *
     * @return \DateTime 
     */
    public function getCreado()
    {
        return $this->creado;
    }

    /**
     * Add categoria
     *
     * @param \Dsg\agenciaBundle\Entity\Categoria $categoria
     * @return Afiliados
     */
    public function addCategoria(\Dsg\agenciaBundle\Entity\Categoria $categoria)
    {
        $this->categoria[] = $categoria;

        return $this;
    }

    /**
     * Remove categoria
     *
     * @param \Dsg\agenciaBundle\Entity\Categoria $categoria
     */
    public function removeCategoria(\Dsg\agenciaBundle\Entity\Categoria $categoria)
    {
        $this->categoria->removeElement($categoria);
    }

    /**
     * Get categoria
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }
    /**
     * @ORM\PrePersist
     */
    public function setCreadoValue()
    {
        $this->creado = new \DateTime();
    }
    
    public function __toString() {
        return $this->getUrl();
    }

    /**
     * Add categoria
     *
     * @param \Dsg\agenciaBundle\Entity\Categoria $categoria
     * @return Afiliados
     */
    public function addCategorium(\Dsg\agenciaBundle\Entity\Categoria $categoria)
    {
        $this->categoria[] = $categoria;

        return $this;
    }

    /**
     * Remove categoria
     *
     * @param \Dsg\agenciaBundle\Entity\Categoria $categoria
     */
    public function removeCategorium(\Dsg\agenciaBundle\Entity\Categoria $categoria)
    {
        $this->categoria->removeElement($categoria);
    }

    /**
     * @ORM\PrePersist
     */
    public function setTokenValue()
    {
        if(!$this->getToken()) {
        $token = sha1($this->getEmail().rand(11111, 99999));
        $this->token = $token;
    }
 
        return $this;
    }
}
