<?php

namespace gueye\blogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
// Ajoutez ces deux use :
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;

class ArticleType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date', 'date')
            ->add('titre', 'text')
            ->add('contenu', 'ckeditor')
            ->add('auteur', 'text')
            // ->add('publication', 'checkbox', array('required' =>false))
            ->add('image', new ImageType()) // Rajoutez cette ligne
            ->add('categories', 'collection', array(
                 'type'          => new CategorieType(),
                 'allow_add'     => true,
                 'allow_delete'  => true
            // ->add('categories', 'entity', array(
            //      'class' => 'gueyeblogBundle:Categorie',
            //      'property' => 'nom',
            //      'multiple' => true
            //      // 'expanded' => true
            ))
        ;

        // On récupère la factory (usine)
        $factory = $builder->getFormFactory();
        // On ajoute une fonction qui va écouter l'événement PRE_SET_DATA
        $builder->addEventListener(
            FormEvents::PRE_SET_DATA, // Ici, on définit l'événement qui nous intéresse
            function(FormEvent $event) use ($factory)
            { // Ici, on définit une fonction qui sera exécutée lors de l'événement
                $article = $event->getData();
                // Cette condition est importante, on en reparle plus loin
                if (null === $article) {
                    return; // On sort de la fonction lorsque $article vaut null
                }
                // 1. Si l'article n'est pas encore publié, on ajoute le champ publication
                if (false === $article->getPublication()) {
                    $event->getForm()->add('publication', 'checkbox', array('required' => false));
                } 
                else { // Sinon, on le supprime
                    $event->getForm()->remove('publication');
                }
                // // 2. Si un User est attaché à  l'article, on n'affiche pas le champ auteur
                // if (null === $article->getAuteur()) {
                //     $event->getForm()->add('auteur', 'text');
                // }
                // else {
                //     $event->getForm()->add('user', 'entity', array('class' => 'SdzUserBundle:User'));
                // }
            }
        );
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'gueye\blogBundle\Entity\Article'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gueye_blogbundle_article';
    }
}
