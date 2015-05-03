<?php

namespace Blog\GeneraleBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AnimalType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            /*
             *  Le paramétre n'est pas requis
             *      -> required = false
             *      -> Dans l'entité nullable = true
            */
            ->add('description', 'textarea', array(
                'required' => false
            ))
            /*
             *  Ajouter le 2eme parametre url pour le contrôle sur le format des url
             *  qui commence par http://
            */
            ->add('url', 'url')
            // Si on veut pas afficher la date on la vire du form
            //->add('date')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Blog\GeneraleBundle\Entity\Animal'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'blog_generalebundle_animal';
    }
}
