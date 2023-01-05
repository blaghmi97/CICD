<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('surname', TextType::class,[
                'attr'=>[
                    'placeholder'=>'Entrer votre prénom !'
                ]
            ])
            ->add('name', TextType::class,[
                'attr'=>[
                    'placeholder'=>'Entrer votre nom !'
                ]
            ])
            ->add('address', TextType::class,[
                'attr'=>[
                    'placeholder'=>'Entrer votre adresse postale !'
                ]
            ])
            ->add('city', TextType::class,[
                'attr'=>[
                    'placeholder'=>'Entrer votre ville !'
                ]
            ])
            ->add('country', TextType::class,[
                'attr'=>[
                    'placeholder'=>'Entrer votre pays !'
                ]
            ])
            ->add('aboutUs', ChoiceType::class,[
                'choices'  => [
                    'Par une connaissance' => 'ami',
                    'je suis un client régulier' => 'client',
                    'Sur internet' => 'internet',
                    'Par la famille' => 'famille',
                    'Autre' => 'autre',
                ],
            ])
            ->add('email',TextType::class,[
                'attr'=>[
                    'placeholder'=>'Entrer votre email !'
                ]
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'J’Accepte les conditions d’utilisation .',
                    ]),
                ],
            ])
            ->add('newsletter', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'J’accepte de recevoir la newsletter de TeaTipTop .',
                    ]),
                ],
            ])
            ->add('plainPassword', RepeatedType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password'],
                'type' => PasswordType::class,
                'first_options' => array(
                    'attr'=>[
                        'placeholder'=>'Entrez votre mot de passe !'
                    ]

                ),
                'second_options' => array(
                    'attr'=>[
                        'placeholder'=>'Répétez votre mot de passe !'
                    ]

                ),
                'constraints' => [
                    new NotBlank([
                        'message' => 'Entrez votre mot de passe !',
                    ]),
                    new Length([
                        'min' => 8,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
