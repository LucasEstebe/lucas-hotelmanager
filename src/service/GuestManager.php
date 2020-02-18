<?php


namespace App\service;


use App\model\Guest;

class GuestManager extends AbstractManager
{

    private $pdo;

    public function __construct(\PDO $pdo)
    {
        parent::__construct();
        $this->pdo = $pdo;
    }

    public function findAll()
    {
        $query = "SELECT * FROM client";
        $statement = $this->pdo->prepare($query);
        $statement->execute();

        $data = $statement->fetchAll(\PDO::FETCH_ASSOC);

        $guests = [];

        foreach($data as $d) {
            $guests[] = $this->arrayToObject($d);
        }

        return $guests;
    }

    /**
     * @param array $array
     * @return Guest
     */
    public function arrayToObject(array $array)
    {
        $guest = new Guest;
        $guest->setId($array['id']);
        $guest->setFirstname($array['firstname']);
        $guest->setLastname($array['lastname']);
        $guest->setEntryDate($array['entry_date']);
        $guest->setDepartureDate($array['departure_date']);
        return $guest;
    }


    public function create(array $data) {
        $query = "INSERT INTO client(firstname,lastname,entry_date,departure_date) VALUES(:firstname,:lastname,:entry_date,:departure_date)";

        $statement = $this->pdo->prepare($query);
        $statement->execute([
            'firstname' => $_POST['firstname'],
            'lastname' => $_POST['lastname'],
            'entry_date' => $_POST['entry_date'],
            'departure_date' => $_POST['departure_date'],
        ]);
    }
}