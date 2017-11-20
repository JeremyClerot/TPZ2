<?php
/**
 * Created by PhpStorm.
 * User: jeremyclerot
 * Date: 20/11/2017
 * Time: 14:39
 */

namespace App\Controller;

use App\Calculate\Inventory as Calcul;
use App\Entity\Inventory as Inventory;
use App\Form\InventoryType;
use App\Form\MaterialType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Material;
use Symfony\Component\Validator\Tests\Fixtures\Entity;
class InventoryController extends Controller
{
    /**
     * @Route("/newInventory", name="App_inventory_new")
     */
    public function newAction(Request $request)
    {
        $inv= new Inventory();
        $form = $this->createForm(InventoryType::class,$inv);
        $form->handleRequest($request);
        if( $form->isSubmitted() && $form->isValid() )
        {
            $em = $this->getDoctrine()->getManager();
            $invent =  new Calcul($em);
            $invent->setPerson($inv->getPerson());
            $invent->setInventory($inv);
            if( $invent->calcul())
            {
                $em->persist($inv);
                $em->flush();
                $this->container->get('session')->getFlashBag()->add('infos','Nouveau Inventory créé');
            }
        }
        return $this->render('Inventory/new.html.twig', array('form' => $form->createView()));
    }
    /**
     * @Route("/indexInventory", name="App_inventory_Index")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository(Inventory::class);
        $invs = $repo->findAll();
        return $this->render('Inventory/index.html.twig',array("invs"=> $invs));
    }
}