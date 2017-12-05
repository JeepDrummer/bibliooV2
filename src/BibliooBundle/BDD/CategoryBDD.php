<?php
/**
 * Created by PhpStorm.
 * User: jeep
 * Date: 04/12/2017
 * Time: 21:07
 */

namespace BibliooBundle\BDD;


use Biblioo\ToolBox\BddFinder;
use BibliooBundle\Entity\Category;

class CategoryBDD extends BddFinder
{


    public function findAll()
    {
        $sql = "SELECT * FROM category ORDER BY 'label' DESC";
        $res = $this->getDB()->fetchAll($sql);
        $categorys = array();

        foreach ($res as $row){
            $categoryID = $row['id'];
            $categorys[$categoryID] = $this->buildObject($row);
        }

        return $categorys;
    }


    public function buildObject(array $row)
    {
        $category = new Category();
        $category->setId($row['id']);
        $category->setLabel($row['label']);

        return $category;
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