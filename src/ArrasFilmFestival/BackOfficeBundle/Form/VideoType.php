<?php

namespace ArrasFilmFestival\BackOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VideoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('content')
            ->add('created')
            ->add('path')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ArrasFilmFestival\BackOfficeBundle\Entity\Video'
        ));
    }

    public function getName()
    {
        return 'arrasfilmfestival_backofficebundle_videotype';
    }
}