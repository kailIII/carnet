<?php

namespace CarnetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * Contact
 *
 * @ORM\Table(name="contact")
 * @ORM\Entity(repositoryClass="CarnetBundle\Repository\ContactRepository")
 * @UniqueEntity(fields="email", message="email existant.")
 */
class Contact
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
     * @ORM\ManyToOne(targetEntity="CarnetBundle\Entity\User")
     */
    private $owner;

    public function getOwner()
    {
        return $this->owner;
    }

    public function setOwner(User $owner)
    {
        $this->owner = $owner;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="fisrtName", type="string", length=255)
     */
    private $fisrtName;

    /**
     * @var string
     *
     * @ORM\Column(name="lasteName", type="string", length=255)
     */
    private $lasteName;


    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=255, unique=true)
     * @Assert\Email()
     */
    protected $email;

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="text")
     */
    private $adress;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=255)
     */
    private $website;


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
     * Set fisrtName
     *
     * @param string $fisrtName
     *
     * @return Contact
     */
    public function setFisrtName($fisrtName)
    {
        $this->fisrtName = $fisrtName;

        return $this;
    }

    /**
     * Get fisrtName
     *
     * @return string
     */
    public function getFisrtName()
    {
        return $this->fisrtName;
    }

    /**
     * Set lasteName
     *
     * @param string $lasteName
     *
     * @return Contact
     */
    public function setLasteName($lasteName)
    {
        $this->lasteName = $lasteName;

        return $this;
    }

    /**
     * Get lasteName
     *
     * @return string
     */
    public function getLasteName()
    {
        return $this->lasteName;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Contact
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
     * Set adress
     *
     * @param string $adress
     *
     * @return Contact
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Contact
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set website
     *
     * @param string $website
     *
     * @return Contact
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }


}



