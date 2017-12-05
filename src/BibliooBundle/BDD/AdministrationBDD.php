<?php
/**
 * Created by PhpStorm.
 * User: crespeau
 * Date: 05/12/2017
 * Time: 10:08
 */

namespace BibliooBundle\BDD;


use BibliooBundle\Entity\Administration;
use Doctrine\DBAL\Connection;

class AdministrationBDD
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
        $sql = "SELECT * FROM administration ORDER BY 'lastname' DESC";
        $res = $this->db->fetchAll($sql);
        $admins = array();

        foreach ($res as $row){
            $adminID = $row['id'];
            $admins[$adminID] = $this->buildAdmins($row);
        }

        return $admins;
    }

    public function buildAdmins(array $row)
    {
        $admin = new Administration();
        $admin->setId($row['id']);
        $admin->setFirstname($row['firstname']);
        $admin->setLastname($row['lastname']);
        $admin->setEmail($row['mail']);
        $admin->setPassword($row['password']);

        return $admin;
    }
}