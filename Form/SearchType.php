<?php

namespace PlsiRadiodjBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SearchType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options){
//        echo '<pre>' . print_r($options, true) . '<pre>';
//        exit();
//        $builder->setAttribute("class","form-inline")
//        $builder->setAttribute("class","form-horizontal")
        $builder
                ->add('search', 'text'
//                        ,array(
//        'label_attr' => array('class' => 'col-sm-2'),
//        'attr'       => array('class' => 'col-sm-8'),
//                    )
                        )
                ->add('category', 'choice', array(
                            'mapped' => false,
                    'choices' => $this->buildChoices($options['data']['catData'])
                ))
                ->add('subcategory', 'choice', array(
                            'mapped' => false,
                            'choices' => array('0' => 'all')// $this->buildChoices('Subcategory')
                        ))
                ->add('genre', 'choice', array(
                            'mapped' => false,
                    'choices' => $this->buildChoices($options['data']['genData'])
                ));
//                ->add('save', 'submit')
//            ->setAttributes(array('class' => 'demo'));
        
    }

    protected function buildChoices($all){
        $choices = [];
        $choices[] = 'all';
        foreach($all as $table2Obj){
            $choices[$table2Obj->getId()] = $table2Obj->getId() . ' - ' . $table2Obj->getName();
        }
        return $choices;
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
{
    $resolver->setDefaults(array(
//        'attr' => array(
//            'class' => 'form-inline'
//        ),
    ));
}

    public function getName(){
        return 'Search';
    }

}
