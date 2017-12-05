<?php
/**
 * Created by PhpStorm.
 * User: jeep
 * Date: 05/12/2017
 * Time: 11:14
 */

namespace Biblioo\ToolBox;


use Doctrine\DBAL\Connection;

abstract class BddFinder implements FinderInterface
{

    private $db;

    public function __construct(Connection $db){
        $this->db = $db;
    }

    protected function getDB(){
        return $this->db;
    }

    /**
     * Builds an object with the result of the query
     * @param array $row
     * @return mixed
     */
    protected function buildObject(array $row){
        //todo: override methode in subclass
    }


}