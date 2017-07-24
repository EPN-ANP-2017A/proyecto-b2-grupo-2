<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ReservaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('numAsientos')->add('fecha')
            
            ->add('usuario', EntityType::class, array(
                // query choices from this entity
                'class' => 'AppBundle:Usuario',
                // use the Category.nombre property as the visible option string
                'choice_label' => function ($usuario) {
                    return $usuario->getNombre();
                },

            ))

            ->add('horario', EntityType::class, array(
                // query choices from this entity
                'class' => 'AppBundle:Horario',
                // use the Category.nombre property as the visible option string
                'choice_label' => function ($horario) {
                    return $horario->getHoraSalida();
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
            'data_class' => 'AppBundle\Entity\Reserva'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_reserva';
    }


}
