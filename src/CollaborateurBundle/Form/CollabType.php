<?php

namespace CollaborateurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CollabType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('passwordCollab')
            ->add('emailCollab')
            ->add('nomCollab')
            ->add('prenomCollab')
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
            'data_class' => 'CollaborateurBundle\Entity\Collab'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'collaborateurbundle_collab';
    }


}
