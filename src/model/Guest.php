<?php


namespace App\model;


class Guest
{
    private $id;
    private $firstname;
    private $lastname;
    private $entryDate;
    private $departureDate;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * @return string
     */
    public function getEntryDate(): string
    {
        return $this->entryDate;
    }

    /**
     * @param string $entryDate
     */
    public function setEntryDate(string $entryDate): void
    {
        $this->entryDate = $entryDate;
    }

    /**
     * @return string
     */
    public function getDepartureDate(): string
    {
        return $this->departureDate;
    }

    /**
     * @param string $departureDate
     */
    public function setDepartureDate(string $departureDate): void
    {
        $this->departureDate = $departureDate;
    }
}