<?php
/**
 * Created by PhpStorm.
 * User: jeremyclerot
 * Date: 20/11/2017
 * Time: 19:04
 */

namespace App\Calculate;

use Doctrine\ORM\EntityManager;

class Inventory
{
    private $entityManager;
    private $person;
    private $inventory;
    /**
     * Inventory constructor.
     * @param $entityManager
     */
    public function __construct(\Doctrine\ORM\EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    public function calcul(){
        $maxWeight = $this->person->getMaxWeight();
        $totalWeight = 0;
        foreach( $this->person->getInventories()  as  $inv)
        {
            $totalWeight += $inv->getMaterial()->getWeight() * $inv->getNumberOfItem();
        }
        $totalWeight += $this->inventory->getMaterial()->getWeight() * $this->inventory->getNumberOfItem();
        if( $totalWeight > $maxWeight)
        {
            return false;
        }
        else{
            return true;
        }
    }
    /**
     * @param mixed $person
     */
    public function setPerson($person)
    {
        $this->person = $person;
    }
    /**
     * @param mixed $inventory
     */
    public function setInventory($inventory)
    {
        $this->inventory = $inventory;
    }
}