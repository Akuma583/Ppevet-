<?php

namespace App\Form;

use App\Entity\Vetement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VetementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomVet')
            ->add('prix')
            ->add('image')
            ->add('idColoris')
            ->add('idTaille')
            ->add('idTypevet')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Vetement::class,
        ]);
    }
}
