<?php
/**
 * Created by PhpStorm.
 * User: jeremyclerot
 * Date: 13/11/2017
 * Time: 14:16
 */

namespace App\Controller;

use App\Form\PersonType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Person;
use Symfony\Component\Validator\Tests\Fixtures\Entity;

class PersonController extends Controller
{
    /**
     * @Route("/newPerson", name="App_Person_new")
     */
    public function newAction(Request $request)
    {
        $person = new Person();
        $form = $this->createForm(PersonType::class,$person);
        $form->handleRequest($request);
        if( $form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($person);
            $em->flush();
            $this->container->get('session')->getFlashBag()->add('infos','Nouveau person créé');
        }
        return $this->render('Person/new.html.twig', array('form' => $form->createView()));
    }
    /**
     * @Route("/indexPerson", name="App_Person_Index")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository(Person::class);
        $users = $repo->findAll();
        return $this->render('Person/index.html.twig',array("users"=> $users));
    }
    /**
     * @Route("/show/{id}", name="App_Person_showInventaire")
     */
    public function showAction(Person $person)
    {
        return $this->render('Person/show.html.twig',array("persons"=> $person));
    }
}