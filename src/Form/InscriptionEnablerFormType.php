<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\InscriptionEnabler;

class InscriptionEnablerFormType extends AbstractType
{
	
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
            $builder->add('fonction_actuelle',TextType::class,array('label'=>'Votre Fonction Actuelle')) 
                    ->add('experience_professionnelle',TextType::class,array('label'=>'Votre Experience Professionnelle'))
                    ->add('enabler_specialite', EntityType::class, array('label' => 'Domaine Specifique:','multiple' => true, 'class'=>'App\Entity\Specialite'))
                    ->add('enabler_secteur', EntityType::class, array('label' => 'Experience Sectorelle:','multiple' => true, 'class'=>'App\Entity\SecteurActivite'))
                    ->add('heure',null,array('label'=>'Votre Disponibilite'))
                    //->add('cellulaire',TextType::class,array('label'=>'Votre Fonction Actuelle'))
                   // ->add('specialite',TextType::class,array('label'=>'Votre Fonction Actuelle'))
                    ->add('precisions',TextareaType::class,array('label'=>'Autres Precisions'))

			
			->add('save', SubmitType::class, array('label' => 'Enregistrer', 'attr' => array('class' => 'btn btn-success waves-effect waves-light')))
			->add('cancel', SubmitType::class, array('label' => 'Annuler', 'attr' => array('class' => 'btn btn-warning cancel', 'data-dismiss'=>'modal')));
				
    }

    

}
