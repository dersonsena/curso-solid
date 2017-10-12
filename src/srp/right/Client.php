<?php
namespace app\srp\right;

use DateTime;

class Client
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $email;

    /**
     * @var DateTime
     */
    private $birthDate;

    public function __construct(string $name, string $email, DateTime $birthDate)
    {
        $this->name = $name;
        $this->email = $email;
        $this->birthDate = $birthDate;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Client
     */
    public function setName(string $name): Client
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Client
     */
    public function setEmail(string $email): Client
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getBirthDate(): DateTime
    {
        return $this->birthDate;
    }

    /**
     * @param DateTime $birthDate
     * @return Client
     */
    public function setBirthDate(DateTime $birthDate): Client
    {
        $this->birthDate = $birthDate;
        return $this;
    }
}