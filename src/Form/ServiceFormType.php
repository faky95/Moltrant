<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\Service;

class ServiceFormType extends AbstractType
{
	
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
            $builder->add('nom_service',TextType::class,array('label'=>'Nom Service')) 
                    ->add('description',TextType::class,array('label'=>'Description'))
                    ->add('details', TextareaType::class, array('label' => 'Details'))
			
			->add('save', SubmitType::class, array('label' => 'Enregistrer', 'attr' => array('class' => 'btn btn-success waves-effect waves-light')))
			->add('cancel', SubmitType::class, array('label' => 'Annuler', 'attr' => array('class' => 'btn btn-warning cancel')));
				
    }

    

}
