<?php

namespace App\Form;

use App\Entity\Userinfo;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserinfoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('categoryid')
            ->add('title')
            ->add('link')
            ->add('userid')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Userinfo::class,
            'csrf_protection' => false,
        ]);
    }
}
