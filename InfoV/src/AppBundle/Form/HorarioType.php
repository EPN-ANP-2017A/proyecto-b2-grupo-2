<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class HorarioType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('horaSalida')
            ->add('destino', EntityType::class, array(
                // query choices from this entity
                'class' => 'AppBundle:Destino',
                // use the Category.nombre property as the visible option string
                'choice_label' => function ($destino) {
                    return $destino->getLugarDestino();
                },

            ))

            ->add('bus', EntityType::class, array(
                // query choices from this entity
                'class' => 'AppBundle:Bus',
                // use the Category.nombre property as the visible option string
                'choice_label' => function ($bus) {
                    return $bus->getMatriculaBus();
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
            'data_class' => 'AppBundle\Entity\Horario'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_horario';
    }


}
