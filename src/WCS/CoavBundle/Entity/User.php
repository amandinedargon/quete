<?php

namespace WCS\CoavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="WCS\CoavBundle\Repository\UserRepository")
 */
class User
{

    public function __toString()
    {
        return $this->firstName . " " . $this->lastName;
    }

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
     * @ORM\Column(name="userName", type="string", length=32)
     */
    private $userName;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=32)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=32)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=64)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="phoneNumber", type="string", length=32)
     */
    private $phoneNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthDate", type="date")
     */
    private $birthDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creationDate", type="datetime")
     *
     */
    private $creationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=16)
     */
    private $role;

    /**
     * @var int
     *
     * @ORM\Column(name="note", type="smallint", nullable=true)
     */
    private $note;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="WCS\CoavBundle\Entity\Review")
     * @ORM\JoinColumn(nullable=true)
     */
    private $reviews;

    /**
     * @var bool
     *
     * @ORM\Column(name="isACertifiedPilot", type="boolean")
     */
    private $isACertifiedPilot;

    /**
     * @var bool
     *
     * @ORM\Column(name="isActive", type="boolean")
     */
    private $isActive;

    /**
    * @ORM\ManyToMany(targetEntity="WCS\CoavBundle\Entity\Reservation", mappedBy="passenger")
    * @ORM\JoinColumn(nullable=false)
    */
    private $reservations;

    /**
     * @ORM\OneToMany(targetEntity="WCS\CoavBundle\Entity\Flight", mappedBy="pilot")
     */
    private $pilots;


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
     * Set userName
     *
     * @param string $userName
     *
     * @return User
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
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
     * Set phoneNumber
     *
     * @param string $phoneNumber
     *
     * @return User
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     *
     * @return User
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     *
     * @return User
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return User
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set note
     *
     * @param integer $note
     *
     * @return User
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return int
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set reviews
     *
     * @param integer $reviews
     *
     * @return User
     */
    public function setReviews($reviews)
    {
        $this->reviews = $reviews;

        return $this;
    }

    /**
     * Get reviews
     *
     * @return int
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * Set isACertifiedPilot
     *
     * @param boolean $isACertifiedPilot
     *
     * @return User
     */
    public function setIsACertifiedPilot($isACertifiedPilot)
    {
        $this->isACertifiedPilot = $isACertifiedPilot;

        return $this;
    }

    /**
     * Get isACertifiedPilot
     *
     * @return bool
     */
    public function getIsACertifiedPilot()
    {
        return $this->isACertifiedPilot;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return User
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reservations = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add reservation
     *
     * @param \WCS\CoavBundle\Entity\Reservation $reservation
     *
     * @return User
     */
    public function addReservation(\WCS\CoavBundle\Entity\Reservation $reservation)
    {
        $this->reservations[] = $reservation;

        return $this;
    }

    /**
     * Remove reservation
     *
     * @param \WCS\CoavBundle\Entity\Reservation $reservation
     */
    public function removeReservation(\WCS\CoavBundle\Entity\Reservation $reservation)
    {
        $this->reservations->removeElement($reservation);
    }

    /**
     * Get reservations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReservations()
    {
        return $this->reservations;
    }

    /**
     * Add pilot
     *
     * @param \WCS\CoavBundle\Entity\Flight $pilot
     *
     * @return User
     */
    public function addPilot(\WCS\CoavBundle\Entity\Flight $pilot)
    {
        $this->pilots[] = $pilot;

        return $this;
    }

    /**
     * Remove pilot
     *
     * @param \WCS\CoavBundle\Entity\Flight $pilot
     */
    public function removePilot(\WCS\CoavBundle\Entity\Flight $pilot)
    {
        $this->pilots->removeElement($pilot);
    }

    /**
     * Get pilots
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPilots()
    {
        return $this->pilots;
    }

    /**
     * Add rate
     *
     * @param \WCS\CoavBundle\Entity\Review $rate
     *
     * @return User
     */
    public function addRate(\WCS\CoavBundle\Entity\Review $rate)
    {
        $this->rates[] = $rate;

        return $this;
    }

    /**
     * Remove rate
     *
     * @param \WCS\CoavBundle\Entity\Review $rate
     */
    public function removeRate(\WCS\CoavBundle\Entity\Review $rate)
    {
        $this->rates->removeElement($rate);
    }

    /**
     * Get rates
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRates()
    {
        return $this->rates;
    }

    /**
     * Add author
     *
     * @param \WCS\CoavBundle\Entity\Review $author
     *
     * @return User
     */
    public function addAuthor(\WCS\CoavBundle\Entity\Review $author)
    {
        $this->authors[] = $author;

        return $this;
    }

    /**
     * Remove author
     *
     * @param \WCS\CoavBundle\Entity\Review $author
     */
    public function removeAuthor(\WCS\CoavBundle\Entity\Review $author)
    {
        $this->authors->removeElement($author);
    }

    /**
     * Get authors
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAuthors()
    {
        return $this->authors;
    }
}
