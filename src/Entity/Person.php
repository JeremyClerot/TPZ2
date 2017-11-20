<?php
/**
 * Created by PhpStorm.
 * User: jeremyclerot
 * Date: 13/11/2017
 * Time: 14:12
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
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue
     */
    protected $id;
    /**
     * @var string
     * @ORM\Column(name="name",type="string",length=255)
     *
     */
    protected $name;
    /**
     * @var int
     * @ORM\Column(name="maxWeight",type="integer")
     *
     */
    protected $max_weight;
    /**
     *
     * @ORM\OneToMany(targetEntity="Inventory",mappedBy="person")
     *
     */
    protected $inventories;
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
}