<?php

namespace ProjetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProjetType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomProjet')
            ->add('description')
            ->add('dateDebut')
            ->add('dateFinProjet')
            ->add('dateButoir')
            ->add('fonctionalitedev')
            ->add('hebergement')
            ->add('preprod')
            ->add('url')
            ->add('save', SubmitType::class, [
                'label' => 'Envoyer',
                'attr' => [
                    'class' => 'btn'
                ]
            ]);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ProjetBundle\Entity\Projet'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'projetbundle_projet';
    }


}
