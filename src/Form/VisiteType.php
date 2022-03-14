<?php

namespace App\Form;

use App\Entity\Visite;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VisiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('ville')
            ->add('pays')
            ->add('datecreation', null, [
                'label' =>'Date de création'
            ])
            ->add('note')
            ->add('avis')
            ->add('tempmin', null, [
                'label' => 'Température minimale'
            ])
            ->add('tempmax', null, [
                'label' => 'Température maximale'
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Enregister'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Visite::class,
        ]);
    }
}