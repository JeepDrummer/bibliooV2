<?php
/**
 * Created by PhpStorm.
 * User: crespeau
 * Date: 05/12/2017
 * Time: 11:14
 */

namespace BibliooBundle\BDD;


use BibliooBundle\Entity\Training;
use Doctrine\DBAL\Connection;

class TrainingBDD
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
        $sql = "SELECT * FROM training ORDER BY 'id' DESC";
        $res = $this->db->fetchAll($sql);
        $trainings = array();

        foreach ($res as $row){
            $trainingID = $row['id'];
            $trainings[$trainingID] = $this->buildTrainings($row);
        }

        return $trainings;
    }

    public function buildTrainings(array $row)
    {
        $training = new Training();
        $training->setId($row['id']);
        $training->setLabel($row['label']);

        return $training;
    }
}