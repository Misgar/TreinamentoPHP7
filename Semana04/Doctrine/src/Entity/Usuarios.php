<?php

namespace Entity;

use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\ManyToOne;
# Criando tabelas no banco a partir das classes 




/**
 * @Entity
 * @Table(name="usuarios")
 * 
 */
class Usuarios
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @Column(type="string", length=100)
     * 
     */
    protected $nome;
    /**
     * @Column(type="string", length=200)
     * 
     */
    protected $email;
    /**
     * @Column(type="string", length=250)
     * 
     */
    protected $password;

    /**
     * @ManyToOne(targetEntity="Entity\Perfis")
     */
    protected $perfil;


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }


    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of perfil
     */ 
    public function getPerfil()
    {
        return $this->perfil;
    }

    /**
     * Set the value of perfil
     *
     * @return  self
     */ 
    public function setPerfil(Perfis $perfil)
    {
        $this->perfil = $perfil;

        return $this;
    }
}