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
        $builder->add('matriculaBus')
            ->add('capacidadBus')
            ->add('descripcionBus')
            ->add('choferBus')
            ->add('ayudanteBus')
            ->add('isActive')
            ->add('cooperativa', EntityType::class, array(
                // query choices from this entity
                'class' => 'AppBundle:Cooperativa',
                // use the Category.nombre property as the visible option string
                'choice_label' => function ($cooperativa) {
                    return $cooperativa->getNombreCooperativa();

                },
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
