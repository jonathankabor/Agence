<?php

namespace App\Entity;


use Symfony\Component\Validator\Constraints as Assert;

class Contact
{

    /**
     * @var String|null
     * @Assert\NotBlank()
     * @Assert\Length (min=2, max=50)
     */
    private $firstname;

    /**
     * @var String|null
     * @Assert\NotBlank()
     * @Assert\Length (min=2, max=50)
     */
    private $lastname;

    /**
     * @var String|null
     * @Assert\NotBlank()
     * @Assert\Regex (
     *     pattern="/[0-9]{10}/"
     * )
     */
    private $phone;

    /**
     * @var String|null
     * @Assert\NotBlank()
     * @Assert\Email
     * )
     */
    private $email;

    /**
     * @var String|null
     * @Assert\NotBlank()
     * @Assert\Length (min=10)
     * )
     */
    private $message;

    /**
     * @var Property|null
     */
    private $property;

    /**
     * @return String|null
     */
    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    /**
     * @param String|null $firstname
     */
    public function setFirstname(?string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return String|null
     */
    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    /**
     * @param String|null $lastname
     */
    public function setLastname(?string $lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * @return String|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param String|null $phone
     */
    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return String|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param String|null $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return String|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param String|null $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return Property|null
     */
    public function getProperty(): ?Property
    {
        return $this->property;
    }

    /**
     * @param Property|null $property
     */
    public function setProperty(?Property $property): void
    {
        $this->property = $property;
    }
}