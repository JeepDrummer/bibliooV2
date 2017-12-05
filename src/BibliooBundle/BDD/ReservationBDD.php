<?php
/**
 * Created by PhpStorm.
 * User: crespeau
 * Date: 05/12/2017
 * Time: 11:23
 */

namespace BibliooBundle\BDD;


use Biblioo\ToolBox\BddFinder;
use BibliooBundle\Entity\Reservation;

class ReservationBDD extends BddFinder
{


    public function findAll()
    {
        $sql = "SELECT * FROM reservation ORDER BY 'id' DESC";
        $res = $this->getDB()->fetchAll($sql);
        $reservations = array();

        foreach ($res as $row){
            $reservationID = $row['id'];
            $reservations[$reservationID] = $this->buildObject($row);
        }

        return $reservations;
    }


    public function buildObject(array $row)
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

    /**
     * Returns one entry by id
     * @param $id
     * @return mixed
     */
    public function findOneBy($id)
    {
        // TODO: Implement findOneBy() method.
    }

    /**
     * Adds a row to the database table
     * @return mixed
     */
    public function createData()
    {
        // TODO: Implement createData() method.
    }

    /**
     * Update a line in the database table
     * @return mixed
     */
    public function updateData($id)
    {
        // TODO: Implement updateData() method.
    }

    /**
     * Delete a line in the database table
     */
    public function deleteData($id)
    {
        // TODO: Implement deleteData() method.
    }
}