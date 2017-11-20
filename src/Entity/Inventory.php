<?php
/**
 * Created by PhpStorm.
 * User: jeremyclerot
 * Date: 20/11/2017
 * Time: 14:03
 */

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Class Inventory
 * @ORM\Table
 * @ORM\Entity
 */
class Inventory
{
    /**
     * @var int
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue
     */
    protected $id;
    /**
     *
     * @ORM\ManyToOne(targetEntity="Person",inversedBy="inventories")
     * @ORM\JoinColumn(name="person_id",referencedColumnName="id")
     *
     */
    protected $person;
    /**
     *
     * @ORM\ManyToOne(targetEntity="Material")
     * @ORM\JoinColumn(name="material_id",referencedColumnName="id")
     *
     */
    protected $material;
    /**
     * @var int
     * @ORM\Column(name="number_of_item",type="integer")
     *
     */
    protected $numberOfItem;
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
     * @return mixed
     */
    public function getPerson()
    {
        return $this->person;
    }
    /**
     * @param mixed $person
     */
    public function setPerson($person)
    {
        $this->person = $person;
    }
    /**
     * @return mixed
     */
    public function getMaterial()
    {
        return $this->material;
    }
    /**
     * @param mixed $material
     */
    public function setMaterial($material)
    {
        $this->material = $material;
    }
    /**
     * @return int
     */
    public function getNumberOfItem()
    {
        return $this->numberOfItem;
    }
    /**
     * @param int $numberOfItem
     */
    public function setNumberOfItem($numberOfItem)
    {
        $this->numberOfItem = $numberOfItem;
    }
}