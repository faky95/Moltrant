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
use App\Entity\Photo;


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
			//->add('matricule', null, array('label' => 'Matricule :'))
			->add('plainPassword', RepeatedType::class, array(
					'type' => PasswordType::class,
            		'options' => array('translation_domain' => 'FOSUserBundle'),
            		'first_options' => array('label' => 'form.password', 'attr' => array('placeholder' => 'Saisir le mot de passe')),
            		'second_options' => array('label' => 'form.password_confirmation', 'attr' => array('placeholder' => 'Confirmation')),
            		'invalid_message' => 'fos_user.password.mismatch',
				  ))
			->add('etude',null,array('label'=>'Niveau d\'Etudes :' )) 
			->add('photo',FileType::class,array('label'=>'Votre Photo :'))     
			->add('nom_entreprise',TextType::class,array('label'=>'Entreprise :','required' => true )) 
			->add('secteur', null, array('label' => 'Secteur d\'Activite :'))
			->add('anneActivite',TextType::class,array('label'=>'Nombre d\'Annees d\'Activite :','required' => true ))      
			->add('localite',TextType::class,array('label'=>'Localité :','required' => true ))      
            ->add('employes',null,array('label'=>'Nombre d\'Employes :','required' => true ))      
            ->add('chiffre_affaire',TextType::class,array('label'=>'Chiffre d\'Affaire :','required' => true ))      
            ->add('date_adhesion',DateType::class,array('label'=>'Date d\'Adhesion :','required' => true ))           
			->add('add', SubmitType::class, array('label' => 'Enregistrer', 'attr' => array('class' => 'btn btn-info marginR10 marginL10')))
            ->add('cancel', SubmitType::class, array('label' => 'Annuler', 'attr' => array('class' => 'btn btn-danger')));
   	  
				  
				  
    }
    
    public function getName() {
		return 'orange_user_registration';
	}

}