<?php
/**
 * Created by PhpStorm.
 * User: crespeau
 * Date: 05/12/2017
 * Time: 11:14
 */

namespace BibliooBundle\BDD;


use Biblioo\ToolBox\BddFinder;
use BibliooBundle\Entity\Training;
use Doctrine\DBAL\DBALException;

class TrainingBDD extends BddFinder
{


    public function findAll()
    {
        // TODO: test
        $sql = "SELECT * FROM training ORDER BY 'id' DESC";
        $res = $this->getDB()->fetchAll($sql);
        $trainings = array();

        foreach ($res as $row){
            $trainingID = $row['id'];
            $trainings[$trainingID] = $this->buildObject($row);
        }

        return $trainings;
    }

    public function buildObject(array $row)
    {
        $training = new Training();
        $training->setId($row['id']);
        $training->setLabel($row['label']);

        return $training;
    }

    /**
     * Returns one entry by id
     * @param $id
     * @return mixed
     */
    public function findOneBy($id)
    {
        // TODO: test
        $sql = "SELECT * FROM training WHERE 'id'=".$id;
        $res = $this->getDB()->fetchAll($sql);
        $trainings = array();

        foreach ($res as $row){
            $trainingID = $row['id'];
            $trainings[$trainingID] = $this->buildObject($row);
        }

        return $trainings;
    }

    /**
     * Adds a row to the database table
     * @return mixed
     */
    public function createData()
    {
        // TODO: test
        $label = $_POST['label'];

        if (isset($label)){
            $sql = "INSERT INTO trainning (label) VALUES (".$label.") ";
            try {
                $this->getDB()->executeQuery($sql);
            } catch (DBALException $e) {
                return $e->getMessage();
            }
        }
    }

    /**
     * Update a line in the database table
     * @return mixed
     */
    public function updateData($id)
    {
        // TODO: test
        $label = $_POST['label'];

        $sql = "UPDATE training SET label=".$label." WHERE id=".$id;
        try {
            $this->getDB()->executeQuery($sql);
        } catch (DBALException $e) {
            return $e->getMessage();
        }

    }

    /**
     * Delete a line in the database table
     */
    public function deleteData($id)
    {
        // TODO: test
        $sql = "DELETE FROM training WHERE id=".$id ;
        try {
            $this->getDB()->executeQuery($sql);
        } catch (DBALException $e) {
            return $e->getMessage();
        }
    }
}