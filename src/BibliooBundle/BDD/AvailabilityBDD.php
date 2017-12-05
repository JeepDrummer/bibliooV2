<?php
/**
 * Created by PhpStorm.
 * User: crespeau
 * Date: 05/12/2017
 * Time: 11:08
 */

namespace BibliooBundle\BDD;


use BibliooBundle\Entity\Availability;
use Doctrine\DBAL\Connection;

class AvailabilityBDD
{
    /**
     * database connection
     * @var Connection
     */
    private $db;

    public function __construct(Connection $db)
    {
        $this->db = $db;
    }

    public function findAll()
    {
        $sql = "SELECT * FROM availability ORDER BY 'id' DESC";
        $res = $this->db->fetchAll($sql);
        $availabilitys = array();

        foreach ($res as $row){
            $availabilityID = $row['id'];
            $availabilitys[$availabilityID] = $this->buildAvailabilitys($row);
        }

        return $availabilitys;
    }

    public function buildAvailabilitys(array $row)
    {
        $availability = new Availability();
        $availability->setId($row['id']);
        $availability->setLabel($row['label']);

        return $availability;
    }
}