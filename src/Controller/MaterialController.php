<?php
/**
 * Created by PhpStorm.
 * User: jeremyclerot
 * Date: 20/11/2017
 * Time: 13:27
 */

namespace App\Controller;

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

class MaterialController extends Controller
{
    /**
     * @Route("/newMaterial", name="App_material_new")
     */
    public function newAction(Request $request)
    {
        $mat = new Material();
        $form = $this->createForm(MaterialType::class,$mat);
        $form->handleRequest($request);
        if( $form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($mat);
            $em->flush();
            $this->container->get('session')->getFlashBag()->add('infos','Nouveau Material créé');
        }
        return $this->render('Material/new.html.twig', array('form' => $form->createView()));
    }
    /**
     * @Route("/indexMaterial", name="App_material_Index")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository(Material::class);
        $users = $repo->findAll();
        return $this->render('Material/index.html.twig',array("materials"=> $users));
    }
}