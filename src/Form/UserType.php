<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            ->add('roles')
            ->add('password')
            ->add('name')
            ->add('Location')
            ->add('School')
            ->add('Department')
            ->add('website')
            ->add('info')
            ->add('skills')
            ->add('phone')
            ->add('fax')
            ->add('email2')
            ->add('workarea')
            ->add('titleandtasks')
            ->add('edulis')
            ->add('edumaster')
            ->add('edudoc')
            ->add('thesismaster')
            ->add('thesisdoc')
            ->add('roomno')
            ->add('image')
            ->add('notification')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'csrf_protection' => false,
        ]);
    }
}
