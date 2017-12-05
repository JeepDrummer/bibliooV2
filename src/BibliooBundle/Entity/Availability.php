<?php
/**
 * Created by PhpStorm.
 * User: jeep
 * Date: 05/12/2017
 * Time: 10:12
 */

namespace BibliooBundle\Entity;


class Availability
{
    /**
     * Availability ID
     * @var int
     */
    private $id;

    /**
     * Availability Label
     * @var string
     */
    private $label;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel(string $label)
    {
        $this->label = $label;
    }
}