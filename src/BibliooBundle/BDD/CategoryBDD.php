<?php
/**
 * Created by PhpStorm.
 * User: jeep
 * Date: 04/12/2017
 * Time: 21:07
 */

namespace BibliooBundle\BDD;


use BibliooBundle\Entity\Category;
use Doctrine\DBAL\Connection;

class CategoryBDD
{

    private $db;


    public function __construct(Connection $db)
    {
        $this->db = $db;
    }


    public function findAll()
    {
        $sql = "SELECT * FROM category ORDER BY 'label' DESC";
        $res = $this->db->fetchAll($sql);
        $categorys = array();

        foreach ($res as $row){
            $categoryID = $row['id'];
            $categorys[$categoryID] = $this->buildCategorys($row);
        }

        return $categorys;
    }


    public function buildCategorys(array $row)
    {
        $category = new Category();
        $category->setId($row['id']);
        $category->setLabel($row['label']);

        return $category;
    }
}