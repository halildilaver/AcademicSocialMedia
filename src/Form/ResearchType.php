<?php

namespace App\Form;

use App\Entity\Research;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ResearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('keywords')
            ->add('abstract')
            ->add('userid')
            ->add('upload')
            ->add('view')
            ->add('download')
            ->add('username')
            ->add('userlocation')
            ->add('userimage')
            ->add('addtime')
            ->add('recommendname')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Research::class,
            'csrf_protection' => false,
        ]);
    }
}
