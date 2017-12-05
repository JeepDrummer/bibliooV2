<?php
/**
 * Created by PhpStorm.
 * User: jeep
 * Date: 05/12/2017
 * Time: 11:38
 */

namespace Biblioo\ToolBox;


interface FinderInterface
{
    /**
     * returns all table entries
     * @return mixed
     */
    public function findAll();

    /**
     * Returns one entry by id
     * @param $id
     * @return mixed
     */
    public function findOneBy($id);

    /**
     * Adds a row to the database table
     * @return mixed
     */
    public function createData();

    /**
     * Update a line in the database table
     * @return mixed
     */
    public function updateData($id);

    /**
     * Delete a line in the database table
     */
    public function deleteData($id);


}