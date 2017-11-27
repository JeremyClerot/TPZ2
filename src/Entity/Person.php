<?php

/**
 * Created by PhpStorm.
 * User: antoine.lefevre
 * Date: 13/11/17
 * Time: 14:08
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Class Person
 * @ORM\Table
 * @ORM\Entity
 */
class Person
{

    /**
     * @var int
     * @ORM\Id()
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(name="name",type="string")
     */
    protected $name;

    /**
     * @var int
     *
     * @ORM\Column(name="max_weight",type="integer")
     */
    protected $max_weight;

    /**
     *
     * @ORM\OneToMany(targetEntity="Inventory", mappedBy="person")
     */
    protected $inventories;

    /**
     * Person constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getMaxWeight()
    {
        return $this->max_weight;
    }

    /**
     * @param int $max_weight
     */
    public function setMaxWeight($max_weight)
    {
        $this->max_weight = $max_weight;
    }

    function __toString()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getInventories()
    {
        return $this->inventories;
    }

    /**
     * @param mixed $inventories
     */
    public function setInventories($inventories)
    {
        $this->inventories = $inventories;
    }


}