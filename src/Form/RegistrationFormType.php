<?php
namespace App\Form;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use App\Entity\Utilisateur;



class RegistrationFormType extends BaseType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		parent::buildForm($builder, $options);
		// add your custom field
		$builder->add('username', TextType::class, array('label' => 'Nom d\'utilisateur :','required' => true ))
			->add('nom', TextType::class, array('label' => 'Nom :','required' => true ))
			->add('prenom', TextType::class, array('label' => 'Prénom :','required' => true ))
			->add('email', TextType::class, array('label' => 'Adresse Email :','required' => true ))
            ->add('telephone', null, array('label' => 'Téléphone :','required' => true ))
            ->add('sexe', ChoiceType::class, array('label' => 'Genre',
            'choices'=>[
                'masculin'=>'0',
                'feminin'=>'1'
            ]))
            ->add('date_naissance', DateType::class, array('label'=>'Date De Naissance :'))
			->add('coach', null, array('label' => 'Est-il coach ?' ))
			->add('isAdmin', null, array('label' => 'Est-il un administrateur ?'))
			->add('enabler', null, array('label' => 'Est-il un enabler ? '))
			->add('plainPassword', RepeatedType::class, array(
					'type' => PasswordType::class,
            		'options' => array('translation_domain' => 'FOSUserBundle'),
            		'first_options' => array('label' => 'form.password', 'attr' => array('placeholder' => 'Saisir le mot de passe')),
            		'second_options' => array('label' => 'form.password_confirmation', 'attr' => array('placeholder' => 'Confirmation')),
            		'invalid_message' => 'fos_user.password.mismatch',
				  ))
			->add('etude',null,array('label'=>'Niveau d\'Etudes :' )) 
			->add('photo',FileType::class,array('label'=>'Votre Photo :')) 
			->add('specialites',null,array('label'=>''))    
			->add('nom_entreprise',TextType::class,array('label'=>'Entreprise :','required' => false)) 
			->add('secteur', null, array('label' => 'Secteur d\'Activite :'))
			->add('anneActivite',TextType::class,array('label'=>'Nombre d\'Annees d\'Activite :','required' => false ))      
			->add('localite',TextType::class,array('label'=>'Localité :','required' => false ))      
            ->add('employes',null,array('label'=>'Nombre d\'Employes :','required' => false ))      
            ->add('chiffre_affaire',TextType::class,array('label'=>'Chiffre d\'Affaire :','required' => false ))      
            ->add('date_adhesion',DateType::class,array('label'=>'Date d\'Adhesion :','required' => false ))           
			->add('add', SubmitType::class, array('label' => 'Enregistrer', 'attr' => array('class' => 'btn btn-info marginR10 marginL10')))
            ->add('cancel', SubmitType::class, array('label' => 'Annuler', 'attr' => array('class' => 'btn btn-danger')));
   	  
				  
				  
    }
    
    public function getName() {
		return 'orange_user_registration';
	}

}