<?php
/**
 * Created by PhpStorm.
 * User: crespeau
 * Date: 05/12/2017
 * Time: 11:08
 */

namespace BibliooBundle\BDD;


use Biblioo\ToolBox\BddFinder;
use BibliooBundle\Entity\Availability;

class AvailabilityBDD extends BddFinder
{


    public function findAll()
    {
        $sql = "SELECT * FROM availability ORDER BY 'id' DESC";
        $res = $this->getDB()->fetchAll($sql);
        $availabilitys = array();

        foreach ($res as $row){
            $availabilityID = $row['id'];
            $availabilitys[$availabilityID] = $this->buildObject($row);
        }

        return $availabilitys;
    }

    protected function buildObject(array $row)
    {
        $availability = new Availability();
        $availability->setId($row['id']);
        $availability->setLabel($row['label']);

        return $availability;
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