<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="pokemon")
 */
class PokemonDresseur implements UserInterface, \Serializable
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idDresseur;

    /**
     * @ORM\Column(type="string" length=250)
     */
    private $nomDress;

    /**
     * @ORM\Column(type="integer")
     */
    private $pieces;

    /**
     * @ORM\Column(type="string", length=250)
     */
    private $mailDress;

    /**
     * @ORM\Column(type="string" length=250)
     */
    private $mdpDress;

    /**
     * @ORM\Column(type="string" length=250)
     */
    private $confirmationToken;

    /**
     * @ORM\Column(type="string" length=250)
     */
    private $confirmationDate;

    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;

    public function __construct()
    {
        $this->isActive = true;
        // may not be needed, see section on salt below
        // $this->salt = md5(uniqid(null, true));
    }

    public function getIdUser()
    {
        return $this->idDresseur;
    }

    public function getUsername()
    {
        return $this->nomDress;
    }

    public function getPieces()
    {
        return $this->pieces;
    }

    public function getMail()
    {
        return $this->mailDress;
    }

    public function getPassword()
    {
        return $this->mdpDress;
    }

    public function getConfirmationToken()
    {
        return $this->confirmationToken;
    }

    public function getConfirmationDate()
    {
        return $this->confirmationDate;
    }

    /**
     * String representation of object
     * @link http://php.net/manual/en/serializable.serialize.php
     * @return string the string representation of the object or null
     * @since 5.1.0
     */
    public function serialize()
    {
        // TODO: Implement serialize() method.
    }

    /**
     * Constructs the object
     * @link http://php.net/manual/en/serializable.unserialize.php
     * @param string $serialized <p>
     * The string representation of the object.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function unserialize($serialized)
    {
        // TODO: Implement unserialize() method.
    }

    public function getRoles()
    {
        return array('ROLE_USER');
    }

    /**
     * Returns the salt that was originally used to encode the password.
     *
     * This can return null if the password was not encoded using a salt.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }
}