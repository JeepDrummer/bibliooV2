<?php
/**
 * Created by PhpStorm.
 * User: crespeau
 * Date: 05/12/2017
 * Time: 11:16
 */

namespace BibliooBundle\BDD;


use BibliooBundle\Entity\Magazine;
use Doctrine\DBAL\Connection;

class MagazineBDD
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
        $sql = "SELECT * FROM magazine ORDER BY 'id' DESC";
        $res = $this->db->fetchAll($sql);
        $magazines = array();

        foreach ($res as $row){
            $magazineID = $row['id'];
            $magazines[$magazineID] = $this->buildMagazines($row);
        }

        return $magazines;
    }

    public function buildMagazines(array $row)
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
}