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
use Doctrine\Common\Collections\ArrayCollection;

class AvailabilityBDD extends BddFinder
{

    /**
     * Return a collection of availability
     * @return ArrayCollection
     */
    public function findAll()
    {
        $sql = "SELECT * FROM availability ORDER BY 'id' DESC";
        $res = $this->getDB()->fetchAll($sql);
        $availabilities = array();

        foreach ($res as $row){
            $availabilityID = $row['id'];
            $availabilities[$availabilityID] = $this->buildObject($row);
        }

        return $availabilities;
    }

    public function findOneBy($id)
    {
        // TODO: Implement findOneBy() method.

    }

    public function createData()
    {
        // TODO: Implement createData() method.
    }

    public function updateData($id)
    {
        // TODO: Implement updateData() method.
    }

    public function deleteData($id)
    {
        // TODO: Implement deleteData() method.
    }

    protected function buildObject(array $row)
    {
        $availability = new Availability();
        $availability->setId($row['id']);
        $availability->setLabel($row['label']);

        return $availability;
    }

}