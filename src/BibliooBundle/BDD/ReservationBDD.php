<?php
/**
 * Created by PhpStorm.
 * User: crespeau
 * Date: 05/12/2017
 * Time: 11:23
 */

namespace BibliooBundle\BDD;


use BibliooBundle\Entity\Reservation;
use Doctrine\DBAL\Connection;

class ReservationBDD
{
    private $db;


    public function __construct(Connection $db)
    {
        $this->db = $db;
    }


    public function findAll()
    {
        $sql = "SELECT * FROM reservation ORDER BY 'id' DESC";
        $res = $this->db->fetchAll($sql);
        $reservations = array();

        foreach ($res as $row){
            $reservationID = $row['id'];
            $reservations[$reservationID] = $this->buildReservations($row);
        }

        return $reservations;
    }


    public function buildReservations(array $row)
    {
        $reservation = new Reservation();
        $reservation->setId($row['id']);
        $reservation->setLastname($row['lastname']);
        $reservation->setFirstname($row['firstname']);
        $reservation->setDateBack($row['date_back']);
        $reservation->setDateLoan($row['date_loan']);
        $reservation->setDateReservation($row['date_reservation']);
        $reservation->setMail($row['mail']);

        return $reservation;
    }
}