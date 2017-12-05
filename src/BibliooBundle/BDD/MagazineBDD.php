<?php
/**
 * Created by PhpStorm.
 * User: crespeau
 * Date: 05/12/2017
 * Time: 11:16
 */

namespace BibliooBundle\BDD;


use Biblioo\ToolBox\BddFinder;
use BibliooBundle\Entity\Magazine;

class MagazineBDD extends BddFinder
{


    public function findAll()
    {
        $sql = "SELECT * FROM magazine ORDER BY 'id' DESC";
        $res = $this->getDB()->fetchAll($sql);
        $magazines = array();

        foreach ($res as $row){
            $magazineID = $row['id'];
            $magazines[$magazineID] = $this->buildObject($row);
        }

        return $magazines;
    }

    public function buildObject(array $row)
    {
        $magazine = new Magazine();
        $magazine->setId($row['id']);
        $magazine->setTitle($row['title']);
        $magazine->setYear($row['year']);
        $magazine->setMonth($row['month']);
        $magazine->setNumber($row['numero']);
        $magazine->setMagCover($row['mag_cover']);
        $magazine->setDescription($row['description']);
        $magazine->setExtLink($row['external_link']);

        return $magazine;
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