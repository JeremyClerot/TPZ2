<?php
/**
 * Created by PhpStorm.
 * User: jeremyclerot
 * Date: 20/11/2017
 * Time: 14:39
 */

namespace App\Form;

use App\Entity\Inventory;
use App\Entity\Material;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InventoryType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array('data_class' => Inventory::class));
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('material', null)
            ->add('person', null)
            ->add('number_of_item', NumberType::class)
            ->add('save', SubmitType::class, array('label' =>"créer"))
            ->getForm();
    }
}