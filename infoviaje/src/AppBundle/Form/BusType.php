<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class BusType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('matricula')
            ->add('capacidad')
            ->add('descripcionBus')
            ->add('nomChofer')
            ->add('nomAyudante')
            //->add('cooperativa')
            ->add('cooperativa', EntityType::class, array(
                // query choices from this entity
                'class' => 'AppBundle:Cooperativa',
                // use the Category.nombre property as the visible option string
                'choice_label' => function ($cooperativa) {
                    return $cooperativa->getNombreCoop();
                },
                // used to render a select box, check boxes or radios
                // uncomment both lines to render as checkboxes
                // 'multiple' => true, // <===== uncomment this to render as multiple choice list
                // 'expanded' => true, // <===== uncomment this to render as radios
            ))
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Bus'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_bus';
    }


}
