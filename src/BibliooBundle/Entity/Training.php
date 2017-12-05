<?php
/**
 * Created by PhpStorm.
 * User: crespeau
 * Date: 05/12/2017
 * Time: 09:51
 */

namespace BibliooBundle\Entity;


class Training
{
    protected $id;
    protected $label;
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }
    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }
    /**
     * @param mixed $label
     */
    public function setLabel($label): void
    {
        $this->label = $label;
    }
}